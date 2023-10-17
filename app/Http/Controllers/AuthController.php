<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
  public function viewLogin()
  {
    return view('auth.login');
  }

  public function login(Request $request)
  {
    $credentials = $request->only(['email', 'password']);

    if (!Auth::attempt($credentials)) {
      return redirect()
        ->route('auth.login.form')
        ->with('status.login.message', 'Las credenciales ingresadas no son correctas.')
        ->with('status.error', true)
        ->withInput();
    }

    return redirect()
      ->route('admin.index')
      ->with('status.message', 'Bienvenido nuevamente <b>' . Auth::user()->username . '</b>!')
      ->with('status.success', true);
  }

  public function logout(Request $request)
  {
    Auth::logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect()
      ->route('auth.logout.post')
      ->with('status.message', 'La sesión se ha cerrado con éxito.')
      ->with('status.success', true);
  }
}
