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
    return view('layouts.landingpage');
});
Route::get('/landingpage', function () {
    return view('layouts.landingpage');
});
Route::get('/login', function () {
    return view('layouts.login');
});
Route::get('/dashboard', function () {
    return view('layouts.dashboard');
});
Route::get('/register', function () {
   return view('layouts.register');
});
Route::get('/datasiswa', function () {
    return view('layouts.datasiswa');
});
Route::get('/dataadmin', function () {
    return view('layouts.dataadmin');
});
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

