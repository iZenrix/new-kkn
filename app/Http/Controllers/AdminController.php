<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pengajuan_kkn;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{
    public function dashboard(){
        $pengguna = collect(DB::SELECT("SELECT count(id) as jumlah from users"))->where('status', '=', '1')->first();
        $dosen = collect(DB::SELECT("SELECT count(id) as jumlah from users"))->Where('role', '=', 'dosen')->where('status', '=', '1')->first();
        $mahasiswa = collect(DB::SELECT("SELECT count(id)  from users WHERE role='mahasiswa' AND status='1'"))->first();
        $data_mahasiswa = User::where('role', '=', 'mahasiswa')->where('status', '=', '0')->paginate(5);
        
        return view('admin.dashboard.dashboard', compact('data_mahasiswa', 'pengguna', 'dosen', 'mahasiswa'));
    }

    public function actived($id){
        User:: where('id', $id) 
        ->update(['status'=> 1]);
        
        return redirect()->route('dashboardadmin');
    }

    public function delete($id){
        
        $data_mahasiswa = User::find($id);
        $data_mahasiswa->delete();
       
        return redirect()->route('dashboardadmin');
    }

    public function datamahasiswa(){
        $mahasiswa = User::where('role', '=', 'mahasiswa')->where('status', '=', '1')->paginate(5);
       
        return view('admin.mahasiswa.datamahasiswa', compact('mahasiswa'));
    }

    public function datadosen(){
        $dosen = User::where('role', '=', 'dosen')->where('status', '=', '1')->paginate(5);
        
        return view('admin.dosen.datadosen', compact('dosen'));
    }
    
    public function datauser(){
        $user = User::where('status', '=', '1')->OrderBy('role')->OrderBy('id','asc')->paginate(5);
       
        return view('admin.user.datauser', compact('user'));
    }

    public function tambahdosen(request $request){
        $dosen = User::create([
            'nrp' => $request->nrp,
            'nama' => $request->nama,
            'role' => $request->role,
            'jurusan' => $request->jurusan,
            'kelas' => $request->kelas,
            'email' => $request->email,
            'password' => hash::make($request->password),
            'status' => $request->status
        ]);
        return redirect()->route('datadosen')->with('success', 'Akun dosen telah terdaftar dan aktif');
    }

    public function pagedosen(){
        return view('login.daftarDosen');
    }

}
