@extends('layouts.layouts-dosen')

@push('css')
    <style>
    </style>
@endpush

@section('content')
    <h2 class="mb-4">Laporan Mingguan</h2>
    @if (session('berhasil'))
    <p class="text-success" role="alert">
        {{ session('berhasil') }}
    </p>
    @endif
    <table class="table table-striped table-hover dtabel">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Ketua</th>
                <th>Minggu</th>
                <th>Keterangan</th>
                <th>File</th>
                <th>Aksi</th>
                <th></th>
            </tr>
        </thead>
        <tbody>

            <?php
                $no = 1;
                    ?>
                @foreach($monitor as $data)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$data->getDataNamaKetua->nama}}</td>
                <td>{{$data->minggu}}</td>
                <td>{{$data->keterangan}}</td>
                <td><img width="100px" src="{{ url('/pengumpulan_monitor/'.$data->file_mhs) }}" class="mb-3"></td>
                <td>
                    <a href="{{ url('/pengumpulan_monitor/'.$data->file_mhs) }}" class="btn btn-info" role="button" download>Download</a>
                </td>
            </tr>
            @endforeach


        </tbody>
    </table>
@endsection
