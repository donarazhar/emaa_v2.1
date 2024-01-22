<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontofficeController;
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
    Route::post('/marbout_edit', [MarboutController::class, 'marbout_edit']);
    Route::post('/marbout_update/{id}', [MarboutController::class, 'marbout_update']);
    Route::post('/marbout_hapus/{id_marbout}', [MarboutController::class, 'marbout_hapus']);
    Route::post('/marbout_tambah', [MarboutController::class, 'marbout_tambah']);

    // Riwayat Keluarga
    Route::get('/marbout_suamiistri', [MarboutController::class, 'marbout_suamiistri']);
    Route::post('/marbout_tambahdatakel', [MarboutController::class, 'marbout_tambahdatakel']);
    Route::get('/marbout_anak', [MarboutController::class, 'marbout_anak']);
    Route::post('/marbout_tambahdatakel2', [MarboutController::class, 'marbout_tambahdatakel2']);
    Route::get('/marbout_orangtua', [MarboutController::class, 'marbout_orangtua']);
    Route::post('/marbout_tambahdatakel3', [MarboutController::class, 'marbout_tambahdatakel3']);

    // Riwayat Pendidikan
    Route::get('/marbout_sekolah', [MarboutController::class, 'marbout_sekolah']);
    Route::post('/marbout_tambahsekolah', [MarboutController::class, 'marbout_tambahsekolah']);
    Route::get('/marbout_bahasa', [MarboutController::class, 'marbout_bahasa']);
    Route::post('/marbout_tambahbahasa', [MarboutController::class, 'marbout_tambahbahasa']);

    // Riwayat Kepegawaian
    Route::get('/marbout_jabatan', [MarboutController::class, 'marbout_jabatan']);
    Route::post('/marbout_tambahjabatan', [MarboutController::class, 'marbout_tambahjabatan']);
    Route::post('/marbout_tambahkatjabatan', [MarboutController::class, 'marbout_tambahkatjabatan']);
    Route::post('/marbout_tambahkateselon', [MarboutController::class, 'marbout_tambahkateselon']);
    Route::get('/marbout_penugasan', [MarboutController::class, 'marbout_penugasan']);
    Route::post('/marbout_tambahpenugasan', [MarboutController::class, 'marbout_tambahpenugasan']);
    Route::get('/marbout_seminar', [MarboutController::class, 'marbout_seminar']);
    Route::post('/marbout_tambahseminar', [MarboutController::class, 'marbout_tambahseminar']);
    Route::get('/marbout_penghargaan', [MarboutController::class, 'marbout_penghargaan']);
    Route::post('/marbout_tambahpenghargaan', [MarboutController::class, 'marbout_tambahpenghargaan']);
    Route::get('/marbout_pelanggaran', [MarboutController::class, 'marbout_pelanggaran']);
    Route::post('/marbout_tambahpelanggaran', [MarboutController::class, 'marbout_tambahpelanggaran']);

    // Mutasi
    Route::get('/marbout_mutasi', [MarboutController::class, 'marbout_mutasi']);
    Route::post('/marbout_tambahmutasi', [MarboutController::class, 'marbout_tambahmutasi']);
    Route::post('/marbout_mutasi', [MarboutController::class, 'marbout_mutasi']);
    Route::post('/marbout_editmutasi', [MarboutController::class, 'marbout_editmutasi']);
    Route::post('/marbout_updatemutasi/{id}', [MarboutController::class, 'marbout_updatemutasi']);
    Route::post('/marbout_hapusmutasi/{id_marbout}', [MarboutController::class, 'marbout_hapusmutasi']);


    // FRONT OFFICE
    Route::get('/front_kategorisurat', [FrontofficeController::class, 'front_kategorisurat']);
    Route::post('/front_tambahkatsurat', [FrontofficeController::class, 'front_tambahkatsurat']);
    Route::post('/front_editkatsurat', [FrontofficeController::class, 'front_editkatsurat']);
    Route::post('/front_updatekatsurat/{id}', [FrontofficeController::class, 'front_updatekatsurat']);
    Route::post('/front_hapuskatsurat/{id_kategori}', [FrontofficeController::class, 'front_hapuskatsurat']);

    Route::get('/front_asalsurat', [FrontofficeController::class, 'front_asalsurat']);
    Route::post('/front_tambahasalsurat', [FrontofficeController::class, 'front_tambahasalsurat']);
    Route::post('/front_editasalsurat', [FrontofficeController::class, 'front_editasalsurat']);
    Route::post('/front_updateasalsurat/{id}', [FrontofficeController::class, 'front_updateasalsurat']);
    Route::post('/front_hapusasalsurat/{id_asalsurat}', [FrontofficeController::class, 'front_hapusasalsurat']);

    Route::get('/front_datasurat', [FrontofficeController::class, 'front_datasurat']);
    Route::post('/front_tambahdatasurat', [FrontofficeController::class, 'front_tambahdatasurat']);
    Route::post('/front_editdatasurat', [FrontofficeController::class, 'front_editdatasurat']);
    Route::post('/front_updatedatasurat/{id}', [FrontofficeController::class, 'front_updatedatasurat']);
    Route::post('/front_hapusdatasurat/{id_transaksi}', [FrontofficeController::class, 'front_hapusdatasurat']);

    Route::get('/front_bukutamu', [FrontofficeController::class, 'front_bukutamu']);
    Route::get('/front_kategorilayanan', [FrontofficeController::class, 'front_kategorilayanan']);
    Route::get('/front_dataimam', [FrontofficeController::class, 'front_dataimam']);
    Route::get('/front_dataimam', [FrontofficeController::class, 'front_dataimam']);
    Route::get('/front_layanan', [FrontofficeController::class, 'front_layanan']);
});
