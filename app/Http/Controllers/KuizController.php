<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
            // 'kelas' => Kuizs::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.kuis.tambahdatakuis', [
            'title' => "Kuis",
            'smallTitle' => " - Kuis",
            'headTitle' => "Kuis",
            // 'kelas' => Kuizs::all()
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
        //
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