@extends('layouts.layouts-admin')

@section('content')
    <h2 class="mb-4">Tambah Dosen</h2>

    <form action="{{route('tambahdosen')}}" enctype="multipart/form-data" method="post">

        @csrf
        <div class="form-group">
            <label>NIP</label>
            <input type="text" placeholder="NIP" name="nrp" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Nama</label>
            <input type="text" placeholder="Nama" name="nama" class="form-control" required>
        </div>
        <input type="hidden" placeholder="role" name="role" value="dosen" />
        <div class="form-group">
            <label>Jurusan</label>
            <input type="text" placeholder="Jurusan" name="jurusan" class="form-control" required>
        </div>
        <input type="hidden" placeholder="Kelas" name="kelas" value="null" />
        <div class="form-group">
            <label>Email</label>
            <input type="email" placeholder="Email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" placeholder="Password" name="password" class="form-control" required>
        </div>
        <input type="hidden" placeholder="status" name="status" value="1"/>
        <button type="submit" class="btn btn-info btn-block">Submit</button>
    </form>
@endsection