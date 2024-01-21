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


    public function marbout_anak()
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
        return view('marbout.marbout_anak', compact('tbl_userID', 'tbl_marbout'));
    }

    public function marbout_tambahdatakel2(Request $request)
    {
        $idmarbout = $request->idmarbout;
        $nik = $request->nik;
        $namadatakel = $request->namadatakel;
        $tempatlahir = $request->tempatlahir;
        $tgllahir = $request->tgllahir;
        $jenkel = $request->jenkel;
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
                $fotoFile->storeAs('public/uploads/marbout/datakel2/', $fotouser);
            } else {
                // Jika tidak ada file foto diupload, beri nilai default atau sesuaikan dengan kebutuhan Anda
                $fotouser = 'preview.png'; // Ganti dengan nama file default yang Anda inginkan
            }


            $data = [
                'id_marbout' => $idmarbout,
                'nik2' => $nik,
                'namadatakel2' => $namadatakel,
                'pendidikan2' => $pendidikan,
                'pekerjaan2' => $pekerjaan,
                'status_hub2' => $statushub,
                'tempat_lahir2' => $tempatlahir,
                'tgl_lahir2' => $tgllahir,
                'jenkel2' => $jenkel,
                'foto2' => $fotouser,

            ];

            $simpan = DB::table('marbout_datakel2')->insert($data);
            if ($simpan) {
                return redirect()->back()->with(['success' => 'Data berhasil disimpan']);
            }
        } catch (\Exception $e) {
            // Tampilkan pesan kesalahan
            return redirect()->back()->with(['warning' => 'Terjadi kesalahan input data']);
        }
    }

    public function marbout_orangtua()
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
        return view('marbout.marbout_orangtua', compact('tbl_userID', 'tbl_marbout'));
    }

    public function marbout_tambahdatakel3(Request $request)
    {
        $idmarbout = $request->idmarbout;
        $nik = $request->nik;
        $namadatakel = $request->namadatakel;
        $tempatlahir = $request->tempatlahir;
        $tgllahir = $request->tgllahir;
        $jenkel = $request->jenkel;
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
                $fotoFile->storeAs('public/uploads/marbout/datakel3/', $fotouser);
            } else {
                // Jika tidak ada file foto diupload, beri nilai default atau sesuaikan dengan kebutuhan Anda
                $fotouser = 'preview.png'; // Ganti dengan nama file default yang Anda inginkan
            }


            $data = [
                'id_marbout' => $idmarbout,
                'nik3' => $nik,
                'namadatakel3' => $namadatakel,
                'pendidikan3' => $pendidikan,
                'pekerjaan3' => $pekerjaan,
                'status_hub3' => $statushub,
                'tempat_lahir3' => $tempatlahir,
                'tgl_lahir3' => $tgllahir,
                'jenkel3' => $jenkel,
                'foto3' => $fotouser,

            ];

            $simpan = DB::table('marbout_datakel3')->insert($data);
            if ($simpan) {
                return redirect()->back()->with(['success' => 'Data berhasil disimpan']);
            }
        } catch (\Exception $e) {
            // Tampilkan pesan kesalahan
            return redirect()->back()->with(['warning' => 'Terjadi kesalahan input data']);
        }
    }

    public function marbout_sekolah()
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
        return view('marbout.marbout_sekolah', compact('tbl_userID', 'tbl_marbout'));
    }

    public function marbout_tambahsekolah(Request $request)
    {
        $idmarbout = $request->idmarbout;
        $tingkat = $request->tingkat;
        $namasekolah = $request->namasekolah;
        $lokasi = $request->lokasi;
        $jurusan = $request->jurusan;
        $nomorijazah = $request->nomorijazah;
        $tglijazah = $request->tglijazah;
        $namakepsek = $request->namakepsek;

        try {
            $data = [
                'id_marbout' => $idmarbout,
                'tingkat' => $tingkat,
                'namasekolah' => $namasekolah,
                'lokasi' => $lokasi,
                'jurusan' => $jurusan,
                'nomorijazah' => $nomorijazah,
                'tgl_ijazah' => $tglijazah,
                'namakepsek' => $namakepsek,
            ];

            $simpan = DB::table('marbout_sekolah')->insert($data);
            if ($simpan) {
                return redirect()->back()->with(['success' => 'Data berhasil disimpan']);
            }
        } catch (\Exception $e) {
            // Tampilkan pesan kesalahan
            return redirect()->back()->with(['warning' => 'Terjadi kesalahan input data']);
        }
    }


    public function marbout_bahasa()
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
        return view('marbout.marbout_bahasa', compact('tbl_userID', 'tbl_marbout'));
    }

    public function marbout_tambahbahasa(Request $request)
    {
        $idmarbout = $request->idmarbout;
        $jenisbahasa = $request->jenisbahasa;
        $bahasa = $request->bahasa;
        $kemampuan = $request->kemampuan;

        try {
            $data = [
                'id_marbout' => $idmarbout,
                'jenisbahasa' => $jenisbahasa,
                'bahasa' => $bahasa,
                'kemampuan' => $kemampuan,
            ];

            $simpan = DB::table('marbout_bahasa')->insert($data);
            if ($simpan) {
                return redirect()->back()->with(['success' => 'Data berhasil disimpan']);
            }
        } catch (\Exception $e) {
            // Tampilkan pesan kesalahan
            return redirect()->back()->with(['warning' => 'Terjadi kesalahan input data']);
        }
    }

    public function marbout_jabatan()
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

        $tbl_katjabatan = DB::table('marbout_kategori_jabatan')->get();
        $tbl_kateselon = DB::table('marbout_kategori_eselon')->get();

        return view('marbout.marbout_jabatan', compact('tbl_userID', 'tbl_marbout', 'tbl_katjabatan', 'tbl_kateselon'));
    }

    public function marbout_tambahjabatan(Request $request)
    {
        $idmarbout = $request->idmarbout;
        $nomorsk = $request->nomorsk;
        $tglsk = $request->tglsk;
        $namajabatan = $request->namajabatan;
        $namaeselon = $request->namaeselon;

        // Validasi untuk file yang diupload
        $request->validate([
            'foto' => 'image|mimes:png,jpg,jpeg,pdf|max:2024'
        ]);

        try {

            // Periksa apakah file foto diupload
            if ($request->hasFile('foto')) {
                $fotoFile = $request->file('foto');
                $fotouser = substr(hash('sha256', time()), 0, 25) . '.' . $fotoFile->getClientOriginalExtension();
                $fotoFile->storeAs('public/uploads/marbout/jabatan/', $fotouser);
            } else {
                // Jika tidak ada file foto diupload, beri nilai default atau sesuaikan dengan kebutuhan Anda
                $fotouser = 'preview.png'; // Ganti dengan nama file default yang Anda inginkan
            }

            $data = [
                'id_marbout' => $idmarbout,
                'nosk_jabatan' => $nomorsk,
                'tglsk_jabatan' => $tglsk,
                'filesk_jabatan' => $fotouser,
                'id_katjabatan' => $namajabatan,
                'id_kateselon' => $namaeselon,
            ];

            $simpan = DB::table('marbout_jabatan')->insert($data);
            if ($simpan) {
                return redirect()->back()->with(['success' => 'Data berhasil disimpan']);
            }
        } catch (\Exception $e) {
            // Tampilkan pesan kesalahan
            return redirect()->back()->with(['warning' => 'Terjadi kesalahan input data']);
        }
    }

    public function marbout_tambahkatjabatan(Request $request)
    {
        $namakategorijabatanmodal = $request->namakategorijabatanmodal;

        try {
            $data = [
                'namajabatan' => $namakategorijabatanmodal,
            ];

            $simpan = DB::table('marbout_kategori_jabatan')->insert($data);
            if ($simpan) {
                return redirect()->back()->with(['success' => 'Data berhasil disimpan']);
            }
        } catch (\Exception $e) {
            // Tampilkan pesan kesalahan
            return redirect()->back()->with(['warning' => 'Terjadi kesalahan input data']);
        }
    }

    public function marbout_tambahkateselon(Request $request)
    {
        $namakategorieselonmodal = $request->namakategorieselonmodal;

        try {
            $data = [
                'namaeselon' => $namakategorieselonmodal,
            ];

            $simpan = DB::table('marbout_kategori_eselon')->insert($data);
            if ($simpan) {
                return redirect()->back()->with(['success' => 'Data berhasil disimpan']);
            }
        } catch (\Exception $e) {
            // Tampilkan pesan kesalahan
            return redirect()->back()->with(['warning' => 'Terjadi kesalahan input data']);
        }
    }

    public function marbout_penugasan()
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
        return view('marbout.marbout_penugasan', compact('tbl_userID', 'tbl_marbout'));
    }

    public function marbout_tambahpenugasan(Request $request)
    {
        $idmarbout = $request->idmarbout;
        $tempatpenugasan = $request->tempatpenugasan;
        $tahunpenugasan = $request->tahunpenugasan;
        $lamapenugasan = $request->lamapenugasan;
        $keteranganpenugasan = $request->keteranganpenugasan;

        try {
            $data = [
                'id_marbout' => $idmarbout,
                'tempat_penugasan' => $tempatpenugasan,
                'tahun_penugasan' => $tahunpenugasan,
                'lama_penugasan' => $lamapenugasan,
                'keterangan_penugasan' => $keteranganpenugasan,
            ];

            $simpan = DB::table('marbout_penugasan')->insert($data);
            if ($simpan) {
                return redirect()->back()->with(['success' => 'Data berhasil disimpan']);
            }
        } catch (\Exception $e) {
            // Tampilkan pesan kesalahan
            return redirect()->back()->with(['warning' => 'Terjadi kesalahan input data']);
        }
    }

    public function marbout_seminar()
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
        return view('marbout.marbout_seminar', compact('tbl_userID', 'tbl_marbout'));
    }

    public function marbout_tambahseminar(Request $request)
    {
        $idmarbout = $request->idmarbout;
        $namaseminar = $request->namaseminar;
        $tempatseminar = $request->tempatseminar;
        $penyelenggara = $request->penyelenggara;
        $tglseminar = $request->tglseminar;


        // Validasi untuk file yang diupload
        $request->validate([
            'foto' => 'image|mimes:png,jpg,jpeg,pdf|max:2024'
        ]);

        try {

            // Periksa apakah file foto diupload
            if ($request->hasFile('foto')) {
                $fotoFile = $request->file('foto');
                $fotouser = substr(hash('sha256', time()), 0, 25) . '.' . $fotoFile->getClientOriginalExtension();
                $fotoFile->storeAs('public/uploads/marbout/seminar/', $fotouser);
            } else {
                // Jika tidak ada file foto diupload, beri nilai default atau sesuaikan dengan kebutuhan Anda
                $fotouser = 'preview.png'; // Ganti dengan nama file default yang Anda inginkan
            }
            $data = [
                'id_marbout' => $idmarbout,
                'nama_seminar' => $namaseminar,
                'tempat_seminar' => $tempatseminar,
                'penyelenggara_seminar' => $penyelenggara,
                'tgl_seminar' => $tglseminar,
                'tgl_seminar' => $tglseminar,
                'file_seminar' => $fotouser,
            ];

            $simpan = DB::table('marbout_seminar')->insert($data);
            if ($simpan) {
                return redirect()->back()->with(['success' => 'Data berhasil disimpan']);
            }
        } catch (\Exception $e) {
            // Tampilkan pesan kesalahan
            return redirect()->back()->with(['warning' => 'Terjadi kesalahan input data']);
        }
    }

    public function marbout_penghargaan()
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
        return view('marbout.marbout_penghargaan', compact('tbl_userID', 'tbl_marbout'));
    }

    public function marbout_tambahpenghargaan(Request $request)
    {
        $idmarbout = $request->idmarbout;
        $namapenghargaan = $request->namapenghargaan;
        $tahunpenghargaan = $request->tahunpenghargaan;
        $instansipenghargaan = $request->instansipenghargaan;

        // Validasi untuk file yang diupload
        $request->validate([
            'foto' => 'image|mimes:png,jpg,jpeg,pdf|max:2024'
        ]);

        try {

            // Periksa apakah file foto diupload
            if ($request->hasFile('foto')) {
                $fotoFile = $request->file('foto');
                $fotouser = substr(hash('sha256', time()), 0, 25) . '.' . $fotoFile->getClientOriginalExtension();
                $fotoFile->storeAs('public/uploads/marbout/penghargaan/', $fotouser);
            } else {
                // Jika tidak ada file foto diupload, beri nilai default atau sesuaikan dengan kebutuhan Anda
                $fotouser = 'preview.png'; // Ganti dengan nama file default yang Anda inginkan
            }
            $data = [
                'id_marbout' => $idmarbout,
                'nama_penghargaan' => $namapenghargaan,
                'tahun_penghargaan' => $tahunpenghargaan,
                'instansi_penghargaan' => $instansipenghargaan,
                'file_penghargaan' => $fotouser,
            ];

            $simpan = DB::table('marbout_penghargaan')->insert($data);
            if ($simpan) {
                return redirect()->back()->with(['success' => 'Data berhasil disimpan']);
            }
        } catch (\Exception $e) {
            // Tampilkan pesan kesalahan
            return redirect()->back()->with(['warning' => 'Terjadi kesalahan input data']);
        }
    }

    public function marbout_pelanggaran()
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
        return view('marbout.marbout_pelanggaran', compact('tbl_userID', 'tbl_marbout'));
    }

    public function marbout_tambahpelanggaran(Request $request)
    {
        $idmarbout = $request->idmarbout;
        $namapelanggaran = $request->namapelanggaran;
        $nomorpelanggaran = $request->nomorpelanggaran;
        $tglpelanggaran = $request->tglpelanggaran;
        $keteranganpelanggaran = $request->keteranganpelanggaran;

        // Validasi untuk file yang diupload
        $request->validate([
            'foto' => 'image|mimes:png,jpg,jpeg,pdf|max:2024'
        ]);

        try {

            // Periksa apakah file foto diupload
            if ($request->hasFile('foto')) {
                $fotoFile = $request->file('foto');
                $fotouser = substr(hash('sha256', time()), 0, 25) . '.' . $fotoFile->getClientOriginalExtension();
                $fotoFile->storeAs('public/uploads/marbout/pelanggaran/', $fotouser);
            } else {
                // Jika tidak ada file foto diupload, beri nilai default atau sesuaikan dengan kebutuhan Anda
                $fotouser = 'preview.png'; // Ganti dengan nama file default yang Anda inginkan
            }
            $data = [
                'id_marbout' => $idmarbout,
                'nama_pelanggaran' => $namapelanggaran,
                'no_pelanggaran' => $nomorpelanggaran,
                'tgl_pelanggaran' => $tglpelanggaran,
                'keterangan_pelanggaran' => $keteranganpelanggaran,
                'file_pelanggaran' => $fotouser,
            ];

            $simpan = DB::table('marbout_pelanggaran')->insert($data);
            if ($simpan) {
                return redirect()->back()->with(['success' => 'Data berhasil disimpan']);
            }
        } catch (\Exception $e) {
            // Tampilkan pesan kesalahan
            return redirect()->back()->with(['warning' => 'Terjadi kesalahan input data']);
        }
    }
}
