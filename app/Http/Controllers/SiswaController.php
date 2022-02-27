<?php

namespace App\Http\Controllers;

use App\Models\Kelaz;
use App\Models\siswa;
use App\Models\Status;
use App\Models\Jurusan;
use App\Models\Verifikasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kelas = Kelaz::all();
        $jurusan = Jurusan::all();
        $siswa = siswa::all();
        $verif = Verifikasi::all();
        $status = Status::all();
        // dd($siswa);
        return view('layouts.siswa', [
            'kelas' => $kelas,
            'siswa' => $siswa,
            'jurusan' => $jurusan,
            'title' => "Siswa",
            'smallTitle' => " - Siswa",
            'headTitle' => "Siswa",
            'verif' => $verif,
            'status' => $status
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
        $this->validate($request, [
            'nama_siswa' => 'required|min:3|max:50',
            'email_siswa' => 'email',
            'nis_siswa' => 'max:13',
            'kelas_siswa' => 'required',
            'jurusan_siswa' =>'required',
            'pass_siswa' => 'min:6'
        ]);
        // dd($request);
        // dd($request);
        $siswa = new siswa;
        $siswa->nama_siswa = $request->nama_siswa;
        $siswa->email_siswa = $request->email_siswa;
        $siswa->nis_siswa = $request->nis_siswa;
        $siswa->id_kelas = $request-> kelas_siswa;
        $siswa->id_jurusan = $request-> jurusan_siswa;
        $siswa->id_verifikasi = $request-> verifikasi;
        $siswa->id_status = $request-> status;
        $siswa->password = Hash::make($request->pass_siswa);
        $siswa->save();
        Alert::success('Congrats', 'You\'ve Successfully Registered');
        return redirect()->route('siswa.index')->with(compact('siswa'));
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
        $update_siswa= siswa::find($id);
        $update_siswa->nama_siswa=$request->updatenamasiswa;
        $update_siswa->email_siswa=$request->updateemailsiswa;
        $update_siswa->nis_siswa=$request->updatenissiswa;
        $update_siswa->id_kelas=$request->updatekelassiswa;
        $update_siswa->id_jurusan=$request->updatejurusansiswa;
        $update_siswa->save();
        Alert::success('Congrats', 'Data Berhasil Diubah');
        return redirect()->route('siswa.index');
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
        $siswa = siswa::findOrFail($id);
        $siswa->delete();
        alert()->success('Post Deleted', 'Successfully')->toToast();
        return redirect()->route('siswa.index');
    }
}
