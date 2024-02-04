<?php

namespace App\Http\Controllers;

use App\Models\InventarisModels;
use App\Models\Karyawan;
use App\Models\LaporkerjaModels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

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


        return view('home.h_index', compact('tbl_user', 'labelssurat', 'datasurat', 'laporkerja', 'datainventaris', 'dataIslamKonsul', 'labelsdata'));
    }

    public function h_daftar()
    {
        return view('home.h_daftar');
    }

    public function h_prosesdaftar(Request $request)
    {
        $namalengkap = $request->namalengkap;
        $email = $request->email;
        $nohp = $request->nohp;
        $password = $request->password;

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
                // Jika tidak ada file foto diupload, beri nilai default atau sesuaikan dengan kebutuhan Anda
                $fotouser = 'preview.png'; // Ganti dengan nama file default yang Anda inginkan
            }


            $data = [
                'nama_user' => $namalengkap,
                'foto_user' => $fotouser,
                'email' => $email,
                'nohp' => $nohp,
                'password' => Hash::make($password),
            ];

            $simpan = DB::table('tbl_user')->insert($data);

            if ($simpan) {
                return redirect()->back()->with(['success' => 'Data berhasil disimpan']);
            }
        } catch (\Exception $e) {
            // Tampilkan pesan kesalahan
            return redirect()->back()->with(['warning' => 'Email sudah terdaftar. Silakan gunakan email yang berbeda.']);
        }
    }
    public function h_login()
    {
        return view('home.h_login');
    }

    // Login karyawan
    public function h_proseslogin(Request $request)
    {
        // Untuk mengetahui Hash dari sebuah angka
        // $pass = 123;
        // echo Hash::make($pass);

        if (Auth::guard('karyawan')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/dashboard');
        } else {
            return redirect('/login')->with(['warning' => 'Email / Password Salah']);
        }
    }

    public function h_proseslogout()
    {
        // logout karyawan
        if (Auth::guard('karyawan')->check()) {
            Auth::guard('karyawan')->logout();
            return redirect('/');
        }
    }

    public function user_jamaah()
    {
        return view('user.user_jamaah');
    }
    public function user_login()
    {
        return view('user.user_loginjamaah');
    }

    public function user_register()
    {
        return view('user.user_registerjamaah');
    }

    public function user_prosesregister(Request $request)
    {
        $namauser = $request->namauser;
        $emailuser = $request->emailuser;
        $nohpuser = $request->nohpuser;
        $passworduser = $request->passworduser;

        try {
            $data = [
                'nama_user' => $namauser,
                'email' => $emailuser,
                'nohp' => $nohpuser,
                'password' => Hash::make($passworduser),
            ];

            $simpan = DB::table('tbl_jamaah')->insert($data);

            if ($simpan) {
                return redirect('/loginjamaah')->with(['success' => 'Berhasil ! Silahkan Login.']);
            }
        } catch (\Exception $e) {
            // Tampilkan pesan kesalahan
            return redirect()->back()->with(['warning' => 'Email sudah terdaftar. Silakan gunakan email yang berbeda.']);
        }
    }
    // Login user
    public function user_proseslogin(Request $request)
    {

        if (Auth::guard('user')->attempt(['email' => $request->emailuser, 'password' => $request->passworduser])) {
            return redirect('/panel/frontlayanan_jadwalkonsultasi');
        } else {
            return redirect('/jamaah')->with(['warning' => 'Email / Password Salah']);
        }
    }

    public function user_proseslogout()
    {
        // logout karyawan
        if (Auth::guard('user')->check()) {
            Auth::guard('user')->logout();
            return redirect('/jamaah');
        }
    }
}
