<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengajuan_kkn;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\File;
class PengajuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mahasiswa.upload');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $proposal = new pengajuan_kkn();
        $proposal->id_user=$request->id_user;
        $proposal->nama_tempat=$request->nama_tempat;
        $proposal->status=$request->status;
        $proposal->job=$request->job;
        $file_proposal = $request->file('file_proposal');        
        $test = $file_proposal->move(public_path('pengumpulan_proposal'),$file_proposal->getClientOriginalName());
        $proposal->file_proposal = $test->getFilename();
        $proposal->save();
        
        // $pengajuan_kkns = collect(DB::SELECT("SELECT count(id) as jumlah from pengajuan_kkns"))->where('id_user', '=', '$id_user')->first();

        return redirect()->route('listPengajuan')->with('message', 'Pengajuan created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
