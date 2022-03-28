<?php

namespace App\Http\Controllers;


use App\Models\Admin;
use App\Models\Level;
use App\Models\Murid;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Guru;
use App\Models\Jurusan;
use App\Models\Kelaz;
use App\Models\Status;
use App\Models\Verifikasi;
use Illuminate\Auth\Events\Verified;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;
use phpDocumentor\Reflection\Types\Null_;
use RealRashid\SweetAlert\Facades\Alert;
use function PHPUnit\Framework\returnSelf;

class LoginController extends Controller
{
    //

    public function adminLogin()
    {
        return view('layouts.login.loginadmin');
    }
    public function muridRegis()
    {
        $level = Level::all();
        $jurusan = Jurusan::all();
        $status = Status::all();
        $verif = Verifikasi::all();
        $kelas = Kelaz::all();
        return view('layouts.register.registerMurid', [
            'level' => $level,
            'jurusan' => $jurusan,
            'kelas' => $kelas,
            'verif' => $verif,
            'status' => $status
        ]);
    }

    public function postloginMurid(Request $request)
    {

        if (Auth::guard('murid')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/landing');
        } else {
            Alert::error('Gagal Login', 'Isi Field Terlebih Dahulu');
            return redirect('/loginbaru');
        }
    }

    public function postloginAdmin(Request $request)
    {
        // dd($request->all());
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/');
        } elseif (Auth::guard('guru')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/');
        } else {
            Alert::error('Gagal Login', 'Isi Field Terlebih Dahulu');
            return redirect('/Login-Admin');
        }
        Alert::error('Gagal Login', 'Isi Field Terlebih Dahulu');
        return redirect('/Login-Admin');
    }

    public function logoutAdmin(Request $request)
    {
        // dd($request->all());
        if (Auth::guard('admin')->check()) {
            Auth::guard('admin')->logout();
        } elseif (Auth::guard('guru')->check()) {
            Auth::guard('guru')->logout();
        }
        return redirect('/Login-Admin')->withSuccess('Logout Berhasil');;
    }
    public function logoutMurid(Request $request)
    {
        // dd($request->all());
        if (Auth::guard('murid')->check()) {
            Auth::guard('murid')->logout();
        }
        return redirect('/loginbaru')->withSuccess('Logout Berhasil');;
    }
    public function registration()
    {
        $level = Level::all();
        $status = Status::all();
        $verif = Verifikasi::all();
        return view('layouts.register.register ', [
            'level' => $level,
            'status' => $status,
            'verif' => $verif
            
        ]);
    }

    public function customRegistration(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3|max:50',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'ktp' =>'required',
            'level' => 'required'
        ]);

        // Deklarasi Tabel
        $admin = new Admin;

        $guru = new Guru;
        // Pengkondisian Jika Daftar Sebagai Admin atau Siswa
        if ($admin->level = $request->level == 2) {
            // dd($admin); 
            $admin->nama = $request->name;
            $admin->email = $request->email;
            $admin->ktp = $request->ktp;
            $admin->password = Hash::make($request->password);
            $admin->id_verifikasi = $request->verif;
            $admin->id_status = $request->status;
            $admin->level = $request->level;
            $admin->save();
            return redirect("/Login-Admin")->withSuccess('Berhasil Daftar Sebagai Admin');
        } elseif ($guru->level = $request->level == 3) {
            // dd($guru); 
            $guru->nama = $request->name;
            $guru->email = $request->email;
            $guru->ktp = $request->ktp;
            $guru->password = Hash::make($request->password);
            $guru->id_verifikasi = $request->verif;
            $guru->id_status = $request->status;
            $guru->level = $request->level;
            $guru->save();
            return redirect("/Login-Admin")->withSuccess('Berhasil Daftar Sebagai Guru');
        } elseif ($guru or $admin = Null) {
            Alert::error('Error Title', 'Gagal Menambahkan');
            return redirect("/Login-Admin");
        }
    }
    public function customregisMurid(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'nama' => 'required|min:3|max:50',
            'email' => 'required|email',
            'nis' => 'required|min:3|max:50',
            'password' => 'required|min:6',
            'jurusan' => 'required',
            'kelas' => 'required',
            'level' => 'required',
            'verifikasi' => 'required',
            'status' => 'required'
        ]);
        $siswa = new Murid;
        if ($siswa->level = $request->level == 1) {
            // dd($siswa); 
            // dd($request->all());
            $siswa->nama = $request->nama;
            $siswa->email = $request->email;
            $siswa->nis_siswa = $request->nis;
            $siswa->password = Hash::make($request->password);
            $siswa->id_jurusan = $request->jurusan;
            $siswa->id_kelas = $request->kelas;
            $siswa->level = $request->level;
            $siswa->id_verifikasi = $request->verifikasi;
            $siswa->id_status = $request->status;
            $siswa->save();
            return redirect("/loginbaru")->withSuccess('Berhasil Daftar Sebagai Siswa');
        } else {
            Alert::error('Gagal Menambahkan', 'Check Field dengan teliti');
            return redirect("/loginbaru");
        }
    }
}
