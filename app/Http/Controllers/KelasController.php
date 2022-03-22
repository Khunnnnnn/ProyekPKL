<?php

namespace App\Http\Controllers;

use App\Models\Kelaz;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.kelas', [
            'title' => "Kelas",
            'smallTitle' => " - Kelas",
            'headTitle' => "Kelas",
            'kelas' => Kelaz::all()
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
        $request->validate([
            'namakelas' => 'required'
        ]);

        $kelas = new Kelaz;
        $kelas->nama_kelas = $request->namakelas;
        $kelas->save();
        Alert::success('Sukses', 'Data Berhasil Ditambahkan');
        return redirect()->route('kelas.index')->with(compact('kelas'));
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
        $update_kelas = Kelaz::find($id);
        $update_kelas->nama_kelas = $request->updateNamaKelas;
        $update_kelas->save();
        Alert::success('Sukses', 'Data Berhasil Diubah');
        return redirect()->route('kelas.index');
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
        $kelas = Kelaz::findOrFail($id);
        $kelas->delete();
        alert()->success('Sukses', 'Data telah terhapus')->toToast();
        if ($kelas) {
            return redirect()
                ->route('kelas.index')
                ->with([
                    'success' => 'kelas has been deleted successfully'
                ]);
        } else {
            return redirect()
                ->route('kelas.index')
                ->with([
                    'error' => 'Some problem has occurred, please try again'
                ]);
        }
    }
}
