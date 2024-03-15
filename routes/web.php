<?php

use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\AsistenController;
use App\Http\Controllers\CodeGeneratorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\RiwayatController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('/logout', [App\Http\Controllers\HomeController::class, 'logout']);

Route::resource('/asisten', AsistenController::class)->middleware('isAdmin');
Route::resource('/kelas', KelasController::class)->middleware('isAdmin');
Route::resource('/materi', MateriController::class)->middleware('isAdmin');

Route::get('/codeGenerator', [CodeGeneratorController::class, 'index'])->middleware('codeAcces');
Route::post('/codeGenerator', [CodeGeneratorController::class, 'store'])->middleware('codeAcces');

Route::post('/absensi', [AbsensiController::class, 'create']);
Route::put('/absensi', [AbsensiController::class, 'update']);

Route::get('/report', [ReportController::class, 'index'])->middleware('isAdmin');
Route::get('/riwayat', [RiwayatController::class, 'index']);
