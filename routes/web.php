<?php

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
