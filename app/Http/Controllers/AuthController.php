<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
  public function formLogin()
  {
    return view('auth.formLogin');
  }

  public function processLogin(Request $request)
  {
    $credentials = $request->only(['email', 'password']);

    if (!Auth::attempt($credentials)) {
      return redirect()
        ->route('auth.formLogin')
        ->with('status.message', 'Las credenciales ingresadas no coinciden con nuestros registros.')
        ->with('status.success', false)
        ->withInput();
    }

    return redirect()
      ->route('admin.index')
      ->with('status.message', 'Sesión iniciada con éxito. Hola de vuelta ' . Auth::user()->email)
      ->with('status.success', true);
  }

  public function processLogout(Request $request)
  {
    Auth::logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect()
      ->route('auth.processLogout')
      ->with('status.message', 'La sesión se cerró con éxito. ¡Te esperamos pronto de nuevo!')
      ->with('status.success', true);
  }
}
