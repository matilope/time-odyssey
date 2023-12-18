<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use App\Models\Service;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Http;

class PurchaseController extends Controller
{

  /**
   * Recibe los datos y crea una nueva contratación, devuelve un redirección
   * @param Request $request
   * @return RedirectResponse
   */
  public function purchase($service_id, $user_id): ?View
  {
    $service = Service::findOrFail($service_id);
    try {
      $purchase['service_id'] = $service->id;
      $purchase['service_name'] = $service->destiny->name;
      $purchase['price'] = $service->price;
      $purchase['user_id'] = $user_id;
      $purchase['quantity'] = 1;
      Purchase::create($purchase);
    } catch (Exception $e) {
      return view('purchases.failure', ["service_id" => $service->id, "service_name" => $service->destiny->name]);
    }
  }
  /**
   * Recibe los datos y devuelve una vista de estado exitoso con esos datos o si no se realizo el pago y usan simplemente los parametros en la url se devuevel la vista con estado fallido
   * @param Request $request
   * @return View
   */
  public function success(Request $request): View
  {
    if ($request->query()['collection_status'] == "approved") {
      $query = $request->query()['payment_id'];
      $response = Http::withHeaders([
        'Authorization' => 'Bearer ' . env("MP_ACCESS_TOKEN"),
      ])->get("https://api.mercadopago.com/v1/payments/$query");
      $data = $response->json();
      $dataParts = explode("<-split->", $request->query()["external_reference"]);
      $service_id = $dataParts[0];
      $service_name = $dataParts[1];
      $user_id = $dataParts[2];
      if ($data["status"] == "approved") {
        $this->purchase($service_id, $user_id);
        return view('purchases.success', ["service_id" => $service_id, "service_name" => $service_name]);
      } else {
        return view('purchases.failure', ["service_id" => $service_id, "service_name" => $service_name]);
      }
    }
  }

  /**
   * Recibe los datos y devuelve una vista de estado pendiente con esos datos
   * @param Request $request
   * @return View
   */
  public function pending(Request $request): View
  {
    $dataParts = explode("<-split->", $request->query()["external_reference"]);
    $service_id = $dataParts[0];
    $service_name = $dataParts[1];
    return view('purchases.pending', ["service_id" => $service_id, "service_name" => $service_name]);
  }

  /**
   * Recibe los datos y devuelve una vista de estado fallido con esos datos
   * @param Request $request
   * @return View
   */
  public function failure(Request $request): View
  {
    $dataParts = explode("<-split->", $request->query()["external_reference"]);
    $service_id = $dataParts[0];
    $service_name = $dataParts[1];
    return view('purchases.failure', ["service_id" => $service_id, "service_name" => $service_name]);
  }
}
