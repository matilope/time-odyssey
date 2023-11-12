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
      $request->validate(User::$rules, User::$errorMessages);
      $user = $request->except(['_token']);
      if ($request->hasFile('picture')) {
        // $resizedImage = Image::make($request->hasFile('picture'))->resize(null, 160);
        $imageFile = $request->file('picture');
        $mime = $imageFile->getClientOriginalExtension();
        $imageName = time() . "." . $mime;
        $image = Image::make($imageFile)->resize(null, 160, function ($constraint) {
            $constraint->aspectRatio();
          })->encode($mime, 100);
        Storage::disk('public')->put('users_covers/' . $imageName, $image);
        $user['picture'] = 'users_covers/' . $imageName;
      }
      User::create($user);
      return redirect()
        ->route('auth.login.form')
        ->with('status.login.message', 'El usuario <b>' . e($user['username']) . '</b> se registro con éxito.')
        ->with('status.success', true);
    } catch (Exception $e) {
      return redirect()
        ->route('auth.register.form')
        ->with('status.register.message', 'El usuario no se pudo registrar.' . "$e")
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
      ->route('admin.index')
      ->with('status.message', 'Bienvenido nuevamente <b>' . Auth::user()->username . '</b>!')
      ->with('status.success', true);
  }

  /**
   * Elimin los datos de la sesión y regenera el token de CSRF, devuelve una redirección
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
