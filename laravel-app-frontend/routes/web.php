<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::get('/homepage', [UserController::class, 'homepage']);
Route::get('/login', [UserController::class, 'loginpage']);
Route::get('/shop', [UserController::class, 'shop']);
Route::get('/shop2', [UserController::class, 'shop2']);

Route::get('/about', [UserController::class, 'about']);
Route::get('/contact', [UserController::class, 'contact']);
Route::get('/cart', [UserController::class, 'cart']);
Route::get('/product', [UserController::class, 'sproduct']);

Route::get('/product1', [UserController::class, 'Skin1004TrailSet']);
Route::get('/product2', [UserController::class, 'Skin1004CalmingPads']);
Route::get('/product3', [UserController::class, 'Skin1004Suncreen']);
Route::get('/product4', [UserController::class, 'Skin1004SoothingCream']);
Route::get('/product5', [UserController::class, 'Skin1004ToningToner']);
Route::get('/product6', [UserController::class, 'Skin1004FoamCleanser']);
Route::get('/product7', [UserController::class, 'Skin1004cream']);
Route::get('/product8', [UserController::class, 'Skin1004Mask']);

Route::get('/c1', [UserController::class, 'c1']);
Route::get('/c2', [UserController::class, 'c2']);
Route::get('/c3', [UserController::class, 'c3']);
Route::get('/c4', [UserController::class, 'c4']);
Route::get('/c5', [UserController::class, 'c5']);
Route::get('/c6', [UserController::class, 'c6']);
Route::get('/c7', [UserController::class, 'c7']);
Route::get('/c8', [UserController::class, 'c8']);

Route::get('/SignUp', [UserController::class, 'SignUp']);
Route::get('/delivery', [UserController::class, 'delivery']);






Route::post('/loginuser', [UserController::class, 'login_handle']);




