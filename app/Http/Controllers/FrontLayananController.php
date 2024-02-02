<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Midtrans\Snap;

class FrontLayananController extends Controller
{
    public function frontlayanan_bukutamu()
    {
        return view('frontlayanan.layanan_bukutamu');
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
        return view('frontlayanan.layanan_pengislaman');
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
        // $email = Auth::guard('karyawan')->user()->email;
        // $id_user = DB::table('tbl_user')->select('tbl_user.id_user')->where('email', $email)->first();
        // $tbl_userID = DB::table('tbl_user')
        //     ->select('tbl_user.*', 'tbl_marbout.*', 'nama_unitkerja')
        //     ->leftJoin('tbl_marbout', 'tbl_user.id_user', '=', 'tbl_marbout.id_user')
        //     ->leftJoin('tbl_unitkerja', 'tbl_marbout.id_unitkerja', '=', 'tbl_unitkerja.id_unitkerja')
        //     ->where('tbl_user.id_user', $id_user->id_user) // Menggunakan $id_user->id_user
        //     ->first();

        $tbl_jadwalkonsultasi = DB::table('tbl_formulirkonsultasi')
            ->leftJoin('tbl_imam', 'tbl_formulirkonsultasi.id_imam', '=', 'tbl_imam.id_imam')
            ->leftJoin('tbl_jeniskonsultasi', 'tbl_formulirkonsultasi.id_jeniskonsultasi', '=', 'tbl_jeniskonsultasi.id_jeniskonsultasi')
            ->select('tbl_formulirkonsultasi.*', 'tbl_imam.nama_imam', 'tbl_jeniskonsultasi.nama_jeniskonsultasi')
            ->orderBy('id_fk', 'DESC')
            ->get();

        // return view('frontlayanan.layanan_konsultasi', compact('tbl_userID', 'tbl_jadwalkonsultasi'));
        return view('frontlayanan.layanan_konsultasi', compact('tbl_jadwalkonsultasi'));
    }
    public function frontlayanan_jadwalkonsultasi()
    {
        $email = Auth::guard('user')->user()->email;
        $id_jamaah = DB::table('tbl_jamaah')->select('tbl_jamaah.id_user')->where('email', $email)->first();
        $tbl_jamaahID = DB::table('tbl_jamaah')
            ->select('tbl_jamaah.*')
            ->where('tbl_jamaah.id_user', $id_jamaah->id_user)
            ->first();

        $tbl_jadwalkonsultasi = DB::table('tbl_formulirkonsultasi')
            ->leftJoin('tbl_imam', 'tbl_formulirkonsultasi.id_imam', '=', 'tbl_imam.id_imam')
            ->leftJoin('tbl_jeniskonsultasi', 'tbl_formulirkonsultasi.id_jeniskonsultasi', '=', 'tbl_jeniskonsultasi.id_jeniskonsultasi')
            ->select('tbl_formulirkonsultasi.*', 'tbl_imam.nama_imam', 'tbl_jeniskonsultasi.nama_jeniskonsultasi')
            ->orderBy('id_fk', 'DESC')
            ->get();

        // return view('frontlayanan.layanan_konsultasi', compact('tbl_userID', 'tbl_jadwalkonsultasi'));
        return view('user.user_jadwalkonsultasi', compact('tbl_jadwalkonsultasi', 'tbl_jamaahID'));
    }
    public function frontlayanan_jadwalpengislaman()
    {
        $email = Auth::guard('user')->user()->email;
        $id_jamaah = DB::table('tbl_jamaah')->select('tbl_jamaah.id_user')->where('email', $email)->first();
        $tbl_jamaahID = DB::table('tbl_jamaah')
            ->select('tbl_jamaah.*')
            ->where('tbl_jamaah.id_user', $id_jamaah->id_user)
            ->first();

        $tbl_jadwalkonsultasi = DB::table('tbl_formulirkonsultasi')
            ->leftJoin('tbl_imam', 'tbl_formulirkonsultasi.id_imam', '=', 'tbl_imam.id_imam')
            ->leftJoin('tbl_jeniskonsultasi', 'tbl_formulirkonsultasi.id_jeniskonsultasi', '=', 'tbl_jeniskonsultasi.id_jeniskonsultasi')
            ->select('tbl_formulirkonsultasi.*', 'tbl_imam.nama_imam', 'tbl_jeniskonsultasi.nama_jeniskonsultasi')
            ->orderBy('id_fk', 'DESC')
            ->get();

        // return view('frontlayanan.layanan_konsultasi', compact('tbl_userID', 'tbl_jadwalkonsultasi'));
        return view('user.user_jadwalpengislaman', compact('tbl_jadwalkonsultasi', 'tbl_jamaahID'));
    }

