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
        //
        $kelas = Kelaz::all();
        return view('layouts.kelas',compact('kelas'));
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
        Alert::success('Congrats', 'You\'ve Successfully Registered');
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
