<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pengajuan_kkn;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function dashboard(){
        return view('mahasiswa.dashboard');
    }

    public function listPengajuan(){
        $pengajuan_kkn = Pengajuan_kkn::where('id_user', '=', '11')->where('status', '=', '0')->paginate(5);
        // $pengajuan_kkn = collect(DB::SELECT("SELECT count(id) as jumlah from pengajuan_kkns"))->where('id_user', '=', '$id_user')->first();
        return view('mahasiswa.upload.list', compact('pengajuan_kkn'));
    }
    public function addPengajuan(){
        return view('mahasiswa.upload.upload');
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
