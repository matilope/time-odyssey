<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\View;

class AuthController extends Controller
{
  /**
   * Devuelve la vista de inicio de sesión
   * @return View
  */
  public function viewLogin(): View
  {
    return view('auth.login');
  }

  /**
   * Intenta autenticar al usuario utilizando las credenciales y devuelve una redireccion
   * @param Request $request
   * @return View
  */
  public function login(Request $request): RedirectResponse
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

  /**
   * Elimin los datos de la sesión y regenera el token de CSRF, devuelve una redireccion
   * @param Request $request
   * @return View
  */
  public function logout(Request $request): RedirectResponse
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
