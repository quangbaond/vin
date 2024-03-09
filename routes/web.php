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

Route::get('/', function () {
    $setting = \App\Models\Setting::first();
    return view('welcome', compact('setting'));
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/pay', [App\Http\Controllers\HomeController::class, 'pay'])->name('pay');
Route::get('/me', [App\Http\Controllers\HomeController::class, 'me'])->name('me');
Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('profile');
Route::get('/withdraw', [App\Http\Controllers\HomeController::class, 'withdraw'])->name('withdraw');
Route::post('/withdraw', [App\Http\Controllers\HomeController::class, 'withdrawPost'])->name('withdraw');
Route::get('/historyDeposit', [App\Http\Controllers\HomeController::class, 'historyDeposit'])->name('historyDeposit');
Route::get('/historyWithdraw', [App\Http\Controllers\HomeController::class, 'historyWithdraw'])->name('historyWithdraw');
Route::get('/historyInvest', [App\Http\Controllers\HomeController::class, 'historyInvest'])->name('historyInvest');
Route::post('/updateProfile', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
Route::get('/loto', [App\Http\Controllers\HomeController::class, 'loto'])->name('loto');
