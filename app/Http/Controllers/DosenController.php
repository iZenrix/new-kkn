<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function dashboard(){
        return view('dosen.dashboard');
    }
    public function listPengajuan(){
        return view('dosen.listPengajuan');
    }
    public function pengantarDosen(){
        return view('dosen.pengantarDosen');
    }
    public function laporanList(){
        return view('dosen.laporan.list');
    }

}
