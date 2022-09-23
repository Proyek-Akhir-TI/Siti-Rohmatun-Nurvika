@extends('adminlte::page')

@section('content')

<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Edit Kategori
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
            @foreach ($galeri as $item )
            <form method="post" action="{{ url('/admin/galeri/'.$item->id) }}" id="myForm" enctype="multipart/form-data">
            @method('PUT')
            @csrf

            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="name" class="form-control" value="{{ $item->name }}">
            </div>
            <div class="form-group">
                <label>Dokumentasi</label>
                <input type="file" name="dokumentasi" class="form-control" value="{{ $item->dokumentasi }}">
            </div>
            <div class="form-group">
                <label>Tempat</label>
                <input type="text" name="tempat" class="form-control" value="{{ $item->keterangan }}">
            </div>
            <div class="form-group">
                <label>Jenis Bantuan</label>
                <input type="text" name="jenis_bantuan" class="form-control" value="{{ $item->keterangan }}">
            </div>
            <div class="form-group">
                <label>Jumlah Bantuan</label>
                <input type="text" name="jumlah" class="form-control" value="{{ $item->keterangan }}">
            </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
