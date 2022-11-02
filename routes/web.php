<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\KompetensiController;
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

Route::get('/beranda', [HomeController::class, 'beranda']);
Route::get('/visi-misi', [HomeController::class, 'visiMisi']);
Route::get('/permohonan-kompetensi', [KompetensiController::class, 'index']);
Route::get('/permohonan-kompetensi/data', [KompetensiController::class, 'data']);
Route::post('/permohonan-kompetensi/data', [KompetensiController::class, 'storeData']);
Route::get('/permohonan-kompetensi/bukti', [KompetensiController::class, 'bukti']);