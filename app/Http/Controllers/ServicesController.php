<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use App\Models\PurchaseDetails;
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
	 * Recibe los datos y crea una nueva compra y ademas un nuevo detalle de compra, devuelve un redireccion
	 * @param Request $request
	 * @return RedirectResponse
	 */
	public function purchase(Request $request): RedirectResponse
	{
		try {
			$request->validate(Purchase::$rules, Purchase::$errorMessages);
			$purchase = $request->except(['_token', 'service_id']);
			$toDb = Purchase::create($purchase);
			\Debugbar::info($purchase);
			\Debugbar::info($request);
			\Debugbar::info($toDb->id);
			$purchaseDetailsData = [
				'service_id' => $request['service_id'],
				'purchase_id' => $toDb->id,
				'quantity' => 1,
			];
			PurchaseDetails::create($purchaseDetailsData);
			return redirect('/')
				->with('status.message', 'Se ha realizado la contratación correctamente.<br />Dentro de unos minutos le llegara el correo con todos los datos.')
				->with('status.success', true);
		} catch (Exception $e) {
			return redirect('/')
				->with('status.message', 'No se ha podido realizar la contratación.')
				->with('status.error', true);
		}
	}
}
