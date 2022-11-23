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

                            <tr>
                                <td>
                                    01
                                </td>
                                <td>
                                    Dau, Malang
                                </td>
                                <td>
                                    Memasang Baliho, Mendaki Pohon
                                </td>
                                <td>
                                    proposal1.pdf
                                </td>
                                <td>
                                    REJECTED
                                </td>
                            </tr>

                        </tbody>
                        <tbody>

                            <tr>
                                <td>
                                    02
                                </td>
                                <td>
                                    Kejawan Gebang, Sby
                                </td>
                                <td>
                                    Bersih Desa, Membantu Atok
                                </td>
                                <td>
                                    proposal2.pdf
                                </td>
                                <td>
                                    APPROVED
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection