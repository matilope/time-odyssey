<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Models\Service;
use Exception;
use Illuminate\Http\RedirectResponse;
use MercadoPago\Client\Preference\PreferenceClient;
use MercadoPago\MercadoPagoConfig;

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
    $service = Service::findOrFail($id);
    if(auth()->user()) {
      MercadoPagoConfig::setAccessToken(env("MP_ACCESS_TOKEN"));
      $client = new PreferenceClient();
      $preference = $client->create([
        "items" => array(
          array(
            "title" => $service->name,
            "unit_price" => $service->price,
            "quantity" => 1,
            'currency_id' => 'ARS'
          )
        ),
        'external_reference' => "$service->id<-split->" . $service->destiny->name . "<-split->" . auth()->user()->id,
        'back_urls' => [
          'success' => route('purchases.success'),
          'pending' => route('purchases.pending'),
          'failure' => route('purchases.failure'),
        ]
      ]);
      return view('services.service', [
        "service" => $service,
        "preference" => $preference,
        "mp_public_key" => env('MP_PUBLIC_KEY')
      ]);
    } else {
      return view('services.service', [
        "service" => $service
      ]);
    }
  }
}
