<?php

namespace App\Http\Controllers;


use App\Models\Admin;
use App\Models\Level;
use App\Models\Murid;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Guru;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;
use phpDocumentor\Reflection\Types\Null_;
use RealRashid\SweetAlert\Facades\Alert;
use function PHPUnit\Framework\returnSelf;

class LoginController extends Controller
{
    //
    public function postlogin(Request $request)
    {
        // dd($request->all());
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/');
        } elseif (Auth::guard('murid')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/landing');
        } elseif (Auth::guard('guru')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect('/');
        }
        Alert::error('Gagal Login', 'Isi Field Terlebih Dahulu');
        return redirect('/loginbaru');
    }

    public function logout(Request $request)
    {
        // dd($request->all());
        if (Auth::guard('admin')->check()) {
            Auth::guard('admin')->logout();
        } elseif (Auth::guard('murid')->check()) {
            Auth::guard('murid')->logout();
        }
        return redirect('/loginbaru');
    }
    public function registration()
    {
        $level = Level::all();
        return view('layouts.register.register ', [
            'level' => $level
        ]);
    }

    public function customRegistration(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3|max:50',
            'email' => 'required|email',
            'password' => 'required|min:6',
            'level' => 'required'
        ]);

        // Deklarasi Tabel
        $admin = new Admin;
        $siswa = new Murid;
        $guru = new Guru;
        // Pengkondisian Jika Daftar Sebagai Admin atau Siswa
        if ($admin->level = $request->level == 2) {
            // dd($admin); | Untuk Mengecheck Input
            $admin->nama = $request->name;
            $admin->email = $request->email;
            $admin->password = Hash::make($request->password);
            $admin->level = $request->level;
            $admin->save();
            return redirect("/loginbaru")->withSuccess('Berhasil Daftar Sebagai Admin');
        } elseif ($siswa->level = $request->level == 1) {
            // dd($siswa); Untuk Mengecheck Input
            $siswa->nama = $request->name;
            $siswa->email = $request->email;
            $siswa->password = Hash::make($request->password);
            $siswa->level = $request->level;
            $siswa->save();
            return redirect("/loginbaru")->withSuccess('Berhasil Daftar Sebagai Siswa');
        } elseif ($guru->level = $request->level == 3) {
            $guru->nama = $request->name;
            $guru->email = $request->email;
            $guru->password = Hash::make($request->password);
            $guru->level = $request->level;
            $guru->save();
            return redirect("/loginbaru")->withSuccess('Berhasil Daftar Sebagai Guru');
        } elseif($guru||$siswa||$admin = Null) {
            Alert::error('Error Title', 'Gagal Menambahkan');
            return redirect("/loginbaru");
        }
    }
}
