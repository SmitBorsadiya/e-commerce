<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});

Route::view('/register', 'register');
Route::view('/success', 'success');
Route::view('/failure', 'failure');

Route::post("/login",[UserController::class,'login']);
Route::post("/register",[UserController::class,'register']);
Route::get("/",[ProductController::class,'index']);
Route::get("detail/{id}",[ProductController::class,'detail']);
Route::get("detail/{id}",[ProductController::class,'detail']);
Route::get("search",[ProductController::class,'search']);
Route::post("AddtoCart",[ProductController::class,'addToCart']);
Route::post("ordernow",[ProductController::class,'orderNow']);
Route::get("cart",[ProductController::class,'cartList']);
Route::get("removeItem/{id}",[ProductController::class,'removeItem']);
Route::get("OrderNow",[ProductController::class,'orderNow']);
Route::post("orderPlace",[ProductController::class,'orderPlace']);
Route::get("myorders",[ProductController::class,'myOrders']);
