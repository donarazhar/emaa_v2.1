<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

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
            ->select('tbl_marbout.*', 'tbl_user.*', 'tbl_unitkerja.*',)
            ->where('tbl_marbout.id_user', $id)
            ->orderby('tbl_user.nama_user')
            ->first();

        $tbl_datakelID = DB::table('tbl_marbout')
            ->leftJoin('tbl_user', 'tbl_marbout.id_user', '=', 'tbl_user.id_user')
            ->leftJoin('marbout_datakel', 'tbl_marbout.id_marbout', '=', 'marbout_datakel.id_marbout')
            ->select('tbl_marbout.id_marbout', 'marbout_datakel.*')
            ->where('tbl_marbout.id_user', $id)
            ->get();

        $tbl_datakel2ID = DB::table('tbl_marbout')
            ->leftJoin('tbl_user', 'tbl_marbout.id_user', '=', 'tbl_user.id_user')
            ->leftJoin('marbout_datakel2', 'tbl_marbout.id_marbout', '=', 'marbout_datakel2.id_marbout')
            ->select('tbl_marbout.id_marbout', 'marbout_datakel2.*')
            ->where('tbl_marbout.id_user', $id)
            ->get();

        $tbl_datakel3ID = DB::table('tbl_marbout')
            ->leftJoin('tbl_user', 'tbl_marbout.id_user', '=', 'tbl_user.id_user')
            ->leftJoin('marbout_datakel3', 'tbl_marbout.id_marbout', '=', 'marbout_datakel3.id_marbout')
            ->select('tbl_marbout.id_marbout', 'marbout_datakel3.*')
            ->where('tbl_marbout.id_user', $id)
            ->get();

        $tbl_sekolahID = DB::table('tbl_marbout')
            ->leftJoin('tbl_user', 'tbl_marbout.id_user', '=', 'tbl_user.id_user')
            ->leftJoin('marbout_sekolah', 'tbl_marbout.id_marbout', '=', 'marbout_sekolah.id_marbout')
            ->select('tbl_marbout.id_marbout', 'marbout_sekolah.*')
            ->where('tbl_marbout.id_user', $id)
            ->get();

        $tbl_bahasaID = DB::table('tbl_marbout')
            ->leftJoin('tbl_user', 'tbl_marbout.id_user', '=', 'tbl_user.id_user')
            ->leftJoin('marbout_bahasa', 'tbl_marbout.id_marbout', '=', 'marbout_bahasa.id_marbout')
            ->select('tbl_marbout.id_marbout', 'marbout_bahasa.*')
            ->where('tbl_marbout.id_user', $id)
            ->get();

        $tbl_jabatanID = DB::table('tbl_marbout')
            ->leftJoin('tbl_user', 'tbl_marbout.id_user', '=', 'tbl_user.id_user')
            ->leftJoin('marbout_jabatan', 'tbl_marbout.id_marbout', '=', 'marbout_jabatan.id_marbout')
            ->leftJoin('marbout_kategori_jabatan', 'marbout_jabatan.id_katjabatan', '=', 'marbout_kategori_jabatan.id_katjabatan')
            ->leftJoin('marbout_kategori_eselon', 'marbout_jabatan.id_kateselon', '=', 'marbout_kategori_eselon.id_kateselon')
            ->select('tbl_marbout.id_marbout', 'marbout_jabatan.*', 'marbout_kategori_jabatan.*', 'marbout_kategori_eselon.*')
            ->where('tbl_marbout.id_user', $id)
            ->get();

        $tbl_penugasanID = DB::table('tbl_marbout')
            ->leftJoin('tbl_user', 'tbl_marbout.id_user', '=', 'tbl_user.id_user')
            ->leftJoin('marbout_penugasan', 'tbl_marbout.id_marbout', '=', 'marbout_penugasan.id_marbout')
            ->select('tbl_marbout.id_marbout', 'marbout_penugasan.*')
            ->where('tbl_marbout.id_user', $id)
            ->get();

        $tbl_seminarID = DB::table('tbl_marbout')
            ->leftJoin('tbl_user', 'tbl_marbout.id_user', '=', 'tbl_user.id_user')
            ->leftJoin('marbout_seminar', 'tbl_marbout.id_marbout', '=', 'marbout_seminar.id_marbout')
            ->select('tbl_marbout.id_marbout', 'marbout_seminar.*')
            ->where('tbl_marbout.id_user', $id)
            ->get();

        $tbl_penghargaanID = DB::table('tbl_marbout')
            ->leftJoin('tbl_user', 'tbl_marbout.id_user', '=', 'tbl_user.id_user')
            ->leftJoin('marbout_penghargaan', 'tbl_marbout.id_marbout', '=', 'marbout_penghargaan.id_marbout')
            ->select('tbl_marbout.id_marbout', 'marbout_penghargaan.*')
            ->where('tbl_marbout.id_user', $id)
            ->get();

        $tbl_pelanggaranID = DB::table('tbl_marbout')
            ->leftJoin('tbl_user', 'tbl_marbout.id_user', '=', 'tbl_user.id_user')
            ->leftJoin('marbout_pelanggaran', 'tbl_marbout.id_marbout', '=', 'marbout_pelanggaran.id_marbout')
            ->select('tbl_marbout.id_marbout', 'marbout_pelanggaran.*')
            ->where('tbl_marbout.id_user', $id)
            ->get();

        return view('marbout.marbout_detail', compact('tbl_marboutID', 'tbl_userID', 'tbl_datakelID', 'tbl_datakel2ID', 'tbl_datakel3ID', 'tbl_sekolahID', 'tbl_bahasaID', 'tbl_jabatanID', 'tbl_penugasanID', 'tbl_seminarID', 'tbl_penghargaanID', 'tbl_pelanggaranID'));
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

    public function marbout_edit(Request $request)
    {
        $email = Auth::guard('karyawan')->user()->email;
        $id = $request->id;

        $tbl_marbout = DB::table('tbl_marbout')
            ->leftJoin('tbl_user', 'tbl_marbout.id_user', '=', 'tbl_user.id_user')
            ->leftJoin('tbl_unitkerja', 'tbl_marbout.id_unitkerja', '=', 'tbl_unitkerja.id_unitkerja')
            ->select('tbl_marbout.*', 'tbl_user.*', 'tbl_unitkerja.nama_unitkerja')
            ->where('id_marbout', $id)
            ->orderby('tbl_user.nama_user')
            ->first();

        $tbl_user = DB::table('tbl_user')->get();
        $tbl_unitkerja = DB::table('tbl_unitkerja')->get();

        return view('marbout.marbout_edit', compact('tbl_marbout', 'tbl_user', 'tbl_unitkerja'));
    }

    public function marbout_update($id_marbout, Request $request)
    {
        // Ambil data dari tabel tbl_marbout dengan ID yang diberikan
        $marbout = DB::table('tbl_marbout')->where('id_marbout', $id_marbout)->first();


        if (!$marbout) {
            // Handle jika data tidak ditemukan
            return redirect()->back()->with(['warning' => 'Data tidak ditemukan.']);
        }

        $namauser = $request->namauser;
        $id_unitkerja = $request->id_unitkerja;
        $nip = $request->nip;
        $tempatlahir = $request->tempatlahir;
        $tgllahir = $request->tgllahir;
        $jenkel = $request->jenkel;
        $goldar = $request->goldar;
        $statusnikah = $request->statusnikah;
        $statuskepeg = $request->statuskepeg;
        $alamat = $request->alamat;

        // Validasi untuk file yang diupload
        $request->validate([
            'foto' => 'image|mimes:png,jpg,jpeg|max:2024'
        ]);

        try {
            // Periksa apakah file foto diupload
            if ($request->hasFile('foto')) {
                $fotoFile = $request->file('foto');
                $fotouser = substr(hash('sha256', time()), 0, 25) . '.' . $fotoFile->getClientOriginalExtension();
                $fotoFile->storeAs('public/uploads/marbout/', $fotouser);
            } else {
                // Jika tidak ada file foto baru diupload, gunakan foto yang sudah ada
                $fotouser = $marbout->foto_user;
            }

            $dataUser = [
                'nama_user' => $namauser,
                'foto_user' => $fotouser,
            ];

            $dataMarbout = [
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

            // Update kolom pada tabel tbl_user
            DB::table('tbl_user')->where('id_user', $marbout->id_user)->update($dataUser);
            // Update kolom pada tabel tbl_marbout
            DB::table('tbl_marbout')->where('id_marbout', $id_marbout)->update($dataMarbout);

            return redirect()->back()->with(['success' => 'Data berhasil diupdate']);
        } catch (\Exception $e) {
            // Tampilkan pesan kesalahan
            return redirect()->back()->with(['warning' => 'Terjadi kesalahan inputan.']);
        }
    }

    public function marbout_hapus($id_marbout)
    {
        $delete = DB::table('tbl_marbout')->where('id_marbout', $id_marbout)->delete();
        if ($delete) {
            return Redirect::back()->with(['success' => 'Data Berhasil Dihapus']);
        } else {
            return Redirect::back()->with(['warning' => 'Data Gagal Dihapus']);
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
