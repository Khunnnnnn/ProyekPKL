<?php

namespace App\Http\Controllers;

use App\Models\Jurusan;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.jurusan', [
            'title' => "Jurusan",
            'smallTitle' => " - Jurusan",
            'headTitle' => "Jurusan",
            'jurusan' => Jurusan::all()
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
        $request->validate([
            'namajurusan' => 'required'
        ]);

        $jurusan = new Jurusan;
        $jurusan->nama_jurusan = $request->namajurusan;
        $jurusan->save();
        Alert::success('Sukses', 'Data Berhasil Ditambahkan');
        return redirect()->route('jurusan.index')->with(compact('jurusan'));
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
        $update_jurusan = Jurusan::find($id);
        $update_jurusan->nama_jurusan = $request->updateNamaJurusan;
        $update_jurusan->save();
        Alert::success('Sukses', 'Data Berhasil Diubah');
        return redirect()->route('jurusan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jurusan = Jurusan::findOrFail($id);
        $jurusan->delete();
        alert()->success('Sukses', 'Data telah terhapus')->toToast();
        if ($jurusan) {
            return redirect()
                ->route('jurusan.index')
                ->with([
                    'success' => 'jurusan has been deleted successfully'
                ]);
        } else {
            return redirect()
                ->route('jurusan.index')
                ->with([
                    'error' => 'Some problem has occurred, please try again'
                ]);
        }
    }
}
