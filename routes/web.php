<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])
  ->name('home');

Route::get('/servicios', [\App\Http\Controllers\ServicesController::class, 'index'])
  ->name('services.index');

Route::get('/blogs', [\App\Http\Controllers\BlogsController::class, 'index'])
  ->name('blogs.index');

Route::get('/blogs/{id}', [\App\Http\Controllers\BlogsController::class, 'article'])
  ->whereNumber('id')
  ->name('blogs.article');

Route::get('/blogs/crear', [\App\Http\Controllers\BlogsController::class, 'viewCreate'])
  ->name('blogs.create.form')
  ->middleware(['auth']);

Route::post('/blogs/crear', [\App\Http\Controllers\BlogsController::class, 'create'])
  ->name('blogs.create.post')
  ->middleware(['auth']);

Route::get('/blogs/{id}/editar', [\App\Http\Controllers\BlogsController::class, 'viewEdit'])
  ->whereNumber('id')
  ->name('blogs.edit.form')
  ->middleware(['auth']);

Route::post('/blogs/{id}/editar', [\App\Http\Controllers\BlogsController::class, 'edit'])
  ->whereNumber('id')
  ->name('blogs.edit.post')
  ->middleware(['auth']);

Route::post('/blogs/{id}/eliminar', [\App\Http\Controllers\BlogsController::class, 'delete'])
  ->whereNumber('id')
  ->name('blogs.delete.post')
  ->middleware(['auth']);

Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'index'])
  ->name('admin.index')
  ->middleware(['auth']);

Route::get('/admin/blogs', [\App\Http\Controllers\AdminController::class, 'blogs'])
  ->name('admin.blogs')
  ->middleware(['auth']);

Route::get('/iniciar-sesion', [\App\Http\Controllers\AuthController::class, 'viewLogin'])
  ->name('auth.login.form');

Route::post('/iniciar-sesion', [\App\Http\Controllers\AuthController::class, 'login'])
  ->name('auth.login.post');

Route::post('/', [\App\Http\Controllers\AuthController::class, 'logout'])
  ->name('auth.logout.post')
  ->middleware(['auth']);
