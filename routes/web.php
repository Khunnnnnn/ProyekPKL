<?php

<<<<<<< HEAD
use App\Http\Controllers\KelasController;
=======
use App\Http\Controllers\AdminController;
>>>>>>> 6f81caa012f58d4caa855eb133f703f55fdd0a8a
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KuisController;

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
    return view('layouts.dashboard');
});

<<<<<<< HEAD
Route::resource('/kelas', KelasController::class);

Route::get('/laporan', function () {
    return view('layouts.laporan');
});
=======
Route::get('/kelas', function () {
    return view('layouts.kelas');
});

Route::resource('/kuis', KuisController::class);
Route::resource('/admin-quiz', AdminController::class);
>>>>>>> 6f81caa012f58d4caa855eb133f703f55fdd0a8a
