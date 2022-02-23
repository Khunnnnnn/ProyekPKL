<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\KuizController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriKuizController;

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

// ROUTE DASHBOARD

// Tampil Dashboard
Route::get('/', [DashboardController::class, 'index']);

// Route::get('/siswa', function () {
//     return view('layouts.siswa');
// });

Route::get('/login', function () {
    return view('layouts.login.login');
});

Route::get('/laporan', function () {
    return view('layouts.laporan');
});

Route::resource('/kuis', KuizController::class);
Route::resource('/admin-quiz', AdminController::class);
Route::resource('/kelas', KelasController::class);
Route::resource('/siswa', SiswaController::class);
Route::resource('/guru', GuruController::class);
Route::resource('/kategorikuis', KategoriKuizController::class);

Route::get('/landing', function () {
    return view('main');
});

// Route::group(['middleware' => ['auth:admin']], function() {
//     Route::get('/users', [UserController::class, 'users']);
// });

