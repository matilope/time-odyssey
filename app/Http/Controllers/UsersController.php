<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class UsersController extends Controller
{
    /**
     * Devuelve los datos de todos los usuarios en la vista de usuarios
     * @return View
     */
    public function index(): View
    {
        return view('users.index', ["users" => User::orderBy('created_at', 'asc')->get()]);
    }

    /**
     * Devuelve los datos de un usuario especifico en la vista del usuario
     * @param int $id
     * @return View
     */
    public function viewUser(int $id): View
    {
        $user = User::findOrFail($id);
        $purchases = Purchase::with(['service'])->where('user_id', $user->id)->get();
        return view('users.user', ["purchases" => $purchases, "user" => $user]);
    }
}
