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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');


Route::get('/', [App\Http\Controllers\HomeController::class, 'indexx'])->name('indexx');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// TO GUIDE/PROTECT OUR ROUTES
Route::group(['middleware', 'web'], function () {

    Route::post('/cart', [App\Http\Controllers\CartController::class, 'store']);
    Route::get('/cart', [App\Http\Controllers\CartController::class, 'index']);
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'gohome']);
    Route::get('/about', [App\Http\Controllers\HomeController::class, 'about']);
    Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact']);

    //CHECKOUT PAGE
    Route::get('/checkout', [App\Http\Controllers\CheckoutController::class, 'index']);
});

// TO GUIDE/PROTECT OUR ROUTES
