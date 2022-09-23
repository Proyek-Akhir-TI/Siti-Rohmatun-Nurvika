@extends('adminlte::page')

@section('content')
<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <a class="btn btn-success mt-3 mb-5" href="{{ url('/admin/produk/') }}">Kembali</a>
            <div class="card-header">
            Tambah Produk
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
            <form method="post" action="{{ url('/admin/produk/') }}" id="myForm" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nama">gambar produk</label>
                <input type="file" name="gambar_produk" class="form-control" id="name" >
                <label for="nama">gambar detail</label>
                <input type="file" name="gambar_detail" class="form-control" id="name" >
                <label for="nama">gambar detail 1</label>
                <input type="file" name="gdetail1" class="form-control" id="name" >
                <label for="nama">gambar detail 2</label>
                <input type="file" name="gdetail2" class="form-control" id="name" >
                <label for="nama">nama produk</label>
                <input type="text" name="nama_produk" class="form-control" id="name" >
                <label for="nama">deskripsi</label>
                <input type="text" name="deskripsi" class="form-control" id="name" >
                <label for="nama">kondisi</label>
                <input type="text" name="kondisi" class="form-control" id="name" >
                <label for="nama">ukuran</label>
                <input type="text" name="ukuran" class="form-control" id="name" >
                <label for="nama">stok</label>
                <input type="text" name="stok" class="form-control" id="name" >
                <label for="nama">harga</label>
                <input type="text" name="harga" class="form-control" id="name" >
                <label for="nama">harga asli</label>
                <input type="text" name="harga_asli" class="form-control" id="name" >
                <label for="nama">donasi</label>
                <input type="text" name="donasi" class="form-control" id="name" >
            </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
    </div>
@endsection
