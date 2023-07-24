@extends('layouts.app')

@section('tab', 'Tambah User | OPERATS')

@section('title', 'User')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
    </div>
    <div class="card-body">
        <a href="{{ route('addUser.tambah') }}" class="btn btn-primary mb-3">Tambahkan User</a>
        <div class="table-responsive">
            <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>City</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php($no = 1)
                    @foreach ($user as $row)
                    <tr>
                        <th>{{ $no++ }}</th>
                        <td>{{ $row->NAME }}</td>
                        <td>{{ $row->AGE }}</td>
                        <td>{{ $row->CITY }}</td>
                        <td style="max-width:95px">
                            <a href="" class="btn btn-warning">Edit</a>
                            <a href="" class="btn btn-danger" id="sweetDelete">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection