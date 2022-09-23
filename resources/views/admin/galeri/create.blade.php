@extends('adminlte::page')

@section('content')
<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <a class="btn btn-success mt-3 mb-5" href="{{ url('/admin/galeri/') }}">Kembali</a>
            <div class="card-header">
            Tambah Dokumentasi
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" action="{{ url('/admin/galeri/') }}" id="myForm" enctype="multipart/form-data" >
            @csrf
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="name" class="form-control">
                    <label>Dokumentasi</label>
                    <input type="file" name="dokumentasi" class="form-control">
                    <label>Tempat</label>
                    <input type="text" name="tempat" class="form-control">
                    <label>Jenis Bantuan</label>
                    <input type="text" name="jenis_bantuan" class="form-control">
                    <label>Jumlah Bantuan</label>
                    <input type="text" name="jumlah" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
    </div>
@endsection
