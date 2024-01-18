<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MarboutController extends Controller
{
    public function marbout_index()
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

        $tbl_user = DB::table('tbl_user')->get();
        $tbl_unitkerja = DB::table('tbl_unitkerja')->get();


        return view('marbout.marbout_index', compact('tbl_userID', 'tbl_marbout', 'tbl_user', 'tbl_unitkerja'));
    }

    public function marbout_detail($id, Request $request)
    {
        $email = Auth::guard('karyawan')->user()->email;
        $id_user = DB::table('tbl_user')->select('tbl_user.id_user')->where('email', $email)->first();
        $tbl_userID = DB::table('tbl_user')
            ->select('tbl_user.*', 'tbl_marbout.*', 'nama_unitkerja')
            ->leftJoin('tbl_marbout', 'tbl_user.id_user', '=', 'tbl_marbout.id_user')
            ->leftJoin('tbl_unitkerja', 'tbl_marbout.id_unitkerja', '=', 'tbl_unitkerja.id_unitkerja')
            ->where('tbl_user.id_user', $id_user->id_user) // Menggunakan $id_user->id_user
            ->first();
        $id = $request->id;
        $tbl_marboutID = DB::table('tbl_marbout')
            ->leftJoin('tbl_user', 'tbl_marbout.id_user', '=', 'tbl_user.id_user')
            ->leftJoin('tbl_unitkerja', 'tbl_marbout.id_unitkerja', '=', 'tbl_unitkerja.id_unitkerja')
            ->select('tbl_marbout.*', 'tbl_user.*', 'tbl_unitkerja.nama_unitkerja')
            ->where('tbl_marbout.id_user', $id)
            ->orderby('tbl_user.nama_user')
            ->first();

        return view('marbout.marbout_detail', compact('tbl_marboutID', 'tbl_userID'));
    }

    public function marbout_tambah(Request $request)
    {
        $id_user = $request->id_user;
        $id_unitkerja = $request->id_unitkerja;
        $nip = $request->nip;
        $tempatlahir = $request->tempatlahir;
        $tgllahir = $request->tgllahir;
        $jenkel = $request->jenkel;
        $goldar = $request->goldar;
        $statusnikah = $request->statusnikah;
        $statuskepeg = $request->statuskepeg;
        $alamat = $request->alamat;

        try {
            $data = [
                'id_user' => $id_user,
                'id_unitkerja' => $id_unitkerja,
                'nip' => $nip,
                'tempat_lahir' => $tempatlahir,
                'tgl_lahir' => $tgllahir,
                'jenkel' => $jenkel,
                'goldar' => $goldar,
                'status_nikah' => $statusnikah,
                'status_kepeg' => $statuskepeg,
                'alamat' => $alamat
            ];

            $simpan = DB::table('tbl_marbout')->insert($data);
            if ($simpan) {
                return redirect()->back()->with(['success' => 'Data berhasil disimpan']);
            }
        } catch (\Exception $e) {
            // Tampilkan pesan kesalahan
            return redirect()->back()->with(['warning' => 'Terjadi kesalahan inputan.']);
        }
    }

    public function marbout_suamiistri()
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
            ->get();
        return view('marbout.marbout_suamiistri', compact('tbl_userID', 'tbl_marbout'));
    }

    public function marbout_tambahdatakel(Request $request)
    {
        $idmarbout = $request->idmarbout;
        $nik = $request->nik;
        $namadatakel = $request->namadatakel;
        $tempatlahir = $request->tempatlahir;
        $tgllahir = $request->tgllahir;
        $pendidikan = $request->pendidikan;
        $pekerjaan = $request->pekerjaan;
        $statushub = $request->statushub;


        // Validasi untuk file yang diupload
        $request->validate([
            'foto' => 'image|mimes:png,jpg,jpeg|max:2024'
        ]);

        try {
            // Periksa apakah file foto diupload
            if ($request->hasFile('foto')) {
                $fotoFile = $request->file('foto');
                $fotouser = substr(hash('sha256', time()), 0, 25) . '.' . $fotoFile->getClientOriginalExtension();
                $fotoFile->storeAs('public/uploads/marbout/datakel/', $fotouser);
            } else {
                // Jika tidak ada file foto diupload, beri nilai default atau sesuaikan dengan kebutuhan Anda
                $fotouser = 'preview.png'; // Ganti dengan nama file default yang Anda inginkan
            }


            $data = [
                'id_marbout' => $idmarbout,
                'nik' => $nik,
                'namadatakel' => $namadatakel,
                'pendidikan' => $pendidikan,
                'pekerjaan' => $pekerjaan,
                'status_hub' => $statushub,
                'tempat_lahir' => $tempatlahir,
                'tgl_lahir' => $tgllahir,
                'foto' => $fotouser,

            ];

            $simpan = DB::table('marbout_datakel')->insert($data);
            if ($simpan) {
                return redirect()->back()->with(['success' => 'Data berhasil disimpan']);
            }
        } catch (\Exception $e) {
            // Tampilkan pesan kesalahan
            return redirect()->back()->with(['warning' => 'Terjadi kesalahan input data']);
        }
    }
}
