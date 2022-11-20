<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesController extends Controller
{
    public function index(){
        return view('layouts.layouts');
    }

    public function HalamanLogin(){
        return view('login.login');
    }
}
