<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontLayananController;
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
    Route::get('/', [HomeController::class, 'h_index'])->name('/');
    Route::get('/daftar', [HomeController::class, 'h_daftar']);
    Route::get('/login', [HomeController::class, 'h_login']);
    Route::post('/proseslogin', [HomeController::class, 'h_proseslogin']);
    Route::post('/prosesdaftar', [HomeController::class, 'h_prosesdaftar']);
});

Route::middleware(['guest:user'])->group(function () {

    Route::get('/jamaah', [HomeController::class, 'user_login'])->name('jamaah');
    Route::get('/registerjamaah', [HomeController::class, 'user_register']);
    Route::post('/prosesloginjamaah', [HomeController::class, 'user_proseslogin']);
    Route::post('/prosesregisterjamaah', [HomeController::class, 'user_prosesregister']);
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

    Route::get('/front_laporansurat', [FrontofficeController::class, 'front_laporansurat']);


    Route::get('/frontlayanan_kategorilayanan', [FrontLayananController::class, 'frontlayanan_kategorilayanan']);
    Route::post('/frontlayanan_tambahkategorilayanan', [FrontLayananController::class, 'frontlayanan_tambahkategorilayanan']);
    Route::post('/frontlayanan_editkategorilayanan', [FrontLayananController::class, 'frontlayanan_editkategorilayanan']);
    Route::post('/frontlayanan_updatekategorilayanan/{id}', [FrontLayananController::class, 'frontlayanan_updatekategorilayanan']);
    Route::post('/frontlayanan_hapuskategorilayanan/{id_kategorilayanan}', [FrontLayananController::class, 'frontlayanan_hapuskategorilayanan']);

    Route::post('/frontlayanan_tambahjeniskonsultasi', [FrontLayananController::class, 'frontlayanan_tambahjeniskonsultasi']);
    Route::post('/frontlayanan_editjeniskonsultasi', [FrontLayananController::class, 'frontlayanan_editjeniskonsultasi']);
    Route::post('/frontlayanan_updatejeniskonsultasi/{id}', [FrontLayananController::class, 'frontlayanan_updatejeniskonsultasi']);
    Route::post('/frontlayanan_hapusjeniskonsultasi/{id_jeniskonsultasi}', [FrontLayananController::class, 'frontlayanan_hapusjeniskonsultasi']);

    Route::post('/frontlayanan_tambahjenispengislaman', [FrontLayananController::class, 'frontlayanan_tambahjenispengislaman']);
    Route::post('/frontlayanan_editjenispengislaman', [FrontLayananController::class, 'frontlayanan_editjenispengislaman']);
    Route::post('/frontlayanan_updatejenispengislaman/{id}', [FrontLayananController::class, 'frontlayanan_updatejenispengislaman']);
    Route::post('/frontlayanan_hapusjenispengislaman/{id_jenispengislaman}', [FrontLayananController::class, 'frontlayanan_hapusjenispengislaman']);

    Route::get('/frontlayanan_dataimam', [FrontLayananController::class, 'frontlayanan_dataimam']);
    Route::post('/frontlayanan_tambahdataimam', [FrontLayananController::class, 'frontlayanan_tambahdataimam']);
    Route::post('/frontlayanan_editdataimam', [FrontLayananController::class, 'frontlayanan_editdataimam']);
    Route::post('/frontlayanan_updatedataimam/{id}', [FrontLayananController::class, 'frontlayanan_updatedataimam']);
    Route::post('/frontlayanan_hapusdataimam/{id_dataimam}', [FrontLayananController::class, 'frontlayanan_hapusdataimam']);

    Route::get('/frontlayanan_datalayanan', [FrontLayananController::class, 'frontlayanan_datalayanan']);
    Route::post('/frontlayanan_editdatatamu', [FrontLayananController::class, 'frontlayanan_editdatatamu']);
    Route::post('/frontlayanan_updatedatatamu/{id}', [FrontLayananController::class, 'frontlayanan_updatedatatamu']);
    Route::post('/frontlayanan_hapusdatatamu/{id_tamu}', [FrontLayananController::class, 'frontlayanan_hapusdatatamu']);

    Route::post('/frontlayanan_editdatapengislaman', [FrontLayananController::class, 'frontlayanan_editdatapengislaman']);
    Route::post('/frontlayanan_updatedatapengislaman/{id}', [FrontLayananController::class, 'frontlayanan_updatedatapengislaman']);
    Route::post('/frontlayanan_hapusdatapengislaman/{id_sp}', [FrontLayananController::class, 'frontlayanan_hapusdatapengislaman']);
    Route::post('/frontlayanan_cetaksp/{id_sp}', [FrontLayananController::class, 'frontlayanan_cetaksp']);

    Route::post('/frontlayanan_tambahjadwalkonsultasi', [FrontLayananController::class, 'frontlayanan_tambahjadwalkonsultasi']);
});

Route::middleware(['auth:user'])->group(function () {

    Route::get('/panel/dashboarduser', [DashboardController::class, 'dashuser_index']);
    Route::get('/panel/proseslogoutuser', [HomeController::class, 'user_proseslogout']);
    Route::get('/panel/frontlayanan_infaq', [FrontLayananController::class, 'frontlayanan_infaq']);
    Route::get('/panel/frontlayanan_daftarkonsultasi/{id_fk}', [FrontLayananController::class, 'user_daftarkonsultasi']);
    Route::get('/panel/frontlayanan_bukutamu', [FrontLayananController::class, 'frontlayanan_bukutamu']);
    Route::post('/panel/frontlayanan_tambahdatatamu', [FrontLayananController::class, 'frontlayanan_tambahdatatamu']);
    Route::get('/panel/frontlayanan_pengislaman', [FrontLayananController::class, 'frontlayanan_pengislaman']);
    Route::post('/panel/frontlayanan_tambahdatapengislaman', [FrontLayananController::class, 'frontlayanan_tambahdatapengislaman']);
    Route::get('/panel/frontlayanan_konsultasi', [FrontLayananController::class, 'frontlayanan_konsultasi']);
    Route::post('/panel/frontlayanan_tambahdatakonsultasi/{id_fk}', [FrontLayananController::class, 'frontlayanan_tambahdatakonsultasi']);
});
