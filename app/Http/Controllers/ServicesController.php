<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Models\Service;

class ServicesController extends Controller
{
	/**
	 * Devuelve los datos de todos los servicios en la vista de servicios
	 * @return View
	 */
	public function index(): View
	{
		return view('services.index', ["services" => Service::orderBy('duration', 'asc')->get()]);
	}
}
