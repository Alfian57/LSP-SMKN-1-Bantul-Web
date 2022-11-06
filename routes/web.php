<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MataPelajaranController;
use App\Http\Controllers\PermohonanController;
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
Route::post('/admin/logout', [AuthController::class, 'logout']);

Route::get('/beranda', [HomeController::class, 'beranda'])->name('login');
Route::get('/visi-misi', [HomeController::class, 'visiMisi']);

Route::group(['prefix' => "permohonan-kompetensi"], function () {
    Route::get('/', [PermohonanController::class, 'index']);
    Route::get('/data', [PermohonanController::class, 'data']);
    Route::post('/data', [PermohonanController::class, 'storeData']);
    Route::get('/bukti', [PermohonanController::class, 'bukti']);
});

Route::group(['middleware' => "auth"], function () {
    Route::get("/dashboard", function () {
        return view('layouts.dashboard');
    });

    Route::resource('/mata-pelajaran', MataPelajaranController::class)->except('show');
});