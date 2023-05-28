<?php

use App\Http\Controllers\API\SiswaController;
use App\Http\Controllers\API\AdminController;
use App\Http\Controllers\API\PembayaranController;
use App\Http\Controllers\API\Detail_PembayaranController;
use App\Http\Controllers\API\AngkatanController;
use App\Http\Controllers\API\KelasController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//API
//route siswa
Route::post('/siswa/login', [SiswaController::class, 'login']);
Route::get('/siswa', [SiswaController::class, 'index']);
Route::get('/siswa/all', [SiswaController::class, 'getAll']);
Route::post('/siswa/store', [SiswaController::class, 'store']);
Route::get('/siswa/show/{id}', [SiswaController::class, 'show']);
Route::post('/siswa/update/{id}', [SiswaController::class, 'update']);
Route::get('/siswa/destroy/{id}', [SiswaController::class, 'destroy']);

//route admin
Route::post('/admin/login', [AdminController::class, 'login']);
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/all', [AdminController::class, 'getAll']);
Route::post('/admin/store', [AdminController::class, 'store']);
Route::get('/admin/show/{id}', [AdminController::class, 'show']);
Route::post('/admin/update/{id}', [AdminController::class, 'update']);
Route::get('/admin/destroy/{id}', [AdminController::class, 'destroy']);

//route pembayaran
Route::get('/pembayaran', [PembayaranController::class, 'index']);
Route::get('/pembayaran/all', [PembayaranController::class, 'getAll']);
Route::get('/pembayaran/all_tahun_spp/{tahun}', [PembayaranController::class, 'all_tahun_spp']);
Route::get('/pembayaran/getAllSpp', [PembayaranController::class, 'get_tahun_spp']);
Route::get('/pembayaran/all_ug/{tahun}', [PembayaranController::class, 'all_ug']);
Route::post('/pembayaran/store', [PembayaranController::class, 'store']);
Route::get('/pembayaran/show/{id}', [PembayaranController::class, 'show']);
Route::post('/pembayaran/update/{id}', [PembayaranController::class, 'update']);
Route::get('/pembayaran/destroy/{id}', [PembayaranController::class, 'destroy']);

//route detail_pembayaran
Route::get('/detail_pembayaran', [Detail_PembayaranController::class, 'index']);
Route::get('/detail_pembayaran/all', [Detail_PembayaranController::class, 'getAll']);
Route::post('/detail_pembayaran/store', [Detail_PembayaranController::class, 'store']);
Route::get('/detail_pembayaran/show/{id}', [Detail_PembayaranController::class, 'show']);
Route::post('/detail_pembayaran/update/{id}', [Detail_PembayaranController::class, 'update']);
Route::get('/detail_pembayaran/destroy/{id}', [Detail_PembayaranController::class, 'destroy']);

//route angkatan
Route::get('/angkatan', [AngkatanController::class, 'index']);
Route::get('/angkatan/all', [AngkatanController::class, 'getAll']);
Route::post('/angkatan/store', [AngkatanController::class, 'store']);
Route::get('/angkatan/show/{id}', [AngkatanController::class, 'show']);
Route::post('/angkatan/update/{id}', [AngkatanController::class, 'update']);
Route::get('/angkatan/destroy/{id}', [AngkatanController::class, 'destroy']);

//route kelas
Route::get('/kelas', [KelasController::class, 'index']);
Route::get('/kelas/all', [KelasController::class, 'getAll']);
Route::post('/kelas/store', [KelasController::class, 'store']);
Route::get('/kelas/show/{id}', [KelasController::class, 'show']);
Route::post('/kelas/update/{id}', [KelasController::class, 'update']);
Route::get('/kelas/destroy/{id}', [KelasController::class, 'destroy']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
