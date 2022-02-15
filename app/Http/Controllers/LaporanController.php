<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        return view('layouts.laporan.datalaporan');
    }

    public function details(Request $request)
    {
        return view('details',['data' => $request]);
    }
}
