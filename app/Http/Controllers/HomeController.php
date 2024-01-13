<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function h_index()
    {
        $tbl_user = DB::table('tbl_user')->paginate(4);
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
        $labels = [];
        $data = [];

        foreach ($merge_tbltransaksisurat as $item) {
            $labels[] = $item->nama_asalsurat ?? $item->nama_kategori;
            $data[] = $item->jumlah;
        }
        return view('home.h_index', compact('tbl_user', 'labels', 'data'));
    }
}
