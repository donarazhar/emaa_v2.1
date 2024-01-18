<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MarboutController;
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


Route::middleware(['guest:karyawan'])->group(function () {
    Route::get('/', [HomeController::class, 'h_index'])->name('index');
    Route::get('/daftar', [HomeController::class, 'h_daftar']);
    Route::get('/login', [HomeController::class, 'h_login']);
    Route::post('/proseslogin', [HomeController::class, 'h_proseslogin']);
    Route::post('/prosesdaftar', [HomeController::class, 'h_prosesdaftar']);
});

Route::middleware(['auth:karyawan'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dash_index']);
    Route::get('/proseslogout', [HomeController::class, 'h_proseslogout']);

    Route::get('/marbout_index', [MarboutController::class, 'marbout_index']);
    Route::get('/marbout_detail/{id}', [MarboutController::class, 'marbout_detail']);
    Route::post('/marbout_tambah', [MarboutController::class, 'marbout_tambah']);
    Route::get('/marbout_suamiistri', [MarboutController::class, 'marbout_suamiistri']);
    Route::post('/marbout_tambahdatakel', [MarboutController::class, 'marbout_tambahdatakel']);
});
