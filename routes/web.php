<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
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
    Route::get('/login', [HomeController::class, 'h_login'])->name('login');
    Route::post('/proseslogin', [HomeController::class, 'h_proseslogin']);
});

Route::middleware(['auth:karyawan'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dash_index']);
    Route::get('/proseslogout', [HomeController::class, 'h_proseslogout']);

    Route::get('/dash_datamarbout', [DashboardController::class, 'dash_datamarbout']);
    Route::post('/dash_detailmarbout', [DashboardController::class, 'dash_detailmarbout']);
});
