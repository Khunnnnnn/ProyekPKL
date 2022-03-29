<?php

namespace App\Http\Controllers;

use App\Models\Kuiz;
use App\Models\KategoriKuiz;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class KuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('layouts.kuis.datakuis', [
            'title' => "Kuis",
            'smallTitle' => " - Kuis",
            'headTitle' => "Kuis",
            'kuiz' => Kuiz::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    // UNTUK MENAMPILKAN FORM TAMBAH DATA KUIS DENGAN PENGIRIMAN ID KATEGORI KUIS
    public function create($id)
    {
        return view('layouts.kuis.tambahdatakuis', [
            'title' => "Kuis",
            'smallTitle' => " - Kuis",
            'headTitle' => "Kuis",
            'kategori_id' => $id,
            'cariKategori' => KategoriKuiz::find($id),
            'kategori_kuiz' => KategoriKuiz::all(),
            'kuiz' => Kuiz::all(),
        ]);
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
            'kategori_kuiz' => 'required',
            'soal' => 'required',
            'durasi' => 'required',
        ]);

        $kuis = new Kuiz;
        $kuis->kategori_kuiz_id = $request->kategori_kuiz;
        $kuis->soal = $request->soal;
        $kuis->durasi = $request->durasi;
        $kuis->save();
        Alert::success('Sukses', 'Data Berhasil Ditambahkan');
        return redirect("/kuis/create/$kuis->kategori_kuiz_id");

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
        return view('layouts.kuis.editdatakuis', [
            'title' => "Kuis",
            'smallTitle' => " - Kuis",
            'headTitle' => "Kuis",
            // 'kelas' => Kuizs::all()
        ]);
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
    }
}
