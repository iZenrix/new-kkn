@extends('layouts.layouts')

@section('content')
    <h2 class="mb-4">Form Pengajuan KKN</h2>

    <form action="{{route('pengajuanadd')}}" enctype="multipart/form-data" method="post">

        @csrf
        <div class="form-group">
            <input type="hidden" name="id_user" value="{{Auth::user()->id}}">
            <label>Nama Tempat</label>
            <input type="text" name="nama_tempat" class="form-control">
        </div>
        <div class="form-group">
            <label>Job</label>
            <input type="text" name="job" class="form-control">
        </div>
        <div class="form-group">
            <label>Proposal</label>
            <input type="file" name="file_proposal" class="form-control">
            <input type="hidden" name="status" value="0">
        </div>
        <button type="submit" class="btn btn-info btn-block">Submit</button>
    </form>
@endsection
