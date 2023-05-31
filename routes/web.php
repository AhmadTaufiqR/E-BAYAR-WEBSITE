<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AdminController;
use App\Http\Controllers\API\Detail_PembayaranController;
use App\Http\Controllers\API\PembayaranController;
use App\Http\Controllers\API\SiswaController;
use App\Http\Controllers\DashboardController;
use App\Models\detail_pembayaran;
use Illuminate\Support\Facades\App;

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
    return view('layouts.error404');
});
Route::get('/landingpage', function () {
    return view('layouts.landingpage');
});
Route::post('/login', function () {
    return view('layouts.login');
});

Route::get('/register', function () {
   return view('layouts.register');
});

Route::get('/profile', function () {
    return view('layouts.profile');
});
Route::get('/login', function () {
    return view('layouts.login');
});

//logincek
Route::post('/login-check',[AdminController::class, 'login'])->name('login-check');

//mengambil database
Route::get('/dashboard',[Detail_PembayaranController::class,'dashboard']);
Route::get('/datasiswa', [SiswaController::class, 'index']);
Route::get('/dataadmin', [AdminController::class, 'index']);
Route::post('/post',[SiswaController::class, 'post'])->name('/post');
Route::post('/postAdmin',[AdminController::class, 'postAdmin'])->name('/postAdmin');


Route::get('/penarikan',[Detail_PembayaranController::class,'index']);
Route::get('/laporan',[Detail_PembayaranController::class,'laporan']);

//tanggungan spp
Route::get('/tanggunganspp',[PembayaranController::class,'index']);
Route::post('/postSpp',[PembayaranController::class, 'tanggunganspp'])->name('/postSpp');
Route::match(['get','post'],'/editSpp/{id}',[PembayaranController::class,'editSpp']);

//tanggungan uang gedung
Route::get('/tanggunganuanggedung',[PembayaranController::class,'index1']);
Route::post('/postUang',[PembayaranController::class, 'tanggunganuang'])->name('/postUang');
Route::match(['get','post'],'/editUang/{id}',[PembayaranController::class,'editUang']);


//siswa
Route::get('/siswa',[SiswaController::class,'siswa'])->name('/siswa');
Route::match(['get','post'],'/edit/{id}',[SiswaController::class,'edit']);
Route::get('/delete-siswa/{id}',[SiswaController::class,'destroysiswa'])->name('delete-siswa');
//admin
Route::get('/admin',[AdminController::class,'admin'])->name('/admin');
Route::match(['get','post'],'/editAdmin/{id}',[AdminController::class,'editAdmin']);
Route::get('/delete-admin/{id}',[AdminController::class,'destroyadmin'])->name('delete-admin');
//pdf
Route::get('/export-pdf', 'Detail_PembayaranController@exportPdf')->name('export.pdf');

//tanggungan
Route::get('/delete-spp/{id}',[PembayaranController::class,'destroyspp'])->name('delete-spp');
Route::get('/delete-uang/{id}',[PembayaranController::class,'destroyuang'])->name('delete-uang');


