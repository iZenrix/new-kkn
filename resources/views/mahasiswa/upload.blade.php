@extends('layouts.layouts')

@section('content')
    <h2 class="mb-4">Form Pengajuan KKN</h2>

    <form action="{{route('pengajuanadd')}}" method="post">

        @csrf
        <div class="form-group">
            <label>Nama Tempat</label>
            <input type="text" name="nama_tempat" class="form-control">
        </div>
        <div class="form-group">
            <label>Job</label>
            <input type="text" name="job" class="form-control">
        </div>
        <div class="form-group">
            <label>Proposal</label>
            <input type="file" name="terbit_bk" class="form-control">
        </div>
        <button type="submit" class="btn btn-info btn-block">Submit</button>
    </form>
@endsection
