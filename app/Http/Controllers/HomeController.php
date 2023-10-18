<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
class HomeController extends Controller
{
    /**
     * Devuelve la vista de la home
     * @return View
    */
    public function index(): View
    {
        return view('index');
    }
}
