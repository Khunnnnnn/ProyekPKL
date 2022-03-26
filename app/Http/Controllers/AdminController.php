<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Verifikasi;
use App\Models\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts.admin', [
            'title' => "Admin Quiz",
            'smallTitle' => " - Admin",
            'headTitle' => "Admin",
            'admins' => Admin::all(),
            'verifikasi' => Verifikasi::all(),
            'status' => Status::all(),
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
        $validatedData = $request->validate([
            'nama' => 'required|max:100',
            'email' => 'required|email:dns|unique:admins|max:100',
            'ktp' => 'required|max:20',
            'password' => 'required|min:5|max:100',
            'aktif' => 'required|max:15',
        ]);

        // $aktif = 'Aktif';
        // $terverivikasi = 'Sudah Terverivikasi';

        $validatedData['password'] = Hash::make($validatedData['password']);

        Admin::create($validatedData);
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
    }

    public function updateStatus(Request $request, $id){

        $statusSekarang= Admin::find($id);        
        if($statusSekarang -> id_status == 1){
            $statusSekarang->id_status = 2;
            $statusSekarang->update();
        }
        alert()->success('Status Diubah', 'Successfully')->toToast();

        return redirect()->route('admin-quiz.index');
    }

    public function updateStatusAktif($id){

        $statusSekarang= Admin::find($id);
        if($statusSekarang -> id_status == 2){
            $statusSekarang->id_status = 1;
            $statusSekarang->update();
        }
        alert()->success('Status Diubah', 'Successfully')->toToast();

        return redirect()->route('admin-quiz.index'); 
    }
}
