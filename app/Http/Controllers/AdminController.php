<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Status;
use App\Models\Verifikasi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Level;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

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
            'level' => Level::all()
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
            'id_verifikasi' => 'required',
            'id_status' => 'required',
            'level' => 'required'
        ]);

        // $aktif = 'Aktif';
        // $terverivikasi = 'Sudah Terverivikasi';

        $validatedData['password'] = Hash::make($validatedData['password']);

        Admin::create($validatedData);
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
        $admin = Admin::find($id);
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
        $admin = Admin::findOrFail($id);
        $admin->delete();
        alert()->success('Post Deleted', 'Successfully')->toToast();
        return redirect()->back();
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
