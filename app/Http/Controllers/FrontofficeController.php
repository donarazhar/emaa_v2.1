<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class FrontofficeController extends Controller
{
    public function front_kategorisurat()
    {
        $email = Auth::guard('karyawan')->user()->email;
        $id_user = DB::table('tbl_user')->select('tbl_user.id_user')->where('email', $email)->first();
        $tbl_userID = DB::table('tbl_user')
            ->select('tbl_user.*', 'tbl_marbout.*', 'nama_unitkerja')
            ->leftJoin('tbl_marbout', 'tbl_user.id_user', '=', 'tbl_marbout.id_user')
            ->leftJoin('tbl_unitkerja', 'tbl_marbout.id_unitkerja', '=', 'tbl_unitkerja.id_unitkerja')
            ->where('tbl_user.id_user', $id_user->id_user) // Menggunakan $id_user->id_user
            ->first();
        $tbl_katsurat = DB::table('tbl_kategori')->get();
        return view('front.front_kategorisurat', compact('tbl_userID', 'tbl_katsurat'));
    }

    public function front_tambahkatsurat(Request $request)
    {
        $namakategorikatsurat = $request->namakategorikatsurat;

        try {
            $data = [
                'nama_kategori' => $namakategorikatsurat,
            ];

            $simpan = DB::table('tbl_kategori')->insert($data);
            if ($simpan) {
                return redirect()->back()->with(['success' => 'Data berhasil disimpan']);
            }
        } catch (\Exception $e) {
            // Tampilkan pesan kesalahan
            return redirect()->back()->with(['warning' => 'Terjadi kesalahan input data']);
        }
    }

    public function front_editkatsurat(Request $request)
    {
        $email = Auth::guard('karyawan')->user()->email;
        $id_user = DB::table('tbl_user')->select('tbl_user.id_user')->where('email', $email)->first();
        $tbl_userID = DB::table('tbl_user')
            ->select('tbl_user.*', 'tbl_marbout.*', 'nama_unitkerja')
            ->leftJoin('tbl_marbout', 'tbl_user.id_user', '=', 'tbl_marbout.id_user')
            ->leftJoin('tbl_unitkerja', 'tbl_marbout.id_unitkerja', '=', 'tbl_unitkerja.id_unitkerja')
            ->where('tbl_user.id_user', $id_user->id_user) // Menggunakan $id_user->id_user
            ->first();

        $tbl_kategoriID = DB::table('tbl_kategori')
            ->where('id_kategori', $request->id)
            ->first();

        return view('front.front_editkatsurat', compact('tbl_userID', 'tbl_kategoriID'));
    }

    public function front_updatekatsurat($id_kategori, Request $request)
    {
        // Ambil data dari tabel tbl_marbout dengan ID yang diberikan
        $kategori = DB::table('tbl_kategori')->where('id_kategori', $id_kategori)->first();

        if (!$kategori) {
            // Handle jika data tidak ditemukan
            return redirect()->back()->with(['warning' => 'Data tidak ditemukan.']);
        }

        $namakategorikatsurat = $request->namakategorikatsurat;

        try {
            $data = [

                'nama_kategori' => $namakategorikatsurat,
            ];

            $update = DB::table('tbl_kategori')->where('id_kategori', $id_kategori)->update($data);
            if ($update) {
                return redirect()->back()->with(['success' => 'Data berhasil diupdate']);
            }
        } catch (\Exception $e) {
            // Tampilkan pesan kesalahan
            return redirect()->back()->with(['warning' => 'Terjadi kesalahan input data']);
        }
    }

    public function front_hapuskatsurat($id_kategori)
    {
        $delete = DB::table('tbl_kategori')->where('id_kategori', $id_kategori)->delete();
        if ($delete) {
            return Redirect::back()->with(['success' => 'Data Berhasil Dihapus']);
        } else {
            return Redirect::back()->with(['warning' => 'Data Gagal Dihapus']);
        }
    }

    public function front_asalsurat()
    {
        $email = Auth::guard('karyawan')->user()->email;
        $id_user = DB::table('tbl_user')->select('tbl_user.id_user')->where('email', $email)->first();
        $tbl_userID = DB::table('tbl_user')
            ->select('tbl_user.*', 'tbl_marbout.*', 'nama_unitkerja')
            ->leftJoin('tbl_marbout', 'tbl_user.id_user', '=', 'tbl_marbout.id_user')
            ->leftJoin('tbl_unitkerja', 'tbl_marbout.id_unitkerja', '=', 'tbl_unitkerja.id_unitkerja')
            ->where('tbl_user.id_user', $id_user->id_user) // Menggunakan $id_user->id_user
            ->first();
        $tbl_asalsurat = DB::table('tbl_asalsurat')->get();
        return view('front.front_asalsurat', compact('tbl_userID', 'tbl_asalsurat'));
    }

    public function front_tambahasalsurat(Request $request)
    {
        $kodeasalsurat = $request->kodeasalsurat;
        $namaasalsurat = $request->namaasalsurat;
        $deskripsi = $request->deskripsi;

        try {
            $data = [
                'kode_asalsurat' => $kodeasalsurat,
                'nama_asalsurat' => $namaasalsurat,
                'deskripsi' => $deskripsi
            ];

            $simpan = DB::table('tbl_asalsurat')->insert($data);
            if ($simpan) {
                return redirect()->back()->with(['success' => 'Data berhasil disimpan']);
            }
        } catch (\Exception $e) {
            // Tampilkan pesan kesalahan
            return redirect()->back()->with(['warning' => 'Terjadi kesalahan input data']);
        }
    }

    public function front_editasalsurat(Request $request)
    {
        $email = Auth::guard('karyawan')->user()->email;
        $id_user = DB::table('tbl_user')->select('tbl_user.id_user')->where('email', $email)->first();
        $tbl_userID = DB::table('tbl_user')
            ->select('tbl_user.*', 'tbl_marbout.*', 'nama_unitkerja')
            ->leftJoin('tbl_marbout', 'tbl_user.id_user', '=', 'tbl_marbout.id_user')
            ->leftJoin('tbl_unitkerja', 'tbl_marbout.id_unitkerja', '=', 'tbl_unitkerja.id_unitkerja')
            ->where('tbl_user.id_user', $id_user->id_user) // Menggunakan $id_user->id_user
            ->first();

        $tbl_asalsuratID = DB::table('tbl_asalsurat')
            ->where('id_asalsurat', $request->id)
            ->first();

        return view('front.front_editasalsurat', compact('tbl_userID', 'tbl_asalsuratID'));
    }

    public function front_updateasalsurat($id_asalsurat, Request $request)
    {
        // Ambil data dari tabel tbl_marbout dengan ID yang diberikan
        $asalsurat = DB::table('tbl_asalsurat')->where('id_asalsurat', $id_asalsurat)->first();

        if (!$asalsurat) {
            // Handle jika data tidak ditemukan
            return redirect()->back()->with(['warning' => 'Data tidak ditemukan.']);
        }

        $kodeasalsurat = $request->kodeasalsurat;
        $namaasalsurat = $request->namaasalsurat;
        $deskripsi = $request->deskripsi;

        try {
            $data = [
                'kode_asalsurat' => $kodeasalsurat,
                'nama_asalsurat' => $namaasalsurat,
                'deskripsi' => $deskripsi
            ];

            $update = DB::table('tbl_asalsurat')->where('id_asalsurat', $id_asalsurat)->update($data);
            if ($update) {
                return redirect()->back()->with(['success' => 'Data berhasil diupdate']);
            }
        } catch (\Exception $e) {
            // Tampilkan pesan kesalahan
            return redirect()->back()->with(['warning' => 'Terjadi kesalahan input data']);
        }
    }

    public function front_hapusasalsurat($id_asalsurat)
    {
        $delete = DB::table('tbl_asalsurat')->where('id_asalsurat', $id_asalsurat)->delete();
        if ($delete) {
            return Redirect::back()->with(['success' => 'Data Berhasil Dihapus']);
        } else {
            return Redirect::back()->with(['warning' => 'Data Gagal Dihapus']);
        }
    }

    public function front_datasurat()
    {
        $email = Auth::guard('karyawan')->user()->email;
        $id_user = DB::table('tbl_user')->select('tbl_user.id_user')->where('email', $email)->first();
        $tbl_userID = DB::table('tbl_user')
            ->select('tbl_user.*', 'tbl_marbout.*', 'nama_unitkerja')
            ->leftJoin('tbl_marbout', 'tbl_user.id_user', '=', 'tbl_marbout.id_user')
            ->leftJoin('tbl_unitkerja', 'tbl_marbout.id_unitkerja', '=', 'tbl_unitkerja.id_unitkerja')
            ->where('tbl_user.id_user', $id_user->id_user) // Menggunakan $id_user->id_user
            ->first();
        $tbl_kategori = DB::table('tbl_kategori')->get();
        $tbl_asalsurat = DB::table('tbl_asalsurat')->get();
        $tbl_datasurat = DB::table('tbl_transaksisurat')
            ->leftJoin('tbl_kategori', 'tbl_transaksisurat.id_kategori', '=', 'tbl_kategori.id_kategori')
            ->leftJoin('tbl_asalsurat', 'tbl_transaksisurat.id_asalsurat', '=', 'tbl_asalsurat.id_asalsurat')
            ->get();
        // Mendapatkan nomor terakhir dari ID
        $nomorurut = DB::table('tbl_transaksisurat')->max('id_transaksisurat');
        // Menambahkannya dengan 1
        $nomorbaru = $nomorurut + 1;


        return view('front.front_datasurat', compact('tbl_userID', 'tbl_kategori', 'tbl_asalsurat', 'tbl_datasurat', 'nomorbaru'));
    }

    public function front_tambahdatasurat(Request $request)
    {
        $no_modaltransaksisurat = $request->no_modaltransaksisurat;
        $tglmodaltransaksisurat = $request->tglmodaltransaksisurat;
        $perihalmodal = $request->perihalmodal;
        $idkategorimodal = $request->idkategorimodal;
        $idasalsuratmodal = $request->idasalsuratmodal;
        $suratdarimodal = $request->suratdarimodal;
        $statussurat = $request->statussurat;

        try {
            $data = [
                'no_transaksisurat' => $no_modaltransaksisurat,
                'tgl_masuksurat' => $tglmodaltransaksisurat,
                'perihal' => $perihalmodal,
                'id_kategori' => $idkategorimodal,
                'id_asalsurat' => $idasalsuratmodal,
                'suratdari' => $suratdarimodal,
                'status' => $statussurat,
            ];

            $simpan = DB::table('tbl_transaksisurat')->insert($data);
            if ($simpan) {
                return redirect()->back()->with(['success' => 'Data berhasil disimpan']);
            }
        } catch (\Exception $e) {
            dd($e->getMessage());
            // Tampilkan pesan kesalahan
            return redirect()->back()->with(['warning' => 'Terjadi kesalahan input data']);
        }
    }

    public function front_editdatasurat(Request $request)
    {
        $email = Auth::guard('karyawan')->user()->email;
        $id_user = DB::table('tbl_user')->select('tbl_user.id_user')->where('email', $email)->first();
        $tbl_userID = DB::table('tbl_user')
            ->select('tbl_user.*', 'tbl_marbout.*', 'nama_unitkerja')
            ->leftJoin('tbl_marbout', 'tbl_user.id_user', '=', 'tbl_marbout.id_user')
            ->leftJoin('tbl_unitkerja', 'tbl_marbout.id_unitkerja', '=', 'tbl_unitkerja.id_unitkerja')
            ->where('tbl_user.id_user', $id_user->id_user) // Menggunakan $id_user->id_user
            ->first();

        $tbl_kategori = DB::table('tbl_kategori')->get();
        $tbl_asalsurat = DB::table('tbl_asalsurat')->get();
        $tbl_datasuratID = DB::table('tbl_transaksisurat')
            ->leftJoin('tbl_kategori', 'tbl_transaksisurat.id_kategori', '=', 'tbl_kategori.id_kategori')
            ->leftJoin('tbl_asalsurat', 'tbl_transaksisurat.id_asalsurat', '=', 'tbl_asalsurat.id_asalsurat')
            ->where('id_transaksisurat', $request->id)
            ->first();

        return view('front.front_editdatasurat', compact('tbl_userID', 'tbl_datasuratID', 'tbl_kategori', 'tbl_asalsurat'));
    }

    public function front_updatedatasurat($id_transaksisurat, Request $request)
    {
        // Ambil data dari tabel tbl_marbout dengan ID yang diberikan
        $datasurat = DB::table('tbl_transaksisurat')->where('id_transaksisurat', $id_transaksisurat)->first();

        if (!$datasurat) {
            // Handle jika data tidak ditemukan
            return redirect()->back()->with(['warning' => 'Data tidak ditemukan.']);
        }

        $no_modaltransaksisurat = $request->no_modaltransaksisurat;
        $tglmodaltransaksisurat = $request->tglmodaltransaksisurat;
        $perihalmodal = $request->perihalmodal;
        $idkategorimodal = $request->idkategorimodal;
        $idasalsuratmodal = $request->idasalsuratmodal;
        $suratdarimodal = $request->suratdarimodal;
        $statussurat = $request->statussurat;

        try {
            $data = [
                'no_transaksisurat' => $no_modaltransaksisurat,
                'tgl_masuksurat' => $tglmodaltransaksisurat,
                'perihal' => $perihalmodal,
                'id_kategori' => $idkategorimodal,
                'id_asalsurat' => $idasalsuratmodal,
                'suratdari' => $suratdarimodal,
                'status' => $statussurat,
            ];

            $update = DB::table('tbl_transaksisurat')->where('id_transaksisurat', $id_transaksisurat)->update($data);
            if ($update) {
                return redirect()->back()->with(['success' => 'Data berhasil diupdate']);
            }
        } catch (\Exception $e) {
            // Tampilkan pesan kesalahan
            return redirect()->back()->with(['warning' => 'Terjadi kesalahan input data']);
        }
    }

    public function front_hapusdatasurat($id_transaksisurat)
    {
        $delete = DB::table('tbl_transaksisurat')->where('id_transaksisurat', $id_transaksisurat)->delete();
        if ($delete) {
            return Redirect::back()->with(['success' => 'Data Berhasil Dihapus']);
        } else {
            return Redirect::back()->with(['warning' => 'Data Gagal Dihapus']);
        }
    }
}
