<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use App\Models\Blog;
use App\Models\Purchase;
use App\Models\User;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
  /**
   * Devuelve los datos de todos los blogs y los usuarios en la vista de admin
   * @return View
   */
  public function index(): View
  {
    $purchases = Purchase::select('service_id', 'service_name', 'price', DB::raw('SUM(quantity) as total_quantity'))
      ->groupBy('service_id', 'service_name', 'price')
      ->get();
    $totalQuantity = $purchases->sum('total_quantity');
    $mostContractedService = Purchase::orderBy('quantity', 'desc')->first();

    return view('admin.index', [
      "blogs" => Blog::all(),
      "users" => User::select('id')->get(),
      "purchases" => $purchases,
      "totalQuantity" => $totalQuantity,
      "mostContractedService" => $mostContractedService
    ]);
  }

  /**
   * Devuelve los datos de todos los blogs en la vista de administracion de blogs
   * @return View
   */
  public function blogs(): View
  {
    return view('admin.blogs', ["blogs" => Blog::orderBy('updated_at', 'asc')->paginate(12)]);
  }
}
