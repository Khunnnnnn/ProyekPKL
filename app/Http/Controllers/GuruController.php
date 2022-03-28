<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Admin;
use App\Models\Level;
use App\Models\Status;
use App\Models\Verifikasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.guru', [
            'gurus' => Guru::all(),
            'verifikasi' => Verifikasi::all(),
            'status' => Status::all(),
            'level' => Level::all(),
            'title' => "Guru",
            'smallTitle' => " - Guru",
            'headTitle' => "Guru",
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'nama' => 'required|max:100',
            'email' => 'required|email:dns|unique:admins|max:100',
            'ktp' => 'required|max:20',
            'password' => 'required|min:5|max:100',
            'id_verifikasi' => 'required',
            'id_status' => 'required',
            'level' => 'required'
        ]);

        // $aktif = 'Aktif';
        // $terverivikasi = 'Sudah Terverivikasi';

        $validatedData['password'] = Hash::make($validatedData['password']);

        Guru::create($validatedData);
        Alert::success('Congrats', 'Data Berhasil Ditambah');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $admin = Guru::find($id);
        $admin->nama = $request->nama;
        $admin->email = $request->email;
        $admin->ktp = $request->ktp;
        $admin->update();
        Alert::success('Congrats', 'Data Berhasil Diubah');
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $admin = Guru::findOrFail($id);
        $admin->delete();
        alert()->success('Post Deleted', 'Successfully')->toToast();
        return redirect()->back();
    }
    public function updatestatus(Request $request, $id)
    {
        $update_siswa = Guru::find($id);
        if ($update_siswa->id_status == 1) {
            $update_siswa->id_status = 2;
            $update_siswa->update();
            alert()->info('Status Menjadi Nonaktif', 'Successfully')->toToast();
            return redirect()->route('guru.index');
        } elseif ($update_siswa->id_status == 2) {
            $update_siswa->id_status = 1;
            $update_siswa->update();
            alert()->success('Status Menjadi Aktif', 'Successfully')->toToast();
            return redirect()->route('guru.index');
        } else {
            alert()->error('Status Sudah Nonaktif', 'Failed')->toToast();
            return redirect()->route('guru.index');
        }
    }
}
