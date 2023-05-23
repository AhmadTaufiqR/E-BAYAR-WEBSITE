<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AdminController;

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
    return view('layouts.landingpage');
});
Route::get('/landingpage', function () {
    return view('layouts.landingpage');
});
Route::post('/login', function () {
    return view('layouts.login');
});
Route::post('/login-check',[AdminController::class, 'login'])->name('login-check');

Route::get('/dashboard', function () {
    return view('layouts.dashboard');
});
Route::get('/register', function () {
   return view('layouts.register');
});
Route::get('/datasiswa', [App\Http\Controllers\API\SiswaController::class, 'index']);
Route::get('/dataadmin', [App\Http\Controllers\API\AdminController::class, 'index']);
Route::get('/tanggunganspp', function () {
    return view('layouts.tanggunganspp');
});
Route::get('/tanggunganuanggedung', function () {
    return view('layouts.tanggunganuanggedung');
});
Route::get('/penarikan', function () {
    return view('layouts.penarikan');
});
Route::get('/laporan', function () {
    return view('layouts.laporan');
});
Route::get('/profile', function () {
    return view('layouts.profile');
});


Route::get('/login', function () {
    return view('layouts.login');
});

Route::get('/register', function () {
    return view('layouts.register');
});

