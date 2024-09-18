<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PageController;
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

Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/calculator', [PageController::class, 'calculator'])->name('calculator');
Route::post('/credit-simulation', [PageController::class, 'calculate'])->name('credit.simulation.calculate');
Route::get('/PengajuanKredit', [PageController::class, 'PengajuanKredit'])->name('PengajuanKredit');
Route::post('/kredit/store', [PageController::class, 'store'])->name('kredit.store');
Route::get('/Login', [LoginController::class, 'login'])->name('login');
Route::post('/login-proses', [loginController::class, 'login_proses'])->name('login-proses');
Route::get('/logout', [loginController::class, 'logout'])->name('logout');
// Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware('auth')->name('dashboard');

// Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'web'], 'as' => 'admin.'], function () {
//     Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard');
// });
