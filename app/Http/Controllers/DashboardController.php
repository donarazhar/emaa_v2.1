<?php

namespace App\Http\Controllers;

use App\Models\InventarisModels;
use App\Models\Karyawan;
use App\Models\LaporkerjaModels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function dash_index(Request $request)
    {
        $email = Auth::guard('karyawan')->user()->email;
        $id_user = DB::table('tbl_user')->select('tbl_user.id_user')->where('email', $email)->first();

        $tbl_userID = DB::table('tbl_user')
            ->select('tbl_user.*', 'tbl_marbout.*', 'nama_unitkerja')
            ->leftJoin('tbl_marbout', 'tbl_user.id_user', '=', 'tbl_marbout.id_user')
            ->leftJoin('tbl_unitkerja', 'tbl_marbout.id_unitkerja', '=', 'tbl_unitkerja.id_unitkerja')
            ->where('tbl_user.id_user', $id_user->id_user) // Menggunakan $id_user->id_user
            ->first();

        $tbl_user = Karyawan::paginate(4, ['*'], 'tbl_user_page');

        $asalsurat = DB::table('tbl_transaksisurat')
            ->leftJoin('tbl_asalsurat', 'tbl_transaksisurat.id_asalsurat', '=', 'tbl_asalsurat.id_asalsurat')
            ->select('tbl_asalsurat.nama_asalsurat', DB::raw('COUNT(tbl_transaksisurat.id_transaksisurat) as jumlah'))
            ->groupBy('tbl_asalsurat.nama_asalsurat')
            ->get();

        // Query untuk mendapatkan jumlah surat per nama_kategori
        $kategori = DB::table('tbl_transaksisurat')
            ->leftJoin('tbl_kategori', 'tbl_transaksisurat.id_kategori', '=', 'tbl_kategori.id_kategori')
            ->select('tbl_kategori.nama_kategori', DB::raw('COUNT(tbl_transaksisurat.id_transaksisurat) as jumlah'))
            ->groupBy('tbl_kategori.nama_kategori')
            ->get();

        // Gabungkan hasil dari dua query di atas
        $merge_tbltransaksisurat = array_merge($asalsurat->toArray(), $kategori->toArray());

        // Sajikan data dalam format yang sesuai untuk chart.js
        $labelssurat = [];
        $datasurat = [];

        foreach ($merge_tbltransaksisurat as $item) {
            $labelssurat[] = $item->nama_asalsurat ?? $item->nama_kategori;
            $datasurat[] = $item->jumlah;
        }

        $laporkerja = LaporkerjaModels::leftJoin('tbl_user', 'presensi_laporkerja.id_user', '=', 'tbl_user.id_user')
            ->select('presensi_laporkerja.*', 'tbl_user.nama_user')
            ->paginate(4, ['*'], 'laporkerja_page');


        $datainventaris = InventarisModels::leftJoin('inventaris_merk', 'inventaris_datainventaris.id_merk', '=', 'inventaris_merk.id_merk')
            ->leftJoin('inventaris_bagian', 'inventaris_datainventaris.id_bagian', '=', 'inventaris_bagian.id_bagian')
            ->select('inventaris_datainventaris.*', 'inventaris_merk.nama_merk as nama_merk', 'inventaris_bagian.nama_bagian as nama_bagian')
            ->when(!empty($request->cariinventaris), function ($query) use ($request) {
                $query->where(function ($subquery) use ($request) {
                    $subquery->where('nama_datainventaris', 'like', '%' . $request->cariinventaris . '%')
                        ->orWhere('nama_merk', 'like', '%' . $request->cariinventaris . '%')
                        ->orWhere('nama_bagian', 'like', '%' . $request->cariinventaris . '%');
                });
            })
            ->paginate(5, ['*'], 'datainventaris_page');

        // Query untuk jumlah total pertahun dari kolom jenkel_sp
        $jenkelmuallaf = DB::table('tbl_sertifikatpengislaman')
            ->select(DB::raw('YEAR(tgl_sp) as tahun'), 'jenkel_sp', DB::raw('COUNT(id_sp) as jumlah'))
            ->groupBy(DB::raw('YEAR(tgl_sp)'), 'jenkel_sp')
            ->get();

        // Query untuk jumlah total pertahun dari kolom agamasemula_sp
        $agamasemula = DB::table('tbl_sertifikatpengislaman')
            ->select(DB::raw('YEAR(tgl_sp) as tahun'), 'agamasemula_sp', DB::raw('COUNT(id_sp) as jumlah'))
            ->whereNotIn('agamasemula_sp', ['-', '--Pilih--']) // Menambahkan klausa whereNotIn
            ->groupBy(DB::raw('YEAR(tgl_sp)'), 'agamasemula_sp')
            ->get();

        // Query untuk jumlah total pertahun dari kolom id_jeniskonsultasi
        $konsultasi = DB::table('tbl_formulirkonsultasi')
            ->select(DB::raw('YEAR(tgl_fk) as tahun'), 'tbl_jeniskonsultasi.nama_jeniskonsultasi', DB::raw('COUNT(tbl_formulirkonsultasi.id_jeniskonsultasi) as jumlah'))
            ->leftJoin('tbl_jeniskonsultasi', 'tbl_formulirkonsultasi.id_jeniskonsultasi', '=', 'tbl_jeniskonsultasi.id_jeniskonsultasi')
            ->groupBy(DB::raw('YEAR(tgl_fk)'), 'tbl_formulirkonsultasi.id_jeniskonsultasi', 'tbl_jeniskonsultasi.nama_jeniskonsultasi')
            ->get();

        // Menggabungkan hasil dari query jenkelmuallaf, agamasemula, dan dataStatistik
        $mergeIslamKonsul = array_merge($jenkelmuallaf->toArray(), $agamasemula->toArray(), $konsultasi->toArray());
        // Sajikan data dalam format yang sesuai untuk chart.js
        $labelsdata = [];
        $dataIslamKonsul = [];

        foreach ($mergeIslamKonsul  as $item) {
            // Tambahkan label berdasarkan jenis kelamin atau agama
            $labelsdata[] = $item->jenkel_sp ?? $item->agamasemula_sp ?? $item->nama_jeniskonsultasi;

            // Tambahkan data jumlah
            $dataIslamKonsul[] = $item->jumlah;
        }

        // Konversi array label ke format yang sesuai untuk Chart.js
        $labelsdata = json_encode($labelsdata);
        // Konversi array data jumlah ke format yang sesuai untuk Chart.js
        $dataIslamKonsul = json_encode($dataIslamKonsul);

        return view('dashboard.dash_index', compact('tbl_userID', 'tbl_user', 'labelssurat', 'datasurat', 'laporkerja', 'datainventaris', 'dataIslamKonsul', 'labelsdata'));
    }

    public function dash_datamarbout()
    {
        $email = Auth::guard('karyawan')->user()->email;
        $id_user = DB::table('tbl_user')->select('tbl_user.id_user')->where('email', $email)->first();
        $tbl_userID = DB::table('tbl_user')
            ->select('tbl_user.*', 'tbl_marbout.*', 'nama_unitkerja')
            ->leftJoin('tbl_marbout', 'tbl_user.id_user', '=', 'tbl_marbout.id_user')
            ->leftJoin('tbl_unitkerja', 'tbl_marbout.id_unitkerja', '=', 'tbl_unitkerja.id_unitkerja')
            ->where('tbl_user.id_user', $id_user->id_user) // Menggunakan $id_user->id_user
            ->first();


        $tbl_marbout = DB::table('tbl_marbout')
            ->leftJoin('tbl_user', 'tbl_marbout.id_user', '=', 'tbl_user.id_user')
            ->leftJoin('tbl_unitkerja', 'tbl_marbout.id_unitkerja', '=', 'tbl_unitkerja.id_unitkerja')
            ->select('tbl_marbout.*', 'tbl_user.*', 'tbl_unitkerja.nama_unitkerja')
            ->orderby('tbl_user.nama_user')
            ->paginate(10);

        return view('dashboard.dashmarbout_index', compact('tbl_userID', 'tbl_marbout'));
    }

    public function dash_detailmarbout(Request $request)
    {
        $id = $request->id;
        $tbl_marboutID = DB::table('tbl_marbout')
            ->leftJoin('tbl_user', 'tbl_marbout.id_user', '=', 'tbl_user.id_user')
            ->leftJoin('tbl_unitkerja', 'tbl_marbout.id_unitkerja', '=', 'tbl_unitkerja.id_unitkerja')
            ->select('tbl_marbout.*', 'tbl_user.*', 'tbl_unitkerja.nama_unitkerja')
            ->where('tbl_marbout.id_user', $id)
            ->orderby('tbl_user.nama_user')
            ->first();

        return view('dashboard.dashmarbout_detail', compact('tbl_marboutID'));
    }
}