    public function frontlayanan_tambahdatakonsultasi($id_fk, Request $request)
    {
        $namajamaah = $request->namajamaah;
        $ttljamaah = $request->ttljamaah;
        $emailjamaah = $request->emailjamaah;
        $nohpjamaah = $request->nohpjamaah;
        $jenkeljamaah = $request->jenkeljamaah;
        $alamat1jamaah = $request->alamat1jamaah;
        $alamat2jamaah = $request->alamat2jamaah;
        $pendidikanjamaah = $request->pendidikanjamaah;
        $pekerjaanjamaah = $request->pekerjaanjamaah;
        $deskripsijamaah = $request->deskripsijamaah;
        $status = 1;


        try {
            $data = [
                'nama_fk' => $namajamaah,
                'jenkel_fk' => $jenkeljamaah,
                'ttl_fk' => $ttljamaah,
                'alamat_fk' => $ttljamaah,
                'alamat2_fk' => $alamat1jamaah,
                'alamat2_fk' =>  $alamat2jamaah,
                'pekerjaan_fk' =>  $pekerjaanjamaah,
                'pendidikan_fk' =>  $pendidikanjamaah,
                'nohp_fk' =>  $nohpjamaah,
                'email_fk' =>  $emailjamaah,
                'deskripsi_fk' =>  $deskripsijamaah,
                'status' =>  $status

            ];

            $update = DB::table('tbl_formulirkonsultasi')->where('id_fk', $id_fk)->update($data);
            if ($update) {
                return redirect('/panel/dashboarduser')->with(['success' => 'Data berhasil disimpan']);
            }
        } catch (\Exception $e) {
            // Tampilkan pesan kesalahan
            return redirect('/panel/frontlayanan_konsultasi')->with(['warning' => 'Terjadi kesalahan input data']);
        }
    }

    // KONSULTASI
    public function user_daftarkonsultasi($id_fk, Request $request)
    {
        $email = Auth::guard('user')->user()->email;
        $id_jamaah = DB::table('tbl_jamaah')->select('tbl_jamaah.id_user')->where('email', $email)->first();
        $tbl_jamaahID = DB::table('tbl_jamaah')
            ->select('tbl_jamaah.*')
            ->where('tbl_jamaah.id_user', $id_jamaah->id_user) // Menggunakan $id_user->id_user
            ->first();

        $tbl_daftarkonsultasiID = DB::table('tbl_formulirkonsultasi')
            ->leftJoin('tbl_imam', 'tbl_formulirkonsultasi.id_imam', '=', 'tbl_imam.id_imam')
            ->leftJoin('tbl_jeniskonsultasi', 'tbl_formulirkonsultasi.id_jeniskonsultasi', '=', 'tbl_jeniskonsultasi.id_jeniskonsultasi')
            ->select('tbl_formulirkonsultasi.*', 'tbl_imam.nama_imam', 'tbl_jeniskonsultasi.nama_jeniskonsultasi')
            ->where('id_fk', $id_fk)
            ->first();

        return view('user.user_daftarkonsultasi', compact('tbl_daftarkonsultasiID', 'tbl_jamaahID'));
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

        $tbl_imam = DB::table('tbl_imam')->get();
        $tbl_jeniskonsultasi = DB::table('tbl_jeniskonsultasi')->get();

        return view('frontlayanan.layanan_datalayanan', compact('tbl_userID', 'tbl_tamu', 'tbl_pengislaman', 'tbl_konsultasi', 'tbl_imam', 'tbl_jeniskonsultasi'));
    }

