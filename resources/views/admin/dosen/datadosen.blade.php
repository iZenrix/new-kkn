@extends('layouts.layouts-admin')

@push('css')
    <style>
    </style>
@endpush

@section('content')
<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                <button type="submit" class="btn btn-info">Tambah</button>
                    <table class="table table-hover table-bordered table-stripped" id="example2">
                        <thead>
                        <tr>
                            <th>NRP</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Status</th>
                            <th>Hapus</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($dosen as $user)
                            <tr>
                                <td>{{$user->nrp}}</td>
                                <td>{{$user->nama}}</td>
                                <td>{{$user->email}}</td>
                                <?php if($user->status == 1){
                                    $user->status = 'ACTIVE';
                                }?>
                                <td>{{$user->role}}</td>
                                <td>{{$user->status}}</td>     
                                <td><form action="{{route('delete', $user->id)}}" method="post">
                                @csrf
                                <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection