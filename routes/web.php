<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Site\HomeController;
use App\Http\Controllers\Site\MarketController;
use App\Http\Controllers\Site\OrderController;
use App\Http\Controllers\Site\AssetsController;

use App\Http\Controllers\Site\AuthController;

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

Route::get('/', [HomeController::class, 'show'])->name('home_show');
Route::get('/market', [MarketController::class, 'show'])->name('market_show');
Route::get('/order', [OrderController::class, 'show'])->name('order_show');
Route::get('/order/history', [OrderController::class, 'show'])->name('order_history');
Route::get('/assets', [AssetsController::class, 'show'])->name('assets_show');

Route::get('/login', [AuthController::class, 'show'])->name('site_login');
Route::get('/register', [AuthController::class, 'register'])->name('site_register');
Route::post('/post-register', [AuthController::class, 'doRegister'])->name('site_postRegister');
Route::get('/logout', [AuthController::class, 'logout'])->name('site_logout');
Route::post('/post-login', [AuthController::class, 'login'])->name('site_postLogin');

// Route::prefix('admin-panel')->name('admin.')->group(function () {

//     Route::get('/login', [AuthController::class, 'show'])->name('login');
//     Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
//     Route::post('/post-login', [AuthController::class, 'login'])->name('postLogin');


//     Route::middleware(['auth:admin', 'permission'])->group(function () {
//         Route::prefix('dashboard')->name('dashboard.')->group(function () {
//             Route::get('/', [DashboardController::class, 'show'])->name('show');
//         });

//         Route::prefix('user')->name('user.')->group(function () {
//             Route::get('/', [UserController::class, 'show'])->name('show');
//             Route::get('/create', [UserController::class, 'create'])->name('create');
//             Route::get('/edit/{id}', [UserController::class, 'edit'])->name('edit');
//             Route::post('/save', [UserController::class, 'save'])->name('save');
//             Route::get('/delete/{id}', [UserController::class, 'delete'])->name('delete');
//         });

//     });

// });
