<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesController;
use App\Http\Controllers\RegisController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\MonitoringController;  
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

//admin
Route::get('/dashboardadmin', [AdminController::class, 'dashboard'])->name('dashboardadmin')->middleware(['auth', 'role:admin', 'status:1']);
Route::post('/dashboardadmin/{id}', [AdminController::class, 'actived'])->name('editstatus')->middleware(['auth', 'role:admin', 'status:1']);
Route::post('/dashboardadmin/delete/{id}', [AdminController::class, 'delete'])->name('delete')->middleware(['auth', 'role:admin', 'status:1']);
Route::get('/datamahasiswa', [AdminController::class, 'datamahasiswa'])->name('datamahasiswa')->middleware(['auth', 'role:admin', 'status:1']);
Route::get('/datadosen', [AdminController::class, 'datadosen'])->name('datadosen')->middleware(['auth', 'role:admin', 'status:1']);
Route::get('/datauser', [AdminController::class, 'datauser'])->name('datauser')->middleware(['auth', 'role:admin', 'status:1']);
Route::get('/tambahdosen', [AdminController::class, 'pagedosen'])->name('pagetambahdosen')->middleware(['auth', 'role:admin', 'status:1']);
Route::post('/tambahdosen/signin/', [AdminController::class, 'tambahdosen'])->name('tambahdosen')->middleware(['auth', 'role:admin', 'status:1']);

//mahasiswa

Route::get('/tes', [TesController::class, 'index'])->name('index')->middleware(['auth', 'role:admin', 'status:1']);
Route::get('/dashboardmahasiswa', [MahasiswaController::class, 'dashboard'])->name('dashboardMahasiswa')->middleware(['auth', 'role:mahasiswa', 'status:1']);
Route::get('/listpengajuan', [MahasiswaController::class, 'listPengajuan'])->name('listPengajuan')->middleware(['auth', 'role:mahasiswa', 'status:1']);
Route::get('/addpengajuan', [MahasiswaController::class, 'addPengajuan'])->name('addPengajuan')->middleware(['auth', 'role:mahasiswa', 'status:1']);
Route::post('addpengajuan/action', [PengajuanController::class, 'store'])->name('pengajuanadd');
Route::get('/pengantarmahasiswa', [MahasiswaController::class, 'pengantar'])->name('pengantarMahasiswa')->middleware(['auth', 'role:mahasiswa', 'status:1']);
Route::get('/laporlistmahasiswa', [MahasiswaController::class, 'laporanList'])->name('laporListMahasiswa')->middleware(['auth', 'role:mahasiswa', 'status:1']);
Route::post('/laporlistmahasiswa/delete/{id}', [MahasiswaController::class, 'Delete'])->name('deletelist')->middleware(['auth', 'role:mahasiswa', 'status:1']);
Route::get('/laporformmahasiswa', [MahasiswaController::class, 'laporanForm'])->name('laporFormMahasiswa')->middleware(['auth', 'role:mahasiswa', 'status:1']);
Route::post('laporanform/action', [MonitoringController::class, 'store'])->name('laporanform')->middleware(['auth', 'role:mahasiswa', 'status:1']);
Route::get('laporanform/edit/{id}', [MonitoringController::class, 'Edit'])->name('editlaporan')->middleware(['auth', 'role:mahasiswa', 'status:1']);
Route::post('laporanform/edit/{id}', [MonitoringController::class, 'updateProposal'])->name('updatelaporan')->middleware(['auth', 'role:mahasiswa', 'status:1']);
Route::get('/contactmahasiswa', [MahasiswaController::class, 'contact'])->name('contactMahasiswa')->middleware(['auth', 'role:mahasiswa', 'status:1']);


// dosen

Route::get('/dashboarddosen', [DosenController::class, 'dashboard'])->name('dashboardDosen')->middleware(['auth', 'role:dosen', 'status:1']);
Route::get('/listpengajuankkn', [DosenController::class, 'listPengajuankkn'])->name('listPengajuankkn')->middleware(['auth', 'role:dosen', 'status:1']);
Route::get('/laporanList', [DosenController::class, 'laporanList'])->name('laporanlistDosen')->middleware(['auth', 'role:dosen', 'status:1']);
Route::post('/laporanList/{id}', [DosenController::class, 'approved'])->name('approvestatus')->middleware(['auth', 'role:dosen', 'status:1']);
Route::post('/laporanList/reject/{id}', [DosenController::class, 'rejected'])->name('rejectstatus')->middleware(['auth', 'role:dosen', 'status:1']);
Route::get('/pengantardosen', [DosenController::class, 'pengantarDosen'])->name('pengantarDosen')->middleware(['auth', 'role:dosen', 'status:1']);
Route::post('/pengantardosen/upload/proses/{id}', [DosenController::class, 'uploadPengantar'])->name('uploadPengantar')->middleware(['auth', 'role:dosen', 'status:1']);

// Login

Route::get('/login', [TesController::class, 'HalamanLogin'])->name('halamanlogin');
Route::post('login/action', [LoginController::class, 'actionLogin'])->name('postLogin');
Route::post('regis/action', [RegisController::class, 'actionRegister'])->name('actionRegister');

//Logout
Route::post('logout', [LoginController::class, 'actionLogout'])->name('logout')->middleware(['auth']);


Route::get('/addDosen', function () {
    return view('admin.dosen.tambahdosen');
});

Route::get('/kknkuy', function () {
    return view('landingPage.index');
});