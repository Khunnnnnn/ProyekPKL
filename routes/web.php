<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KuizController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JurusanController;
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

Route::get('/login', function () {
    return view('layouts.login.login');
});



Route::get('/login', function () {
    return view('layouts.login.login');
})->name('login');
// Controller Login
Route::post('/postlogin', 'App\Http\Controllers\LoginController@postlogin')->name('postlogin');
// Untuk Logout
Route::get('/logout', 'App\Http\Controllers\LoginController@logout')->name('logout');


// Check Table 
Route::group(['middleware' => ['auth:admin']], function () {
    // Tampil Dashboard
    Route::get('/', [DashboardController::class, 'index']);
    Route::resource('/kuis', KuizController::class);
    Route::resource('/admin-quiz', AdminController::class);
    Route::resource('/kelas', KelasController::class);
    Route::resource('/jurusan', JurusanController::class);
    Route::resource('/siswa', SiswaController::class);
    Route::resource('/guru', GuruController::class);
    Route::resource('/kategorikuis', KategoriKuizController::class);
    Route::get('/laporan', function () {
        return view('layouts.laporan');
    });

    // Update Status Siswa
    Route::put('/post/update/{id}', [SiswaController::class, 'updatestatus']);
});
// Check Table 
Route::group(['middleware' => ['auth:murid']], function () {
    // Tampil Landing Page Siswa
    Route::get('/landing', function () {
        return view('main');
    });
});