    public function frontlayanan_editdatatamu(Request $request)
    {
        $email = Auth::guard('karyawan')->user()->email;
        $id_user = DB::table('tbl_user')->select('tbl_user.id_user')->where('email', $email)->first();
        $tbl_userID = DB::table('tbl_user')
            ->select('tbl_user.*', 'tbl_marbout.*', 'nama_unitkerja')
            ->leftJoin('tbl_marbout', 'tbl_user.id_user', '=', 'tbl_marbout.id_user')
            ->leftJoin('tbl_unitkerja', 'tbl_marbout.id_unitkerja', '=', 'tbl_unitkerja.id_unitkerja')
            ->where('tbl_user.id_user', $id_user->id_user) // Menggunakan $id_user->id_user
            ->first();

        $tbl_tamuID = DB::table('tbl_tamu')
            ->where('id_tamu', $request->id)
            ->first();

        return view('frontlayanan.layanan_editdatatamu', compact('tbl_userID', 'tbl_tamuID'));
    }

    public function frontlayanan_updatedatatamu($id_tamu, Request $request)
    {
        // Ambil data dari tabel tbl_marbout dengan ID yang diberikan
        $tamu = DB::table('tbl_tamu')->where('id_tamu', $id_tamu)->first();

        if (!$tamu) {
            // Handle jika data tidak ditemukan
            return redirect()->back()->with(['warning' => 'Data tidak ditemukan.']);
        }

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
            ];

