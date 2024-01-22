<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FrontLayananController extends Controller
{
    public function frontlayanan_bukutamu()
    {
        $email = Auth::guard('karyawan')->user()->email;
        $id_user = DB::table('tbl_user')->select('tbl_user.id_user')->where('email', $email)->first();
        $tbl_userID = DB::table('tbl_user')
            ->select('tbl_user.*', 'tbl_marbout.*', 'nama_unitkerja')
            ->leftJoin('tbl_marbout', 'tbl_user.id_user', '=', 'tbl_marbout.id_user')
            ->leftJoin('tbl_unitkerja', 'tbl_marbout.id_unitkerja', '=', 'tbl_unitkerja.id_unitkerja')
            ->where('tbl_user.id_user', $id_user->id_user) // Menggunakan $id_user->id_user
            ->first();

        return view('frontlayanan.layanan_bukutamu', compact('tbl_userID'));
    }

    public function frontlayanan_tambahdatatamu(Request $request)
    {
        $namatamumodal = $request->namatamumodal;
        $alamattamumodal = $request->alamattamumodal;
        $nohptamumodal = $request->nohptamumodal;
        $emailtamumodal = $request->emailtamumodal;
        $keperluantamumodal = $request->keperluantamumodal;

        try {
            $data = [
                'nama_tamu' => $namatamumodal,
                'alamat_tamu' => $alamattamumodal,
                'nohp_tamu' => $nohptamumodal,
                'email_tamu' => $emailtamumodal,
                'keperluan_tamu' => $keperluantamumodal,
                'tgl_tamu' => now()

            ];

            $simpan = DB::table('tbl_tamu')->insert($data);
            if ($simpan) {
                return redirect()->back()->with(['success' => 'Data berhasil disimpan']);
            }
        } catch (\Exception $e) {
            // Tampilkan pesan kesalahan
            return redirect()->back()->with(['warning' => 'Terjadi kesalahan input data']);
        }
    }


    public function frontlayanan_pengislaman()
    {
        $email = Auth::guard('karyawan')->user()->email;
        $id_user = DB::table('tbl_user')->select('tbl_user.id_user')->where('email', $email)->first();
        $tbl_userID = DB::table('tbl_user')
            ->select('tbl_user.*', 'tbl_marbout.*', 'nama_unitkerja')
            ->leftJoin('tbl_marbout', 'tbl_user.id_user', '=', 'tbl_marbout.id_user')
            ->leftJoin('tbl_unitkerja', 'tbl_marbout.id_unitkerja', '=', 'tbl_unitkerja.id_unitkerja')
            ->where('tbl_user.id_user', $id_user->id_user) // Menggunakan $id_user->id_user
            ->first();

        return view('frontlayanan.layanan_pengislaman', compact('tbl_userID'));
    }

    public function frontlayanan_tambahdatapengislaman(Request $request)
    {
        $namaspmodal = $request->namaspmodal;
        $jenkelspmodal = $request->jenkelspmodal;
        $ttlspmodal = $request->ttlspmodal;
        $agamasemulaspmodal = $request->agamasemulaspmodal;
        $alamatspmodal = $request->alamatspmodal;
        $alamat2spmodal = $request->alamat2spmodal;
        $pekerjaanspmodal = $request->pekerjaanspmodal;
        $nohpspmodal = $request->nohpspmodal;
        $saksispmodal = $request->saksispmodal;
        $saksi2spmodal = $request->saksi2spmodal;
        $saksi3spmodal = $request->saksi3spmodal;
        $namabaruspmodal = $request->namabaruspmodal;
        $emailspmodal = $request->emailspmodal;
        $alasanspmodal = $request->alasanspmodal;

        try {
            $data = [
                'nama_sp' => $namaspmodal,
                'jenkel_sp' => $jenkelspmodal,
                'ttl_sp' => $ttlspmodal,
                'agamasemula_sp' => $agamasemulaspmodal,
                'alamat_sp' => $alamatspmodal,
                'alamat2_sp' =>  $alamat2spmodal,
                'pekerjaan_sp' =>  $pekerjaanspmodal,
                'nohp_sp' =>  $nohpspmodal,
                'saksi_sp' =>  $saksispmodal,
                'saksi2_sp' =>  $saksi2spmodal,
                'saksi3_sp' =>  $saksi3spmodal,
                'namabaru_sp' =>  $namabaruspmodal,
                'email_sp' =>  $emailspmodal,
                'alasan_sp' =>  $alasanspmodal,

            ];

            $simpan = DB::table('tbl_sertifikatpengislaman')->insert($data);
            if ($simpan) {
                return redirect()->back()->with(['success' => 'Data berhasil disimpan']);
            }
        } catch (\Exception $e) {
            // Tampilkan pesan kesalahan
            return redirect()->back()->with(['warning' => 'Terjadi kesalahan input data']);
        }
    }


    public function frontlayanan_konsultasi()
    {
        $email = Auth::guard('karyawan')->user()->email;
        $id_user = DB::table('tbl_user')->select('tbl_user.id_user')->where('email', $email)->first();
        $tbl_userID = DB::table('tbl_user')
            ->select('tbl_user.*', 'tbl_marbout.*', 'nama_unitkerja')
            ->leftJoin('tbl_marbout', 'tbl_user.id_user', '=', 'tbl_marbout.id_user')
            ->leftJoin('tbl_unitkerja', 'tbl_marbout.id_unitkerja', '=', 'tbl_unitkerja.id_unitkerja')
            ->where('tbl_user.id_user', $id_user->id_user) // Menggunakan $id_user->id_user
            ->first();

        return view('frontlayanan.layanan_konsultasi', compact('tbl_userID'));
    }

    public function frontlayanan_tambahdatakonsultasi(Request $request)
    {
        $namaspmodal = $request->namaspmodal;
        $jenkelspmodal = $request->jenkelspmodal;
        $ttlspmodal = $request->ttlspmodal;
        $agamasemulaspmodal = $request->agamasemulaspmodal;
        $alamatspmodal = $request->alamatspmodal;
        $alamat2spmodal = $request->alamat2spmodal;
        $pekerjaanspmodal = $request->pekerjaanspmodal;
        $nohpspmodal = $request->nohpspmodal;
        $saksispmodal = $request->saksispmodal;
        $saksi2spmodal = $request->saksi2spmodal;
        $saksi3spmodal = $request->saksi3spmodal;
        $namabaruspmodal = $request->namabaruspmodal;
        $emailspmodal = $request->emailspmodal;
        $alasanspmodal = $request->alasanspmodal;

        try {
            $data = [
                'nama_sp' => $namaspmodal,
                'jenkel_sp' => $jenkelspmodal,
                'ttl_sp' => $ttlspmodal,
                'agamasemula_sp' => $agamasemulaspmodal,
                'alamat_sp' => $alamatspmodal,
                'alamat2_sp' =>  $alamat2spmodal,
                'pekerjaan_sp' =>  $pekerjaanspmodal,
                'nohp_sp' =>  $nohpspmodal,
                'saksi_sp' =>  $saksispmodal,
                'saksi2_sp' =>  $saksi2spmodal,
                'saksi3_sp' =>  $saksi3spmodal,
                'namabaru_sp' =>  $namabaruspmodal,
                'email_sp' =>  $emailspmodal,
                'alasan_sp' =>  $alasanspmodal,

            ];

            $simpan = DB::table('tbl_sertifikatpengislaman')->insert($data);
            if ($simpan) {
                return redirect()->back()->with(['success' => 'Data berhasil disimpan']);
            }
        } catch (\Exception $e) {
            // Tampilkan pesan kesalahan
            return redirect()->back()->with(['warning' => 'Terjadi kesalahan input data']);
        }
    }
}
