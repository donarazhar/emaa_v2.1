<?php

namespace App\Http\Controllers;

use App\Models\InventarisModels;
use App\Models\Karyawan;
use App\Models\LaporkerjaModels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function h_index(Request $request)
    {
        $tbl_user = Karyawan::paginate(4, ['*'], 'tbl_user_page');
        // Query untuk mendapatkan jumlah surat per nama_asalsurat
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


        return view('home.h_index', compact('tbl_user', 'labelssurat', 'datasurat', 'laporkerja', 'datainventaris'));
    }
}
