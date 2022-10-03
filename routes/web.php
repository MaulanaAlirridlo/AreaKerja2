<?php

use App\Http\Controllers\DaftarkandidatController;
use App\Http\Controllers\PasangiklanController;
use App\Http\Controllers\TentangkamiController;
use App\Http\Controllers\TipskerjaController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/artikel', function () {
    return view('artikel');
});

Route::get('/404', function () {
    return view('404');
});

Route::get('/lowongan-pekerjaan/job', function () {
    return view('jobs');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/listloker', [App\Http\Controllers\ListlokerController::class, 'index'])->name('listloker');
Route::get('/pasanglowongan', [PasangiklanController::class, 'index'])->name('pasanglowongan');
Route::get('/daftarkandidat', [DaftarkandidatController::class, 'index'])->name('daftarkandidat');
Route::get('/tentangkami', [TentangkamiController::class, 'index'])->name('tentangkami');

Route::get('/kontak', function () {
    return view('kontak');
});
Route::get('/recruitment', [App\Http\Controllers\RecruitmentController::class, 'index'])->name('recruitment');
Route::get('/recruitmentprofil', [App\Http\Controllers\RecruitmentprofilController::class, 'index'])->name('recruitmentprofil');
Route::get('/daftar', [App\Http\Controllers\DaftarController::class, 'index'])->name('daftar');
Route::get('/tipskerja', [TipskerjaController::class, 'index'])->name('tipskerja');

Route::prefix('finance')->group(function () {
    Route::get('/', function () {
        return view('finance.dashboard');
    });
});
