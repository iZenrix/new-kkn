@extends('layouts.layouts-dosen')

@push('css')
    <style>
    </style>
@endpush

@section('content')
    <h2 class="mb-4">List Kelompok</h2>
    <table class="table table-striped table-hover dtabel">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Ketua</th>
                <th>Lokasi</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <td>
                    01
                </td>
                <td>
                    Supri
                </td>
                <td>
                    Malang
                </td>
                <td>
                    ✅
                </td>
            </tr>

        </tbody>
        <tbody>

            <tr>
                <td>
                    02
                </td>
                <td>
                    Mali
                </td>
                <td>
                    Nganjuk
                </td>
                <td>
                    ❌
                </td>
            </tr>

        </tbody>
    </table>
@endsection
