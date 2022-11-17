<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesController;

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

Route::get('/tes', [TesController::class, 'index'])->name('index');

Route::get('/p', function () {
    return view('mahasiswa.dashboard');
});

Route::get('/q', function () {
    return view('mahasiswa.upload');
});

Route::get('/r', function () {
    return view('mahasiswa.pengantar');
});

Route::get('/s', function () {
    return view('mahasiswa.laporan.list');
});

Route::get('/t', function () {
    return view('mahasiswa.laporan.form');
});

Route::get('/u', function () {
    return view('mahasiswa.contact');
});


// dosen

Route::get('/a', function () {
    return view('dosen.dashboard');
});

Route::get('/b', function () {
    return view('dosen.upload');
});

Route::get('/c', function () {
    return view('dosen.pengantar');
});

Route::get('/d', function () {
    return view('dosen.laporan.list');
});

Route::get('/e', function () {
    return view('dosen.laporan.form');
});

Route::get('/f', function () {
    return view('dosen.contact');
});


// Login

Route::get('/x', function () {
    return view('login.login');
});