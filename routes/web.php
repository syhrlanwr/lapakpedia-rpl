<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\ProductController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');

Route::get('/chat', function () {
    return view('chat');
})->middleware('auth')->name('chat');

Route::post('/add-product', [ProductController::class, 'store'])->name('add.product');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::get('/seller/register', [SellerController::class, 'register'])->name('seller.register');
Route::post('/seller/register', [SellerController::class, 'register_action'])->name('register.action');
Route::get('/seller/login', [SellerController::class, 'login'])->name('seller.login');
Route::post('/seller/login', [SellerController::class, 'login_action'])->name('login.action');
Route::get('/seller/dashboard', [SellerController::class, 'index'])->name('seller.dashboard');
Route::get('/seller', function(){
    return view('seller');
});

Route::post('update-user', [UserController::class, 'update'])->name('update.user');

require __DIR__.'/auth.php';
