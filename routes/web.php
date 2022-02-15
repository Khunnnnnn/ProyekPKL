<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KuisController;
use App\Http\Controllers\LaporanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/siswa', function () {
    return view('layouts.siswa');
});

Route::get('/guru', function () {
    return view('layouts.guru');
});

Route::get('/', function () {
    return view('layouts.admin');
});

Route::get('/kelas', function () {
    return view('layouts.kelas');
});

Route::resource('/kuis', KuisController::class);

Route::get('/index', [LaporanController::class, 'index']);
