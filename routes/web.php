<?php

use App\Http\Controllers\DaftarkandidatController;
use App\Http\Controllers\PasangiklanController;
use App\Http\Controllers\TentangkamiController;
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

Route::get('/lowongan-pekerjaan/job', function () {
    return view('jobs');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/konten2', [App\Http\Controllers\Konten2Controller::class, 'index'])->name('konten2');

Route::get('/listloker', [App\Http\Controllers\ListlokerController::class, 'index'])->name('listloker');
Route::get('/pasangiklan', [PasangiklanController::class, 'index'])->name('pasangiklan');
Route::get('/daftarkandidat', [DaftarkandidatController::class, 'index'])->name('daftarkandidat');
Route::get('/tentangkami', [TentangkamiController::class, 'index'])->name('tentangkami');

Route::get('/recruitment', [App\Http\Controllers\RecruitmentController::class, 'index'])->name('recruitment');
Route::get('/recruitmentprofil', [App\Http\Controllers\RecruitmentprofilController::class, 'index'])->name('recruitmentprofil');
