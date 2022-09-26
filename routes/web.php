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
    return view('index');
});

Route::get('/artikel', function () {
    return view('artikel');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/konten2', [App\Http\Controllers\Konten2Controller::class, 'index'])->name('konten2');

Route::get('/listloker', [App\Http\Controllers\ListlokerController::class, 'index'])->name('listloker');

Route::get('/kontak', function () {
    return view('kontak');
});
Route::get('/recruitment', [App\Http\Controllers\RecruitmentController::class, 'index'])->name('recruitment');
