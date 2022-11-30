@extends('layouts.layouts-dosen')

@section('content')
    @if(session('success'))
                    <p class="text-success" role="success" >
                            {{ session('success') }}
                    </p>
    @elseif(session('danger'))
                    <p class="text-danger" role="danger" >
                            {{ session('danger') }}
                    </p>
    @endif
    <h2 class="mb-4">Form Pengajuan KKN</h2>
    <table class="table table-striped table-hover dtabel">
        <thead>
            <tr>
                <th>No</th>
                <th>Ketua Kelompok</th>
                <th>Lokasi</th>
                <th>Proposal</th>
                <th>Aksi</th>
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
                                <td>{{$proposal->file_proposal}}</td>

                                <td>
                                <form action="{{route('approvestatus', $proposal->id)}}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-success">Approve</button>
                                </form>
                                </td>
                                
                                <td>
                                <form action="{{route('rejectstatus', $proposal->id)}}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-danger">Reject</button>
                                </form>
                                </td>

                            </tr>
                        @endforeach
                        </tbody>
    </table>
@endsection