            $update = DB::table('tbl_tamu')->where('id_tamu', $id_tamu)->update($data);
            if ($update) {
                return redirect()->back()->with(['success' => 'Data berhasil diupdate']);
            }
        } catch (\Exception $e) {
            // Tampilkan pesan kesalahan
            return redirect()->back()->with(['warning' => 'Terjadi kesalahan input data']);
        }
    }

    public function frontlayanan_hapusdatatamu($id_tamu)
    {
        $delete = DB::table('tbl_tamu')->where('id_tamu', $id_tamu)->delete();
        if ($delete) {
            return Redirect::back()->with(['success' => 'Data Berhasil Dihapus']);
        } else {
            return Redirect::back()->with(['warning' => 'Data Gagal Dihapus']);
        }
    }

    public function frontlayanan_editdatapengislaman(Request $request)
    {
        $email = Auth::guard('karyawan')->user()->email;
        $id_user = DB::table('tbl_user')->select('tbl_user.id_user')->where('email', $email)->first();
        $tbl_userID = DB::table('tbl_user')
            ->select('tbl_user.*', 'tbl_marbout.*', 'nama_unitkerja')
            ->leftJoin('tbl_marbout', 'tbl_user.id_user', '=', 'tbl_marbout.id_user')
            ->leftJoin('tbl_unitkerja', 'tbl_marbout.id_unitkerja', '=', 'tbl_unitkerja.id_unitkerja')
            ->where('tbl_user.id_user', $id_user->id_user) // Menggunakan $id_user->id_user
            ->first();

        $tbl_pengislamanID = DB::table('tbl_sertifikatpengislaman')
            ->leftJoin('tbl_imam', 'tbl_sertifikatpengislaman.id_imam', '=', 'tbl_imam.id_imam')
            ->leftJoin('tbl_jenispengislaman', 'tbl_sertifikatpengislaman.id_jenispengislaman', '=', 'tbl_jenispengislaman.id_jenispengislaman')
            ->where('id_sp', $request->id)
            ->first();

        $tbl_imam = DB::table('tbl_imam')->get();
        $tbl_jenispengislaman = DB::table('tbl_jenispengislaman')->get();

        return view('frontlayanan.layanan_editdatapengislaman', compact('tbl_userID', 'tbl_pengislamanID', 'tbl_imam', 'tbl_jenispengislaman'));
    }

    public function frontlayanan_updatedatapengislaman($id_sp, Request $request)
    {
        // Ambil data dari tabel tbl_marbout dengan ID yang diberikan
        $pengislaman = DB::table('tbl_sertifikatpengislaman')->where('id_sp', $id_sp)->first();

        if (!$pengislaman) {
            // Handle jika data tidak ditemukan
            return redirect()->back()->with(['warning' => 'Data tidak ditemukan.']);
        }

        $nospmodal = $request->nospmodal;
        $jamspmodal = $request->jamspmodal;
        $harispmodal = $request->harispmodal;
        $tglspmodal = $request->tglspmodal;
        $namaspmodal = $request->namaspmodal;

        $jenkelspmodal = $request->jenkelspmodal;
        $ttlspmodal = $request->ttlspmodal;
        $agamasemulaspmodal = $request->agamasemulaspmodal;
        $alamatspmodal = $request->alamatspmodal;
        $alamat2spmodal = $request->alamat2spmodal;
        $pekerjaanspmodal = $request->pekerjaanspmodal;
        $saksispmodal = $request->saksispmodal;
        $namabaruspmodal = $request->namabaruspmodal;

        $saksi2spmodal = $request->saksi2spmodal;
        $saksi3spmodal = $request->saksi3spmodal;
        $alasanspmodal = $request->alasanspmodal;
        $imamspmodal = $request->imamspmodal;
        $nohpspmodal = $request->nohpspmodal;
        $emailspmodal = $request->emailspmodal;
        $tglmasehispmodal = $request->tglmasehispmodal;
        $tahunmasehispmodal = $request->tahunmasehispmodal;

        $tglhijriyahspmodal = $request->tglhijriyahspmodal;
        $tahunhijriyahspmodal = $request->tahunhijriyahspmodal;
        $jenispengislamanmodal = $request->jenispengislamanmodal;

        try {
            $data = [
                'no_sp' => $nospmodal,
                'tgl_sp' => $tglspmodal,
                'hari_sp' => $harispmodal,
                'nama_sp' => $namaspmodal,
                'jenkel_sp' => $jenkelspmodal,

                'ttl_sp' => $ttlspmodal,
                'agamasemula_sp' => $agamasemulaspmodal,
                'pekerjaan_sp' => $pekerjaanspmodal,
                'alamat_sp' => $alamatspmodal,
                'alamat2_sp' => $alamat2spmodal,
                'jam_sp' => $jamspmodal,
                'namabaru_sp' => $namabaruspmodal,
                'tglmasehi_sp' => $tglmasehispmodal,
                'tahunmasehi_sp' => $tahunmasehispmodal,
                'tglhijriyah_sp' => $tglhijriyahspmodal,
                'tahunhijriyah_sp' => $tahunhijriyahspmodal,

                'id_imam' => $imamspmodal,
                'saksi_sp' => $saksispmodal,
                'saksi2_sp' => $saksi2spmodal,
                'saksi3_sp' => $saksi3spmodal,
                'alasan_sp' => $alasanspmodal,
                'nohp_sp' => $nohpspmodal,
                'email_sp' => $emailspmodal,
                'id_jenispengislaman' => $jenispengislamanmodal,

            ];

            $update = DB::table('tbl_sertifikatpengislaman')->where('id_sp', $id_sp)->update($data);
            if ($update) {
                return redirect()->back()->with(['success' => 'Data berhasil diupdate']);
            }
        } catch (\Exception $e) {
            // Tampilkan pesan kesalahan
            return redirect()->back()->with(['warning' => 'Terjadi kesalahan input data']);
        }
    }

    public function frontlayanan_hapusdatapengislaman($id_sp)
    {
        $delete = DB::table('tbl_sertifikatpengislaman')->where('id_sp', $id_sp)->delete();
        if ($delete) {
            return Redirect::back()->with(['success' => 'Data Berhasil Dihapus']);
        } else {
            return Redirect::back()->with(['warning' => 'Data Gagal Dihapus']);
        }
    }

    public function frontlayanan_cetaksp(Request $request)
    {
        $id = $request->id_sp;
        $cetaksp = DB::table('tbl_sertifikatpengislaman')->where('id_sp', $id)->first();

        return view('frontlayanan.layanan_cetaksp', compact('cetaksp'));
    }

    public function frontlayanan_tambahjadwalkonsultasi(Request $request)
    {
        $tglfkmodal = $request->tglfkmodal;
        $jamfkmodal = $request->jamfkmodal;
        $harifkmodal = $request->harifkmodal;
        $jeniskonsultasifkmodal = $request->jeniskonsultasifkmodal;
        $imamfkmodal = $request->imamfkmodal;

        try {
            $data = [
                'tgl_fk' => $tglfkmodal,
                'jam_fk' => $jamfkmodal,
                'hari_fk' => $harifkmodal,
                'id_jeniskonsultasi' => $jeniskonsultasifkmodal,
                'id_imam' => $imamfkmodal,

            ];

            $simpan = DB::table('tbl_formulirkonsultasi')->insert($data);
            if ($simpan) {
                return redirect()->back()->with(['success' => 'Data berhasil disimpan']);
            }
        } catch (\Exception $e) {
            // Tampilkan pesan kesalahan
            return redirect()->back()->with(['warning' => 'Terjadi kesalahan input data']);
        }
    }

    public function frontlayanan_infaq()
    {
        try {
            $email = Auth::guard('user')->user()->email;
            $id_jamaah = DB::table('tbl_jamaah')->select('tbl_jamaah.id_user')->where('email', $email)->first();
            $tbl_jamaahID = DB::table('tbl_jamaah')
                ->select('tbl_jamaah.*')
                ->where('tbl_jamaah.id_user', $id_jamaah->id_user)
                ->first();
            // Ambil data yang diperlukan dari tabel tbl_infaq
            $tbl_bayarDonasi = DB::table('tbl_infaq')->where('email', $email)->get();

            // Jika tabel masih kosong, set variabel $tbl_bayarDonasi ke koleksi kosong
            if ($tbl_bayarDonasi->isEmpty()) {
                $tbl_bayarDonasi = collect(); // Ubah ke koleksi kosong              
            }
            // Ambil data yang diperlukan dari tabel tbl_infaq
            $updatedData = DB::table('tbl_infaq')->where('email', $email)->first();

            // Periksa apakah data ada dan snap_token tidak null
            if (!$updatedData || is_null($updatedData->snap_token)) {
                // Atur nilai default jika data tidak tersedia atau snap_token bernilai null
                $defaultSnapToken = 'DEFAULT_SNAP_TOKEN';
                return view('user.user_infaq', compact('tbl_jamaahID', 'defaultSnapToken', 'tbl_bayarDonasi'));
            }

            return view('user.user_infaq', compact('tbl_jamaahID', 'updatedData', 'tbl_bayarDonasi'));
        } catch (\Exception $e) {
            // Tangani pengecualian jika diperlukan
            return redirect()->back()->with(['warning' => 'Terjadi kesalahan: ' . $e->getMessage()]);
        }
    }

    public function frontlayanan_tambahinfaq(Request $request)
    {
        try {
            // Menggunakan fasilitas Auth di Laravel untuk mendapatkan ID pengguna yang sedang masuk
            $email = Auth::guard('user')->user()->email;

            // Menggunakan objek $request untuk mengakses data input
            $infaqkonsultasi = $request->input('infaqkonsultasi', 0);
            $infaqpengislaman = $request->input('infaqpengislaman', 0);
            $infaqoperasional = $request->input('infaqoperasional', 0);
            $pesan = $request->input('pesan', '');
            $jumlah = $request->input('jumlah', 0); // Menggunakan 'jumlah' sebagai referensi
            $jumlah = str_replace('.', '', $jumlah);

            $data = [
                'email' => $email,
                'jumlah' => $jumlah,
                'pesan' => $pesan,
                'infaqkonsultasi' => $infaqkonsultasi,
                'infaqpengislaman' => $infaqpengislaman,
                'infaqoperasional' => $infaqoperasional,
                'created_at' => now(),
            ];



            // Jika menggunakan Query Builder
            $simpan = DB::table('tbl_infaq')->insertGetId($data);

            if ($simpan) {
                // Set your Merchant Server Key
                \Midtrans\Config::$serverKey = config('midtrans.serveyKey');
                // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
                \Midtrans\Config::$isProduction = false;
                // Set sanitization on (default)
                \Midtrans\Config::$isSanitized = true;
                // Set 3DS transaction for credit card to true
                \Midtrans\Config::$is3ds = true;

                // Dapatkan SnapToken baru dari Midtrans API
                $params = [
                    'transaction_details' => [
                        'order_id' => uniqid(), // Menggunakan uniqid() untuk mendapatkan ID yang unik
                        'gross_amount' => $data['jumlah'],
                    ],
                    'customer_details' => [
                        'first_name' => Auth::guard('user')->user()->nama_user,
                        'email' => Auth::guard('user')->user()->email,
                    ],
                ];
                $snapToken = Snap::getSnapToken($params);

                // Update SnapToken di dalam tabel tbl_infaq hanya untuk entri yang baru saja ditambahkan
                DB::table('tbl_infaq')->where('id_infaq', $simpan)->update(['snap_token' => $snapToken]);

                // Kirim $data ke view bersamaan dengan pesan success
                return redirect()->back()->with(['success' => 'Data berhasil disimpan']);
            }
        } catch (\Exception $e) {
            // Tampilkan pesan kesalahan yang lebih deskriptif
            return redirect()->back()->with(['warning' => 'Terjadi kesalahan input data: ' . $e->getMessage()]);
        }
    }
}
