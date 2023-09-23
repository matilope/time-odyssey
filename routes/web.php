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

Route::get('/services', [\App\Http\Controllers\ServicesController::class, 'index']);

Route::get('/blog', [\App\Http\Controllers\BlogsController::class, 'index']);

Route::get('/blog/{id}', [\App\Http\Controllers\BlogsController::class, 'article'])->whereNumber('id');

Route::get('/blog/create', [\App\Http\Controllers\BlogsController::class, 'create']);