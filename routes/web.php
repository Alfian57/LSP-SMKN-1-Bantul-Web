<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JenisStandarController;
use App\Http\Controllers\MataPelajaranController;
use App\Http\Controllers\PermohonanController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\SubUnitKompetensiController;
use App\Http\Controllers\UnitKompetensiController;
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

Route::post('/admin/login', [AuthController::class, 'validateUser']);
Route::post('/admin/logout', [AuthController::class, 'adminLogout']);
Route::post('/siswa/logout', [AuthController::class, 'siswaLogout']);

Route::get('/beranda', [HomeController::class, 'beranda'])->name('login');
Route::get('/visi-misi', [HomeController::class, 'visiMisi']);
Route::get('/skema-sertifikasi', [HomeController::class, 'skemaSertifikasi']);
Route::get('/struktur-organisasi', [HomeController::class, 'strukturOrganisasi']);
Route::get('/detail1', [HomeController::class, 'detail1']);
Route::get('/detail2', [HomeController::class, 'detail2']);
Route::get('/detail3', [HomeController::class, 'detail3']);
Route::get('/tempat-uji-kompetensi', [HomeController::class, 'tempatUjiKompetensi']);
Route::get('/kontak', [HomeController::class, 'kontak']);

Route::group(['prefix' => "permohonan-kompetensi"], function () {
    Route::get('/', [PermohonanController::class, 'index']);
    Route::get('/data', [PermohonanController::class, 'data']);
    Route::post('/data', [PermohonanController::class, 'storeBioData']);
    Route::get('/bukti', [PermohonanController::class, 'bukti']);
    Route::get('/assesmen-mandiri', [PermohonanController::class, 'assesmenMandiri']);
});

Route::group(['middleware' => "auth:user"], function () {
    Route::get("/dashboard", function () {
        return view('layouts.dashboard');
    });

    Route::resource('/mata-pelajaran', MataPelajaranController::class)->except('show');
    Route::resource('/jenis-standar', JenisStandarController::class)->except('show');
    Route::resource('/peserta', PesertaController::class)->except('show');
    Route::resource('/unit-kompetensi', UnitKompetensiController::class);
    Route::resource('/unit-kompetensi/{kodeUnit}/sub', SubUnitKompetensiController::class)->except('show');
    Route::resource('/administrator', AdminController::class)->except('show');
    Route::resource('/siswa', SiswaController::class)->except('show');
});