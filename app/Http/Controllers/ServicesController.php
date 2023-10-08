<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Models\Service;

class ServicesController extends Controller
{
	public function index(): View
	{
		return view('services.index', ["services" => Service::orderBy('duration', 'asc')->get()]);
	}
}
