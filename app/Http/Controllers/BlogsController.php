<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\View;
use App\Models\Blog;
use App\Models\User;
use App\Models\Category;
use Exception;
use Illuminate\Support\Facades\Storage;
use \Illuminate\Support\Facades\DB;

class BlogsController extends Controller
{
  /**
   * Devuelve los datos de todos los blogs en la vista de blogs
   * @return View
   */
  public function index(): View
  {
    $blogs = Blog::orderBy('created_at', 'asc')->with(['category'])->paginate(12);
    return view('blogs.index', ["blogs" => $blogs, "users" => User::select('name')->orderBy('created_at', 'asc')->get()]);
  }

  /**
   * Devuelve los datos de un articulo específico en la vista de articulos
   * @param int $id
   * @return View
   */
  public function article(int $id): View
  {
    return view('blogs.article', ["blog" => Blog::findOrFail($id)]);
  }

  /**
   * Devuelve los datos de las categorias en la vista del formulario para crear una nueva entrada
   * @return View
   */
  public function viewCreate(): View
  {
    return view('blogs.create', ["categories" => Category::All()]);
  }

  /**
   * Recibe los datos y crea un nuevo recurso, devuelve un redireccion
   * @param Request $request
   * @return RedirectResponse
   */
  public function create(Request $request): RedirectResponse
  {
    try {
      $request->validate(Blog::$rules, Blog::$errorMessages);
      $blog = $request->except(['_token']);
      if ($request->hasFile('image')) {
        $blog['image'] = $request->file('image')->store('blogs_covers');
      }
      Blog::create($blog);
      return redirect('/admin/blogs')
        ->with('status.message', 'El blog <b>' . e($blog['title']) . '</b> se publicó con éxito.')
        ->with('status.success', true);
    } catch (Exception $e) {
      return redirect('/admin/blogs')
        ->with('status.message', 'El blog no se pudo publicar.')
        ->with('status.error', true);
    }
  }

  /**
   * Devuelve los datos de un artículo en específico, devuelve la vista para editar una entrada
   * @param int $id es el id del artículo de blog
   * @return View
   */
  public function viewEdit(int $id): View
  {
    return view('blogs.edit', ["blog" => Blog::findOrFail($id), "categories" => Category::All()]);
  }

  /**
   * Recibe el id del artículo, la request y reemplaza el recurso, devuelve una redireccion
   * @param int
   * @param Request
   * @return RedirectResponse
   */
  public function edit(int $id, Request $request): RedirectResponse
  {
    try {
      $blog = Blog::findOrFail($id);
      $request->validate(Blog::$rules, Blog::$errorMessages);
      $blogUpdated = $request->except(['_token']);
      if ($request->hasFile('image')) {
        $blogUpdated['image'] = $request->file('image')->store('blogs_covers');
        if ($blog->image && Storage::has($blog->image)) {
          Storage::disk('public')->delete($blog->image);
        }
      }
      $blog->update($blogUpdated);
      return redirect('/admin/blogs')
        ->with('status.message', 'El artículo <b>' . e($blog['title']) . '</b> se actualizo con éxito.')
        ->with('status.success', true);
    } catch (Exception $e) {
      return redirect('/admin/blogs')
        ->with('status.message', 'El artículo no se pudo editar.')
        ->with('status.error', true);
    }
  }

  /**
   * Recibe el id del artículo y elimina el recurso, devuelve una redireccion
   * @param int
   * @return RedirectResponse
   */
  public function delete(int $id): RedirectResponse
  {
    try {
      $blog = Blog::findOrFail($id);
      DB::transaction(function () use ($blog) {
        $blog->delete();
        if ($blog->image && Storage::has($blog->image)) {
          Storage::disk('public')->delete($blog->image);
        }
      });
      return redirect('/admin/blogs')
        ->with('status.message', 'El artículo <b>' . e($blog['title']) . '</b> fue eliminado con éxito.')
        ->with('status.success', true);
    } catch (Exception $e) {
      return redirect('/admin/blogs')
        ->with('status.message', 'El artículo no se pudo eliminar.')
        ->with('status.error', true);
    }
  }
}
