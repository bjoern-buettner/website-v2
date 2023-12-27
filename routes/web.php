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

Route::get('/', [HomeController::class, 'index'])->name('app.home');
Route::post('/locale', [LocalizationController::class, 'store'])->name('app.locale');
Route::get('/login', [AuthController::class, 'create'])->name('app.login.create');
Route::post('/login', [AuthController::class, 'login'])->name('app.login.login');
