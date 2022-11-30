@extends('layouts.layouts')

@section('content')
    <h2 class="mb-4">Upload Laporan Mingguan</h2>

    <form role="form" action="{{route('updatelaporan', $user->id)}}" enctype="multipart/form-data" method="post">
        @csrf
        <div class="form-group">
            <input type="hidden" name="id_user" value="{{Auth::user()->id}}">
        </div>
        <div class="form-group">
            <label>Minggu</label>
            <input type="text" name="minggu" class="form-control" value="{{$user->minggu}}">
        </div>
        <div class="form-group">
            <label>Keterangan</label>
            <input type="text" name="keterangan" class="form-control" value="{{$user->keterangan}}">
        </div>
        <div class="form-group">
            <label>File</label>
            <img width="100px" src="{{ url('/pengumpulan_monitor/'.$user->file_mhs) }}" class="mb-3">
            <input type="file" name="file_mhs" class="form-control">
        </div>
        <button type="submit" class="btn btn-info btn-block">Simpan</button>
    </form>
@endsection
