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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);

Route::get('/servicios', [\App\Http\Controllers\ServicesController::class, 'index']);

Route::get('/blogs', [\App\Http\Controllers\BlogsController::class, 'index']);

Route::get('/blogs/{id}', [\App\Http\Controllers\BlogsController::class, 'article'])->whereNumber('id');

Route::get('/blogs/crear', [\App\Http\Controllers\BlogsController::class, 'viewCreate']);

Route::post('/blogs/crear', [\App\Http\Controllers\BlogsController::class, 'create']);

Route::get('/blogs/editar/{id}', [\App\Http\Controllers\BlogsController::class, 'viewEdit'])->whereNumber('id');

Route::post('/blogs/editar/{id}', [\App\Http\Controllers\BlogsController::class, 'edit'])->whereNumber('id');

Route::post('/blogs/eliminar/{id}', [\App\Http\Controllers\BlogsController::class, 'delete'])->whereNumber('id');

Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'index']);