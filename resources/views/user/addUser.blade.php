@extends('layouts.app')

@section('title', 'Tambah User')

@section('content')
<form action="{{ route('addUser.tambah.save') }}" method="post">
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">{{ isset($produk)?'Form Edit Produk':'Form Tambah Produk' }}</h6>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="nama">Input Data (NAMA[spasi]USIA[spasi]KOTA)</label>
                        <input type="text" class="form-control" id="data" name="data" value="{{ isset($produk) ? $produk->data : '' }}">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="" class="btn btn-danger">Batal</a>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection