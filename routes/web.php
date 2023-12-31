<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocalizationController;
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

Route::group(['middleware' => 'web'], function() {
    Route::get('/', [HomeController::class, 'index'])->name('app.home');
    Route::post('/locale', [LocalizationController::class, 'store'])->name('app.locale');
    Route::get('/login', [AuthController::class, 'create'])->name('app.auth.create');
    Route::post('/login', [AuthController::class, 'login'])->name('app.auth.login');
    Route::delete('/login', [AuthController::class, 'logout'])->name('app.auth.logout');
});
