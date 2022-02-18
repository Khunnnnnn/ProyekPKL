<?php

use App\Http\Controllers\KelasController;
use App\Http\Controllers\AdminController;
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

Route::get('/login', function () {
    return view('layouts.login.login');
});

Route::get('/guru', function () {
    return view('layouts.guru');
});

Route::get('/', function () {
    return view('layouts.dashboard');
});

Route::get('/laporan', function () {
    return view('layouts.laporan');
});

Route::get('/kategorikuis', function () {
    return view('layouts.kuis.kategorikuis');
});

Route::resource('/kuis', KuisController::class);
Route::resource('/admin-quiz', AdminController::class);
Route::resource('/kelas', KelasController::class);

Route::get('/landing', function () {
    return view('main');
});

// Route::group(['middleware' => ['auth:admin']], function() {
//     Route::get('/users', [UserController::class, 'users']);
// });

