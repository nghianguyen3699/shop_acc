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

Route::get('/', function () {
    return view('home');
});

Route::prefix('client/')->group(function(){
    Auth::routes();
    Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('client.profile');
    Route::get('/history', [App\Http\Controllers\HistoryController::class, 'index'])->name('client.history');
    Route::get('/cash-flow', [App\Http\Controllers\CashFlowController::class, 'index'])->name('client.cashflow');
    Route::get('/orders', [App\Http\Controllers\OrdersController::class, 'index'])->name('client.orders');
    Route::get('/top-money', [App\Http\Controllers\TopMoneyController::class, 'index'])->name('client.topmoney');
    Route::get('/recharge', [App\Http\Controllers\RechargeController::class, 'index'])->name('client.recharge');
    Route::get('/invoices', [App\Http\Controllers\InvoicesController::class, 'index'])->name('client.invoices');
    Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('client.contact');
    Route::get('/payment/{code}', [App\Http\Controllers\Client\PaymentController::class, 'index'])->name('client.payment');
    Route::post('/payment', [App\Http\Controllers\Client\PaymentController::class, 'create'])->name('client.payment.create');
});

Route::prefix('admin/')->group(function(){
    Route::get('/login', [App\Http\Controllers\Admin\LoginController::class, 'index'])->name('admin.login');
    Route::get('/management', [App\Http\Controllers\Admin\ManagementController::class, 'index'])->name('admin.management');
    Route::prefix('user/')->group(function(){
        Route::get('/', [App\Http\Controllers\Client\UserController::class, 'index'])->name('user.index');
        Route::get('/{id}', [App\Http\Controllers\Client\UserController::class, 'show'])->name('admin.user.{:id}');
    });
});





Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

