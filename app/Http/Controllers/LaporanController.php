<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function index()
    {
        return view('layouts.laporan.datalaporan', [
            'title' => "Laporan",
            'smallTitle' => " - Laporan",
            'headTitle' => "Laporan"
        ]);
    }

    public function detail()
    {
        return view('layouts.laporan.detaillaporan', [
            'title' => "Detail Laporan",
            'smallTitle' => " - Laporan - Detail Laporan",
            'headTitle' => "Detail Laporan"
        ]);
    }

    public function detailjawaban()
    {
        return view('layouts.laporan.detailjawaban', [
            'title' => "Detail Jawaban",
            'smallTitle' => " - Laporan - Detail Jawaban",
            'headTitle' => "Detail Jawaban"
        ]);
    }

    // public function details(Request $request)
    // {
    //     return view('details',['data' => $request]);
    // }
}
