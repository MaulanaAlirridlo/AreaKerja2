<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/listloker', [App\Http\Controllers\ListlokerController::class, 'index'])->name('listloker');

Route::get('/recruitment', [App\Http\Controllers\RecruitmentController::class, 'index'])->name('recruitment');

Route::get('/recruitmentprofil', [App\Http\Controllers\RecruitmentprofilController::class, 'index'])->name('recruitmentprofil');
Route::get('/daftar', [App\Http\Controllers\DaftarController::class, 'index'])->name('daftar');
