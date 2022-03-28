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

Route::get('/loginbaru', function () {
    return view('layouts.login.loginbaru');
})->name('login');

Route::get('/Login-Admin', [LoginController::class, 'adminLogin'])->name('Login-Admin');
Route::get('/Register-Siswa', [LoginController::class, 'muridRegis'])->name('Register-Siswa');

// Controller Login
Route::post('/postloginAdmin', [LoginController::class, 'postloginAdmin'])->name('postloginAdmin'); 

Route::post('/postloginMurid', [LoginController::class, 'postloginMurid'])->name('postloginMurid'); 

// Untuk Logout
Route::get('/logoutAdmin', [LoginController::class, 'logoutAdmin'])->name('logoutAdmin'); 
Route::get('/logoutMurid', [LoginController::class, 'logoutMurid'])->name('logoutMurid'); 
// Registration
Route::get('/register', [LoginController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [LoginController::class, 'customRegistration'])->name('register.custom'); 
Route::post('customregisMurid', [LoginController::class, 'customregisMurid'])->name('customregisMurid'); 


// Check Table 
Route::group(['middleware' => ['auth:admin']], function () {
    // Tampil Dashboard
    Route::get('/', [DashboardController::class, 'index']);
    Route::resource('/kuis', KuizController::class);
    Route::resource('/admin-quiz', AdminController::class);
    Route::get('/admin-quiz/update-status/{id}', [AdminController::class, 'updateStatus']);
    Route::get('/admin-quiz/update-status-aktif/{id}', [AdminController::class, 'updateStatusAktif']);
    Route::resource('/kelas', KelasController::class);
    Route::resource('/jurusan', JurusanController::class);
    Route::resource('/siswa', SiswaController::class);
    Route::resource('/guru', GuruController::class);
    // Update Status Siswa
    Route::put('/post/update/{id}', [SiswaController::class, 'updatestatus']);
    // Update Status guru
    Route::put('/post/updateGuru/{id}', [GuruController::class, 'updatestatus']);
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
// Route::group(['middleware' => ['auth:guru']], function () {
//     // Tampil Landing Page Siswa
//     Route::resource('/kelas', KelasController::class);
//     Route::resource('/jurusan', JurusanController::class);
//     Route::resource('/siswa', SiswaController::class);
//     Route::resource('/kategorikuis', KategoriKuizController::class);
//     Route::get('/detail', [LaporanController::class, 'detail']);
//     Route::get('/detailjawaban', [LaporanController::class, 'detailjawaban']);
//     Route::put('/post/update/{id}', [SiswaController::class, 'updatestatus']);
// });