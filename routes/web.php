<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\KuizController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriKuizController;
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


Route::get('/login', function () {
    return view('layouts.login.login');
})->name('login');

// Controller Login
Route::post('/postlogin', 'App\Http\Controllers\LoginController@postlogin')->name('postlogin');
// Untuk Logout
Route::get('/logout', 'App\Http\Controllers\LoginController@logout')->name('logout');
// Registration
Route::get('/register', [LoginController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [LoginController::class, 'customRegistration'])->name('register.custom'); 


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
    // Update Status Siswa
    Route::put('/post/update/{id}', [SiswaController::class, 'updatestatus']);
    Route::resource('/kategorikuis', KategoriKuizController::class);
    // Route::get('/laporan', function () {
    //     return view('layouts.laporan.datalaporan');
    // });
    Route::get('/laporan', [LaporanController::class, 'index']);
    Route::get('/detail', [LaporanController::class, 'detail']);
    Route::get('/detailjawaban', [LaporanController::class, 'detailjawaban']);

    
});
// Check Table 
Route::group(['middleware' => ['auth:murid']], function () {
    // Tampil Landing Page Siswa
    Route::get('/landing', function () {
        return view('main');
    });
});
// Check Table
Route::group(['middleware' => ['auth:guru']], function () {
    // Tampil Landing Page Siswa
    Route::resource('/kelas', KelasController::class);
    Route::resource('/jurusan', JurusanController::class);
    Route::resource('/siswa', SiswaController::class);
    Route::resource('/kategorikuis', KategoriKuizController::class);
    Route::get('/detail', [LaporanController::class, 'detail']);
    Route::get('/detailjawaban', [LaporanController::class, 'detailjawaban']);
    Route::put('/post/update/{id}', [SiswaController::class, 'updatestatus']);
});