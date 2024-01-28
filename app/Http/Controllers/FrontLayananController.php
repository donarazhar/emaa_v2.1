<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

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

    // PENGISLAMAN
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

    // KONSULTASI
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

    // KATEGORI LAYANAN
    public function frontlayanan_kategorilayanan()
    {
        $email = Auth::guard('karyawan')->user()->email;
        $id_user = DB::table('tbl_user')->select('tbl_user.id_user')->where('email', $email)->first();
        $tbl_userID = DB::table('tbl_user')
            ->select('tbl_user.*', 'tbl_marbout.*', 'nama_unitkerja')
            ->leftJoin('tbl_marbout', 'tbl_user.id_user', '=', 'tbl_marbout.id_user')
            ->leftJoin('tbl_unitkerja', 'tbl_marbout.id_unitkerja', '=', 'tbl_unitkerja.id_unitkerja')
            ->where('tbl_user.id_user', $id_user->id_user) // Menggunakan $id_user->id_user
            ->first();

        $tbl_katlayanan = DB::table('tbl_kategorilayanan')->get();
        $tbl_jeniskonsultasi = DB::table('tbl_jeniskonsultasi')->get();
        $tbl_jenispengislaman = DB::table('tbl_jenispengislaman')->get();

        return view('frontlayanan.layanan_kategorilayanan', compact('tbl_userID', 'tbl_katlayanan', 'tbl_jeniskonsultasi', 'tbl_jenispengislaman'));
    }

    public function frontlayanan_tambahkategorilayanan(Request $request)
    {
        $namakategorilayananmodal = $request->namakategorilayananmodal;
        $deksripsikategorilayananmodal = $request->deksripsikategorilayananmodal;

        try {
            $data = [
                'nama_kategorilayanan' => $namakategorilayananmodal,
                'deskripsi' => $deksripsikategorilayananmodal,

            ];

            $simpan = DB::table('tbl_kategorilayanan')->insert($data);
            if ($simpan) {
                return redirect()->back()->with(['success' => 'Data berhasil disimpan']);
            }
        } catch (\Exception $e) {
            // Tampilkan pesan kesalahan
            return redirect()->back()->with(['warning' => 'Terjadi kesalahan input data']);
        }
    }

    public function frontlayanan_editkategorilayanan(Request $request)
    {
        $email = Auth::guard('karyawan')->user()->email;
        $id_user = DB::table('tbl_user')->select('tbl_user.id_user')->where('email', $email)->first();
        $tbl_userID = DB::table('tbl_user')
            ->select('tbl_user.*', 'tbl_marbout.*', 'nama_unitkerja')
            ->leftJoin('tbl_marbout', 'tbl_user.id_user', '=', 'tbl_marbout.id_user')
            ->leftJoin('tbl_unitkerja', 'tbl_marbout.id_unitkerja', '=', 'tbl_unitkerja.id_unitkerja')
            ->where('tbl_user.id_user', $id_user->id_user) // Menggunakan $id_user->id_user
            ->first();

        $tbl_kategorilayananID = DB::table('tbl_kategorilayanan')
            ->where('id_kategorilayanan', $request->id)
            ->first();

        return view('frontlayanan.layanan_editkategorilayanan', compact('tbl_userID', 'tbl_kategorilayananID'));
    }

    public function frontlayanan_updatekategorilayanan($id_kategorilayanan, Request $request)
    {
        // Ambil data dari tabel tbl_marbout dengan ID yang diberikan
        $kategorilayanan = DB::table('tbl_kategorilayanan')->where('id_kategorilayanan', $id_kategorilayanan)->first();

        if (!$kategorilayanan) {
            // Handle jika data tidak ditemukan
            return redirect()->back()->with(['warning' => 'Data tidak ditemukan.']);
        }

        $namakategorilayananmodal = $request->namakategorilayananmodal;
        $deksripsikategorilayananmodal = $request->deksripsikategorilayananmodal;

        try {
            $data = [

                'nama_kategorilayanan' => $namakategorilayananmodal,
                'deskripsi' => $deksripsikategorilayananmodal,
            ];

            $update = DB::table('tbl_kategorilayanan')->where('id_kategorilayanan', $id_kategorilayanan)->update($data);
            if ($update) {
                return redirect()->back()->with(['success' => 'Data berhasil diupdate']);
            }
        } catch (\Exception $e) {
            // Tampilkan pesan kesalahan
            return redirect()->back()->with(['warning' => 'Terjadi kesalahan input data']);
        }
    }

    public function frontlayanan_hapuskategorilayanan($id_kategorilayanan)
    {
        $delete = DB::table('tbl_kategorilayanan')->where('id_kategorilayanan', $id_kategorilayanan)->delete();
        if ($delete) {
            return Redirect::back()->with(['success' => 'Data Berhasil Dihapus']);
        } else {
            return Redirect::back()->with(['warning' => 'Data Gagal Dihapus']);
        }
    }

    // JENIS KONSULTASI
    public function frontlayanan_tambahjeniskonsultasi(Request $request)
    {
        $namajeniskonsultasimodal = $request->namajeniskonsultasimodal;
        $deksripsijeniskonsultasimodal = $request->deksripsijeniskonsultasimodal;

        try {
            $data = [
                'nama_jeniskonsultasi' => $namajeniskonsultasimodal,
                'deskripsi' => $deksripsijeniskonsultasimodal,

            ];

            $simpan = DB::table('tbl_jeniskonsultasi')->insert($data);
            if ($simpan) {
                return redirect()->back()->with(['success' => 'Data berhasil disimpan']);
            }
        } catch (\Exception $e) {
            // Tampilkan pesan kesalahan
            return redirect()->back()->with(['warning' => 'Terjadi kesalahan input data']);
        }
    }

    public function frontlayanan_editjeniskonsultasi(Request $request)
    {
        $email = Auth::guard('karyawan')->user()->email;
        $id_user = DB::table('tbl_user')->select('tbl_user.id_user')->where('email', $email)->first();
        $tbl_userID = DB::table('tbl_user')
            ->select('tbl_user.*', 'tbl_marbout.*', 'nama_unitkerja')
            ->leftJoin('tbl_marbout', 'tbl_user.id_user', '=', 'tbl_marbout.id_user')
            ->leftJoin('tbl_unitkerja', 'tbl_marbout.id_unitkerja', '=', 'tbl_unitkerja.id_unitkerja')
            ->where('tbl_user.id_user', $id_user->id_user) // Menggunakan $id_user->id_user
            ->first();

        $tbl_jeniskonsultasiID = DB::table('tbl_jeniskonsultasi')
            ->where('id_jeniskonsultasi', $request->id)
            ->first();

        return view('frontlayanan.layanan_editjeniskonsultasi', compact('tbl_userID', 'tbl_jeniskonsultasiID'));
    }

    public function frontlayanan_updatejeniskonsultasi($id_jeniskonsultasi, Request $request)
    {
        // Ambil data dari tabel tbl_marbout dengan ID yang diberikan
        $jeniskonsultasi = DB::table('tbl_jeniskonsultasi')->where('id_jeniskonsultasi', $id_jeniskonsultasi)->first();

        if (!$jeniskonsultasi) {
            // Handle jika data tidak ditemukan
            return redirect()->back()->with(['warning' => 'Data tidak ditemukan.']);
        }

        $namajeniskonsultasimodal = $request->namajeniskonsultasimodal;
        $deksripsijeniskonsultasimodal = $request->deksripsijeniskonsultasimodal;

        try {
            $data = [

                'nama_jeniskonsultasi' => $namajeniskonsultasimodal,
                'deskripsi' => $deksripsijeniskonsultasimodal,
            ];

            $update = DB::table('tbl_jeniskonsultasi')->where('id_jeniskonsultasi', $id_jeniskonsultasi)->update($data);
            if ($update) {
                return redirect()->back()->with(['success' => 'Data berhasil diupdate']);
            }
        } catch (\Exception $e) {
            // Tampilkan pesan kesalahan
            return redirect()->back()->with(['warning' => 'Terjadi kesalahan input data']);
        }
    }

    public function frontlayanan_hapusjeniskonsultasi($id_jeniskonsultasi)
    {
        $delete = DB::table('tbl_jeniskonsultasi')->where('id_jeniskonsultasi', $id_jeniskonsultasi)->delete();
        if ($delete) {
            return Redirect::back()->with(['success' => 'Data Berhasil Dihapus']);
        } else {
            return Redirect::back()->with(['warning' => 'Data Gagal Dihapus']);
        }
    }


    // JENIS PENGISLAMAN
    public function frontlayanan_tambahjenispengislaman(Request $request)
    {
        $namajenispengislamanmodal = $request->namajenispengislamanmodal;
        $deksripsijenispengislamanmodal = $request->deksripsijenispengislamanmodal;

        try {
            $data = [
                'nama_jenispengislaman' => $namajenispengislamanmodal,
                'deskripsi' => $deksripsijenispengislamanmodal,

            ];

            $simpan = DB::table('tbl_jenispengislaman')->insert($data);
            if ($simpan) {
                return redirect()->back()->with(['success' => 'Data berhasil disimpan']);
            }
        } catch (\Exception $e) {
            // Tampilkan pesan kesalahan
            return redirect()->back()->with(['warning' => 'Terjadi kesalahan input data']);
        }
    }

    public function frontlayanan_editjenispengislaman(Request $request)
    {
        $email = Auth::guard('karyawan')->user()->email;
        $id_user = DB::table('tbl_user')->select('tbl_user.id_user')->where('email', $email)->first();
        $tbl_userID = DB::table('tbl_user')
            ->select('tbl_user.*', 'tbl_marbout.*', 'nama_unitkerja')
            ->leftJoin('tbl_marbout', 'tbl_user.id_user', '=', 'tbl_marbout.id_user')
            ->leftJoin('tbl_unitkerja', 'tbl_marbout.id_unitkerja', '=', 'tbl_unitkerja.id_unitkerja')
            ->where('tbl_user.id_user', $id_user->id_user) // Menggunakan $id_user->id_user
            ->first();

        $tbl_jenispengislamanID = DB::table('tbl_jenispengislaman')
            ->where('id_jenispengislaman', $request->id)
            ->first();

        return view('frontlayanan.layanan_editjenispengislaman', compact('tbl_userID', 'tbl_jenispengislamanID'));
    }

    public function frontlayanan_updatejenispengislaman($id_jenispengislaman, Request $request)
    {
        // Ambil data dari tabel tbl_marbout dengan ID yang diberikan
        $jenispengislaman = DB::table('tbl_jenispengislaman')->where('id_jenispengislaman', $id_jenispengislaman)->first();

        if (!$jenispengislaman) {
            // Handle jika data tidak ditemukan
            return redirect()->back()->with(['warning' => 'Data tidak ditemukan.']);
        }

        $namajenispengislamanmodal = $request->namajenispengislamanmodal;
        $deksripsijenispengislamanmodal = $request->deksripsijenispengislamanmodal;

        try {
            $data = [

                'nama_jenispengislaman' => $namajenispengislamanmodal,
                'deskripsi' => $deksripsijenispengislamanmodal,
            ];

            $update = DB::table('tbl_jenispengislaman')->where('id_jenispengislaman', $id_jenispengislaman)->update($data);
            if ($update) {
                return redirect()->back()->with(['success' => 'Data berhasil diupdate']);
            }
        } catch (\Exception $e) {
            // Tampilkan pesan kesalahan
            return redirect()->back()->with(['warning' => 'Terjadi kesalahan input data']);
        }
    }

    public function frontlayanan_hapusjenispengislaman($id_jenispengislaman)
    {
        $delete = DB::table('tbl_jenispengislaman')->where('id_jenispengislaman', $id_jenispengislaman)->delete();
        if ($delete) {
            return Redirect::back()->with(['success' => 'Data Berhasil Dihapus']);
        } else {
            return Redirect::back()->with(['warning' => 'Data Gagal Dihapus']);
        }
    }

    // DATA IMAM
    public function frontlayanan_dataimam()
    {
        $email = Auth::guard('karyawan')->user()->email;
        $id_user = DB::table('tbl_user')->select('tbl_user.id_user')->where('email', $email)->first();
        $tbl_userID = DB::table('tbl_user')
            ->select('tbl_user.*', 'tbl_marbout.*', 'nama_unitkerja')
            ->leftJoin('tbl_marbout', 'tbl_user.id_user', '=', 'tbl_marbout.id_user')
            ->leftJoin('tbl_unitkerja', 'tbl_marbout.id_unitkerja', '=', 'tbl_unitkerja.id_unitkerja')
            ->where('tbl_user.id_user', $id_user->id_user) // Menggunakan $id_user->id_user
            ->first();

        $tbl_imam = DB::table('tbl_imam')->get();

        return view('frontlayanan.layanan_dataimam', compact('tbl_userID', 'tbl_imam'));
    }

    public function frontlayanan_tambahdataimam(Request $request)
    {
        $namamodalimam = $request->namamodalimam;
        $nohpmodalimam = $request->nohpmodalimam;
        $keteranganmodalimam = $request->keteranganmodalimam;

        try {
            $data = [
                'nama_imam' => $namamodalimam,
                'nohp_imam' => $nohpmodalimam,
                'keterangan' => $keteranganmodalimam,

            ];

            $simpan = DB::table('tbl_imam')->insert($data);
            if ($simpan) {
                return redirect()->back()->with(['success' => 'Data berhasil disimpan']);
            }
        } catch (\Exception $e) {
            // Tampilkan pesan kesalahan
            return redirect()->back()->with(['warning' => 'Terjadi kesalahan input data']);
        }
    }

    public function frontlayanan_editdataimam(Request $request)
    {
        $email = Auth::guard('karyawan')->user()->email;
        $id_user = DB::table('tbl_user')->select('tbl_user.id_user')->where('email', $email)->first();
        $tbl_userID = DB::table('tbl_user')
            ->select('tbl_user.*', 'tbl_marbout.*', 'nama_unitkerja')
            ->leftJoin('tbl_marbout', 'tbl_user.id_user', '=', 'tbl_marbout.id_user')
            ->leftJoin('tbl_unitkerja', 'tbl_marbout.id_unitkerja', '=', 'tbl_unitkerja.id_unitkerja')
            ->where('tbl_user.id_user', $id_user->id_user) // Menggunakan $id_user->id_user
            ->first();

        $tbl_imamID = DB::table('tbl_imam')
            ->where('id_imam', $request->id)
            ->first();

        return view('frontlayanan.layanan_editdataimam', compact('tbl_userID', 'tbl_imamID'));
    }

    public function frontlayanan_updatedataimam($id_imam, Request $request)
    {
        // Ambil data dari tabel tbl_marbout dengan ID yang diberikan
        $imam = DB::table('tbl_imam')->where('id_imam', $id_imam)->first();

        if (!$imam) {
            // Handle jika data tidak ditemukan
            return redirect()->back()->with(['warning' => 'Data tidak ditemukan.']);
        }

        $namamodalimam = $request->namamodalimam;
        $nohpmodalimam = $request->nohpmodalimam;
        $keteranganmodalimam = $request->keteranganmodalimam;
        try {
            $data = [
                'nama_imam' => $namamodalimam,
                'nohp_imam' => $nohpmodalimam,
                'keterangan' => $keteranganmodalimam,
            ];

            $update = DB::table('tbl_imam')->where('id_imam', $id_imam)->update($data);
            if ($update) {
                return redirect()->back()->with(['success' => 'Data berhasil diupdate']);
            }
        } catch (\Exception $e) {
            // Tampilkan pesan kesalahan
            return redirect()->back()->with(['warning' => 'Terjadi kesalahan input data']);
        }
    }

    public function frontlayanan_hapusdataimam($id_imam)
    {
        $delete = DB::table('tbl_imam')->where('id_imam', $id_imam)->delete();
        if ($delete) {
            return Redirect::back()->with(['success' => 'Data Berhasil Dihapus']);
        } else {
            return Redirect::back()->with(['warning' => 'Data Gagal Dihapus']);
        }
    }


    public function frontlayanan_datalayanan()
    {
        $email = Auth::guard('karyawan')->user()->email;
        $id_user = DB::table('tbl_user')->select('tbl_user.id_user')->where('email', $email)->first();
        $tbl_userID = DB::table('tbl_user')
            ->select('tbl_user.*', 'tbl_marbout.*', 'nama_unitkerja')
            ->leftJoin('tbl_marbout', 'tbl_user.id_user', '=', 'tbl_marbout.id_user')
            ->leftJoin('tbl_unitkerja', 'tbl_marbout.id_unitkerja', '=', 'tbl_unitkerja.id_unitkerja')
            ->where('tbl_user.id_user', $id_user->id_user) // Menggunakan $id_user->id_user
            ->first();

        $tbl_tamu = DB::table('tbl_tamu')
            ->orderBy('tgl_tamu', 'DESC')
            ->get();

        $tbl_pengislaman = DB::table('tbl_sertifikatpengislaman')
            ->leftJoin('tbl_imam', 'tbl_sertifikatpengislaman.id_imam', '=', 'tbl_imam.id_imam')
            ->select('tbl_sertifikatpengislaman.*', 'nama_imam')
            ->orderBy('id_sp', 'DESC')
            ->get();

        $tbl_konsultasi = DB::table('tbl_formulirkonsultasi')
            ->leftJoin('tbl_jeniskonsultasi', 'tbl_formulirkonsultasi.id_jeniskonsultasi', '=', 'tbl_jeniskonsultasi.id_jeniskonsultasi')
            ->leftJoin('tbl_imam', 'tbl_formulirkonsultasi.id_imam', '=', 'tbl_imam.id_imam')
            ->select('tbl_formulirkonsultasi.*', 'nama_imam', 'nama_jeniskonsultasi')
            ->orderBy('id_fk', 'DESC')
            ->get();

        return view('frontlayanan.layanan_datalayanan', compact('tbl_userID', 'tbl_tamu', 'tbl_pengislaman', 'tbl_konsultasi'));
    }
}
