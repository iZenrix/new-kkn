@extends('layouts.layouts')

@push('css')
    <style>
    </style>
@endpush

@section('content')
<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                <!-- <button type="submit" class="btn btn-info" action="upload.upload">Tambah</button> -->
                <a href="addpengajuan">  
                    <input type="submit" value="Tambah"/>  
                </a>
                <h2 class="mb-4">List Pengajuan</h2>
                    <table class="table table-striped table-hover dtabel">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Tempat</th>
                                <th>Job</th>
                                <th>Proposal</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            $no = 1;
                                ?>
                        @foreach($pengajuan_kkn as $proposal)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$proposal->nama_tempat}}</td>
                                <td>{{$proposal->job}}</td>
                                <td>{{$proposal->file_proposal}}</td>
                                @if ($proposal->status == 0)
                                    <td class="text-primary">
                                        PENDING
                                    </td>
                                @elseif($proposal->status == 1)
                                <td class="text-success">
                                    APRROVED
                                </td>
                                @else
                                    <td class="text-danger">
                                        REJECTED
                                    </td>
                                @endif
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection