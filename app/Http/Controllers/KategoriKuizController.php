<?php

namespace App\Http\Controllers;

use App\Models\Kuiz;
use App\Models\KategoriKuiz;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class KategoriKuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.kuis.kategorikuis', [
            'title' => "Kategori Mata Pelajaran",
            'smallTitle' => " - Mata Pelajaran",
            'headTitle' => "Kategori Kuis",
            'mapels' => KategoriKuiz::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create($id)
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
            'namakategori' => 'required',
            'judulkuis' => 'required',
            'nilaikkm' => 'required',
            'deskripsi' => 'required'
        ]);

        $kategorikuis = new KategoriKuiz;
        $kategorikuis->nama_kategori = $request->namakategori;
        $kategorikuis->judul_kuis = $request->judulkuis;
        $kategorikuis->nilai_kkm = $request->nilaikkm;
        $kategorikuis->deskripsi = $request->deskripsi;
        $kategorikuis->save();
        Alert::success('Sukses', 'Data Berhasil Ditambahkan');
        return redirect()->route('kategorikuis.index')->with(compact('kategorikuis'));
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
        $update_kategori = KategoriKuiz::find($id);
        $update_kategori->nama_kategori = $request->updateNamaKategori;
        $update_kategori->judul_kuis = $request->updateJudulKuis;
        $update_kategori->nilai_kkm = $request->updateNilaiKkm;
        $update_kategori->deskripsi = $request->updateDeskripsi;
        $update_kategori->save();
        Alert::success('Sukses', 'Data Berhasil Diubah');
        return redirect()->route('kategorikuis.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kategorikuis = KategoriKuiz::findOrFail($id);
        $kategorikuis->delete();
        alert()->success('Sukses', 'Data telah terhapus')->toToast();
        if ($kategorikuis) {
            return redirect()
                ->route('kategorikuis.index')
                ->with([
                    'success' => 'kategori has been deleted successfully'
                ]);
        } else {
            return redirect()
                ->route('kategorikuis.index')
                ->with([
                    'error' => 'Some problem has occurred, please try again'
                ]);
        }
    }
}
