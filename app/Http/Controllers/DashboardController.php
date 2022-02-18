<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('layouts.dashboard', [
            'title' => "Dashboard",
            'smallTitle' => "",
            'headTitle' => "Dashboard",
        ]);
    }
}
