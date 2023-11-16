<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Models\Service;
use Exception;
use Illuminate\Http\RedirectResponse;

class ServicesController extends Controller
{
  /**
   * Devuelve los datos de todos los servicios en la vista de servicios
   * @return View
   */
  public function index(): View
  {
    return view('services.index', ["services" => Service::orderBy('duration', 'asc')->with(['destiny'])->get()]);
  }

  /**
   * Devuelve los datos de un servicio específico en la vista del servicio
   * @param int $id
   * @return View
   */
  public function service(int $id): View
  {
    return view('services.service', ["service" => Service::findOrFail($id)]);
  }

  /**
   * Recibe los datos y crea una nueva contratación, devuelve un redirección
   * @param Request $request
   * @return RedirectResponse
   */
  public function purchase(int $id, Request $request): RedirectResponse
  {
    try {
      $purchase = $request->except(['_token']);
      $request->validate(Purchase::$rules, Purchase::$errorMessages);
      $service = Service::findOrFail($id);
      $purchase['service_id'] = $service->id;
      $purchase['service_name'] = $service->destiny->name;
      $purchase['price'] = $service->price;
      Purchase::create($purchase);
      return redirect('/')
        ->with('status.message', '<b>Se ha realizado la contratación correctamente.</b><br />Dentro de unos minutos le llegara un correo con todos los datos.')
        ->with('status.success', true);
    } catch (Exception $e) {
      return redirect('/')
        ->with('status.message', 'No se ha podido realizar la contratación.' . "$e")
        ->with('status.error', true);
    }
  }
}
