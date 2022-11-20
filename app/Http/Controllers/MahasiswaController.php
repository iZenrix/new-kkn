<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function dashboard(){
        return view('mahasiswa.dashboard');
    }

    public function upload(){
        return view('mahasiswa.upload');
    }

    public function pengantar(){
        return view('mahasiswa.pengantar');
    }

    public function laporanList(){
        return view('mahasiswa.laporan.list');
    }

    public function laporanForm(){
        return view('mahasiswa.laporan.form');
    }

    public function contact(){
        return view('mahasiswa.contact');
    }
}
