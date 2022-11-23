<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function dashboard(){
        return view('dosen.dashboard');
    }
    public function upload(){
        return view('dosen.upload');
    }
    public function pengantar(){
        return view('dosen.pengantar');
    }
    public function laporanList(){
        return view('dosen.pengantar.list');
    }
    public function laporanform(){
        return view('dosen.laporan.form');
    }
    public function contact(){
        return view('dosen.contact');
    }
}
