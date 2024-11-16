<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.homepage');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/markets', [App\Http\Controllers\HomeController::class, 'markets'])->name('markets');
Route::get('/trading', [App\Http\Controllers\HomeController::class, 'trading'])->name('trading');
Route::get('/orders', [App\Http\Controllers\HomeController::class, 'orders'])->name('orders');
Route::get('/invest', [App\Http\Controllers\HomeController::class, 'invest'])->name('invest');
Route::get('/wallets', [App\Http\Controllers\HomeController::class, 'wallets'])->name('wallets');
Route::get('/panel', [App\Http\Controllers\HomeController::class, 'panel'])->name('panel');
Route::get('/support', [App\Http\Controllers\HomeController::class, 'support'])->name('support');
Route::get('/deposit', [App\Http\Controllers\HomeController::class, 'deposit'])->name('deposit');
Route::get('/payment', [App\Http\Controllers\HomeController::class, 'payment'])->name('payment');
Route::get('/deposit_logs', [App\Http\Controllers\HomeController::class, 'depositLogs'])->name('deposit.logs');
Route::get('/withdrawal', [App\Http\Controllers\HomeController::class, 'withdrawal'])->name('withdrawal');
Route::get('/withdraw', [App\Http\Controllers\HomeController::class, 'withdraw'])->name('withdraw');
Route::get('/withdrawal_logs', [App\Http\Controllers\HomeController::class, 'withdrawalLogs'])->name('withdrawal.logs');
Route::get('/kyc-center', [App\Http\Controllers\HomeController::class, 'kycCenter'])->name('kyc.center');
Route::get('/settings', [App\Http\Controllers\HomeController::class, 'settings'])->name('settings');
Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');
