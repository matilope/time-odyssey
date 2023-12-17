<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Exception;
use Intervention\Image\Facades\Image;

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
   * Devuelve los datos de un usuario específico en la vista del usuario
   * @param int $id
   * @return View
   */
  public function user(int $id): View
  {
    $user = User::findOrFail($id);
    $purchases = Purchase::with(['service'])->where('user_id', $user->id)->get();
    return view('users.user', ["purchases" => $purchases, "user" => $user, "ownProfile" => false]);
  }

  /**
   * Devuelve los datos del usuario autenticado en la vista del usuario
   * @return View
   */
  public function profile(): View
  {
    $purchases = Purchase::with(['service'])->where('user_id', auth()->user()->id)->get();
    return view('users.user', ["purchases" => $purchases, "user" => auth()->user(), "ownProfile" => true]);
  }

  /**
   * Devuelve los datos del usuario autenticado en la vista del usuario
   * @return View
   */
  public function viewEdit(): View
  {
    return view('users.edit', ["user" => auth()->user()]);
  }

  /**
   * Recibe el id del artículo, la request y reemplaza el recurso, devuelve una redireccion
   * @param int
   * @param Request
   * @return RedirectResponse
   */
  public function edit(Request $request): RedirectResponse
  {
    try {
      $user = User::findOrFail(auth()->user()->id);
      if (!$request->filled('password')) {
        $request->merge(['password' => $user->password]);
      }
      $request->validate(User::$rules, User::$errorMessages);
      $userUpdated = $request->except(['_token']);
      if ($request->hasFile('picture')) {
        $file = $request->file('picture');
        $extension = $file->getClientOriginalExtension();
        $name = time() . "." . $extension;
        $image = Image::make($file)->resize(null, 240, function ($constraint) {
            $constraint->aspectRatio();
          })->encode($extension, 100);
        Storage::disk('public')->put('users_covers/' . $name, $image);
        $userUpdated['picture'] = 'users_covers/' . $name;
        if ($user->picture && Storage::has($user->picture)) {
          Storage::disk('public')->delete($user->picture);
        }
      }
      $user->update($userUpdated);
      return redirect('/admin/perfil')
        ->with('status.message', 'El perfil se actualizo con éxito.')
        ->with('status.success', true);
    } catch (Exception $e) {
      return redirect('/admin/perfil')
        ->with('status.message', "El perfil no se pudo editar. $e")
        ->with('status.error', true);
    }
  }
}
