<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function Login(){
        if (Auth::check() && Auth::user()->status="1"){
            return redirect('/tes');
        }else{
            return view('login.login');
        }
    }

    public function actionlogin(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];
        if (Auth::Attempt($data)) {
            if($request->user()->role == 'mahasiswa' && $request->user()->status == '0'){
                return redirect()->route('halamanlogin')->with('fail', 'Akun belum aktif Harap hubungi Admin');
            }else if($request->user()->role == 'admin' && $request->user()->status == '1'){
                    return redirect()->route('dashboardadmin');
            }else if($request->user()->role == 'mahasiswa' && $request->user()->status == '1'){
                    return redirect()->route('dashboardMahasiswa');
            }else if($request->user()->role == 'dosen' && $request->user()->status == '1'){
                return redirect()->route('dashboardDosen');
            }else if($request->user()->role == 'dosen' && $request->user()->status == '0'){
                return view('login.login');
            }else{
                return view('login.login');
            }
        }else{
            return  redirect()->route('halamanlogin')->with('fail', 'Email atau Password anda salah');
        }
    }

    public function actionlogout()
    {
        Auth::logout();
        return redirect()->route('halamanlogin');
    }
}
