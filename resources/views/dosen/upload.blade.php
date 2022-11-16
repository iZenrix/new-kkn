@extends('layouts.layouts-dosen')

@section('content')
    <h2 class="mb-4">Form Pengajuan KKN</h2>

    <table class="table table-striped table-hover dtabel">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Ketua</th>
                <th>Lokasi</th>
                <th>Minggu</th>
                <th>File</th>
                <th>Aksi</th>
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
                    1
                </td>
                <td>
                    <a href="#" class="btn btn-info" role="button">Download</a>
                </td>
                <td>
                    <a href="editform.php" class="btn btn-success" role="button">Validasi</a>
                    <a href="delete.php" class="btn btn-danger" role="button">Tolak</a>
                </td>
            </tr>

        </tbody>
    </table>
@endsection
