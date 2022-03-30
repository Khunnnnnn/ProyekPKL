<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\KategoriKuiz;
use App\Models\Kuiz;
use App\Models\Murid;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('layouts.dashboard', [
            'title' => "Dashboard",
            'smallTitle' => "",
            'headTitle' => "Dashboard",
            'siswa' => Murid::all(),
            'guru' => Guru::all(),
            'kuis' => Kuiz::all(),
            'kategori' => KategoriKuiz::all(),
        ]);
    }
}
