<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pengajuan_kkn;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\monitoring_mh;
use App\Models\User;

class DosenController extends Controller
{
    public function dashboard(){
        return view('dosen.dashboard');
    }

    public function listPengajuankkn(){
        $pengajuan_kkn = Pengajuan_kkn::where('status', '=', '0')->paginate(5);

        return view('dosen.listPengajuan', compact('pengajuan_kkn'));
    }

    public function approved($id){
        Pengajuan_kkn:: where('id', $id) 
        ->update(['status'=> 1]);

        return redirect()->route('listPengajuankkn')->with('success', 'Proposal Pengajuan Diterima!');
    }

    public function rejected($id){
        Pengajuan_kkn:: where('id', $id) 
        ->update(['status'=> 2]);

        return redirect()->route('listPengajuankkn')->with('danger', 'Proposal Pengajuan Ditolak!');
    }

    public function pengantarDosen(){
        $pengajuan_kkn = Pengajuan_kkn::where('id_user', '=', '11')->where('status', '=', '1')->paginate(5);

        return view('dosen.pengantarDosen', compact('pengajuan_kkn'));
    }

    // public function uploadPengantar(Request $request,Proposal $id){
          
    //     //validate form
    //     $this->validate($request, [
    //         'file_pengantar'     => 'required',
    //     ]);

    //     //check if image is uploaded
    //     if ($request->hasFile('image')) {

    //         //upload new image
    //         $image = $request->file('image');
    //         $image->storeAs('public/posts', $image->hashName());

    //         //delete old image
    //         Storage::delete('public/posts/'.$post->image);

    //         //update post with new image
    //         $post->update([
    //             'image'     => $image->hashName(),
    //         ]);

    //     } 
    //         //           // isi dengan nama folder tempat kemana file diupload
    //         // $tujuan_upload = 'data_file';
     
    //         //         // upload file
    //         // $file->move(public_path('pengumpulan_pengantar'),$file_proposal->getClientOriginalName());

    //         return redirect()->route('listPengajuan')->with('message', 'Pengajuan created!');
    // }

    public function laporanList(){
        $monitor = monitoring_mh::select('*')->paginate(5);
        $user = User::where('id_user', '=', Auth::user()->id);
        return view('dosen.laporan.list', compact('monitor', 'user'));
        // return view('dosen.laporan.list');
    }

    public function laporanform(){
        return view('dosen.laporan.form');
    }

}
