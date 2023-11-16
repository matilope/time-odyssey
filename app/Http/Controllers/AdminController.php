<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use App\Models\Blog;
use App\Models\User;

class AdminController extends Controller
{
  /**
   * Devuelve los datos de todos los blogs y los usuarios en la vista de admin
   * @return View
   */
  public function index(): View
  {
    return view('admin.index', ["blogs" => Blog::all(), "users" => User::select('id')->get()]);
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
