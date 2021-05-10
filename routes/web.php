<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\PageController::class, 'showMain'])->name('main');

Route::get('/registration', [\App\Http\Controllers\AuthController::class, 'showRegistration'])->name('registration');
Route::post('/registration', [\App\Http\Controllers\AuthController::class, 'registration'])->name('registration');

Route::get('/login', [\App\Http\Controllers\AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [\App\Http\Controllers\AuthController::class, 'login'])->name('login');
Route::get('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

//Catalog, Products, Search etc
Route::get('/product/{product}', [\App\Http\Controllers\CatalogController::class, 'showProduct'])->name('product');

Route::get('/catalog', [\App\Http\Controllers\CatalogController::class, 'showCatalog'])->name('catalog');
Route::get('/category/{category}', [\App\Http\Controllers\CatalogController::class, 'showCategory'])->name('category');

Route::get('/profile', [\App\Http\Controllers\PageController::class, 'showProfile'])->name('profile');
Route::get('/admin', [\App\Http\Controllers\PageController::class, 'showAdmin'])->name('admin');
