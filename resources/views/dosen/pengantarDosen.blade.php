@extends('layouts.layouts-dosen')

@section('content')
    <h2 class="mb-4">Dokumen Pengantar KKN</h2>

    <table class="table table-striped table-hover dtabel">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Ketua</th>
                <th>Lokasi</th>
                <th>Job</th>
                <th>File</th>
            </tr>
        </thead>
        <tbody>
        <?php 
                            $no = 1;
                            ?>
                            @foreach($pengajuan_kkn as $proposal)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$proposal->getDataNamaKetua->nama}}</td>
                                <td>{{$proposal->nama_tempat}}</td>
                                <td>{{$proposal->job}}</td>
                                <td>
                                    <!-- <a href="/upload/proses" class="btn btn-info" role="button">Upload</a> -->
                                    
                                    <form action="{{route('uploadPengantar', $proposal->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf                    
                                    
                                        <div class="form-group">
                                            <input type="file" name="file_pengantar">
                                        </div>
                
                                        <input type="submit" value="Upload" class="btn btn-primary">
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
    </table>
@endsection
