<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisController extends Controller
{
    public function actionRegister(Request $request){
        
        $user = User::create([
            'nrp' => $request->nrp,
            'nama' => $request->nama,
            'role' => $request->role,
            'jurusan' => $request->jurusan,
            'kelas' => $request->kelas,
            'email' => $request->email,
            'password' => hash::make($request->password),
            'status' => $request->status
        ]);
        return redirect('/login');
    }
}
