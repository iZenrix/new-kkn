<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\monitoring_mh;
use App\Models\Pengajuan_kkn;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class MahasiswaController extends Controller
{
    public function dashboard(){
        return view('mahasiswa.dashboard');
    }

    public function listPengajuan(){
        $pengajuan_kkn = Pengajuan_kkn::where('id_user', '=', Auth::user()->id)->paginate(5);
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
        $monitor = monitoring_mh::where('id_user', '=', Auth::user()->id)->paginate(5);
        $user = User::where('id_user', '=', Auth::user()->id);
        return view('mahasiswa.laporan.list', compact('monitor', 'user'));
    }

    public function Delete($id){
        $file_proposal = monitoring_mh::find($id);
        $file_proposal->delete();
        return redirect()->route('laporListMahasiswa');
}

    public function laporanForm(){
        return view('mahasiswa.laporan.form');
    }

    public function contact(){
        return view('mahasiswa.contact');
    }
}
