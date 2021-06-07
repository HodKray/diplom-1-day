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
Route::get('/about', [\App\Http\Controllers\PageController::class, 'showAbout'])->name('about');

Route::get('/registration', [\App\Http\Controllers\AuthController::class, 'showRegistration'])->name('registration');
Route::post('/registration', [\App\Http\Controllers\AuthController::class, 'registration'])->name('registration');

Route::get('/login', [\App\Http\Controllers\AuthController::class, 'showLogin'])->name('login');

Route::post('/login', [\App\Http\Controllers\AuthController::class, 'login'])->name('login');

Route::get('/logout', [\App\Http\Controllers\AuthController::class, 'logout'])->name('logout');

//cart
Route::get('/add-cart/{product}', [\App\Http\Controllers\CartController::class, 'addCart']);
Route::get('/del-cart/{product}', [\App\Http\Controllers\CartController::class, 'delCart']);
Route::get('/clear-cart/{product}', [\App\Http\Controllers\CartController::class, 'clearCart']);
Route::get('/cart', [\App\Http\Controllers\CartController::class, 'showCart'])->name('cart');
Route::post('/cart', [\App\Http\Controllers\CartController::class, 'storeCart']);


//Catalog, Products, Search etc
Route::get('/product/{product}', [\App\Http\Controllers\CatalogController::class, 'showProduct'])->name('product');
Route::get('/catalog', [\App\Http\Controllers\CatalogController::class, 'showCatalog'])->name('catalog');
Route::get('/category/{category}', [\App\Http\Controllers\CatalogController::class, 'showCategory'])->name('category');

Route::get('/profile', [\App\Http\Controllers\PageController::class, 'showProfile'])->name('profile');

Route::group(['prefix'=>'admin'],function (){
    Route::get('/', [\App\Http\Controllers\PageController::class, 'showAdmin'])->name('admin');

    Route::resource('products', \App\Http\Controllers\Admin\ProductController::class, ['as' => 'admin']);
    Route::resource('categories', \App\Http\Controllers\Admin\CategoriesController::class, ['as' => 'admin']);
    Route::resource('orders', \App\Http\Controllers\Admin\OrderController::class, ['as' => 'admin']);
});


