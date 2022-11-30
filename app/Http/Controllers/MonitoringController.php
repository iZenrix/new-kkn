<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\monitoring_mh;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Models\User;
use Illuminate\Support\Facades\File;

class MonitoringController extends Controller
{
    public function store(Request $request){
        $monitor = new monitoring_mh();
        $monitor->id_user=$request->id_user;
        $monitor->keterangan=$request->keterangan;
        $monitor->minggu=$request->iterasi;
        $image = $request->file('file_mhs');
        $ext = $image->getClientOriginalExtension();
        $file_name = $image->getClientOriginalName();
        $img = Image::make($image->path());
        $img->resize('180', '120')
            ->save(public_path('pengumpulan_monitor') . $file_name);
        $image->move('pengumpulan_monitor', $file_name);
        $monitor->file_mhs = $file_name;
        $monitor->save();
        return redirect()->route('laporListMahasiswa')->with('berhasil', 'Laporan telah dibuat');
    }

    public function Edit($id){
        $user = monitoring_mh::find($id); 
        return view('mahasiswa.laporan.edit', compact('user'));
    }

    public function updateProposal(Request $request, $id)
    {
        $user = monitoring_mh::findOrFail($id);
        if($request->hasFile('file_mhs')){
            $file_path = public_path('pengumpulan_monitor/'.$user['file_mhs']);
            // $destination = 'pengumpulan_monitor/' . $user->file_mhs;
            if(File::exists($user->file_mhs)){
                File::delete($user->file_mhs);
            }
            $image = $request->file('file_mhs');


            $extension = $image->getClientOriginalName();

            // $filename = $image->getClientOriginalName();
            $filename = time(). '.' . $extension;
            $image->move('pengumpulan_monitor/', $filename);

            $user->file_mhs = $filename;
        }

        $user->update();

        return redirect()->route('laporListMahasiswa')->with('berhasil', 'Laporan telah dibuat');
    }
}
