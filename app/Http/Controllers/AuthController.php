<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class AuthController extends Controller
{
  /**
   * Devuelve la vista del registro
   * @return View
   */
  public function viewRegister(): View
  {
    return view('auth.register');
  }

  /**
   * Registra el usuario y devuelve una redirección
   * @param Request $request
   * @return RedirectResponse
   */
  public function register(Request $request): RedirectResponse
  {
    try {
      if (!$request->filled('name')) {
        $request->merge(['name' => "-"]);
      }
      $request->validate(User::$rules, User::$errorMessages);
      $user = $request->except(['_token']);
      User::create($user);
      return redirect()
        ->route('auth.login.form')
        ->with('status.login.message', 'El usuario <b>' . e($user['email']) . '</b> se registro con éxito.')
        ->with('status.success', true);
    } catch (Exception $e) {
      return redirect()
        ->route('auth.register.form')
        ->with('status.register.message', 'El usuario no se pudo registrar.')
        ->with('status.error', true);
    }
  }

  /**
   * Devuelve la vista de inicio de sesión
   * @return View
   */
  public function viewLogin(): View
  {
    return view('auth.login');
  }

  /**
   * Intenta autenticar al usuario utilizando las credenciales y devuelve una redirección
   * @param Request $request
   * @return RedirectResponse
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
      ->route(Auth::user()->role != "administrador" ? 'users.profile' : 'admin.index')
      ->with('status.message', 'Bienvenido nuevamente <b>' . (Auth::user()->name == "-" ? Auth::user()->email : Auth::user()->name) . '</b>!')
      ->with('status.success', true);
  }

  /**
   * Elimina los datos de la sesión y regenera el token de CSRF, devuelve una redirección
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
