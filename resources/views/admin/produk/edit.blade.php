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
                @foreach ($produk as $item )
                <form method="post" action="{{ url('/admin/produk/'.$item->id) }}" id="myForm" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <img src="{{asset('public/gambar_produk/'.$item->gambar_produk) }}" style="width:100px; height:100px;">
                            <div class="form-group">
                                <label for="name">Gambar Produk</label>
                                <input type="file" name="gambar_produk" class="form-control" id="name"
                                    value="{{ $item->gambar_produk }}">
                            <div class="form-group">
                                <label for="name">Gambar Detail</label>
                                <input type="file" name="gambar_detail" class="form-control" id="name"
                                    value="{{ $item->gambar_detail }}">
                            <div class="form-group">
                                        <label for="name">Gambar Detail 1</label>
                                        <input type="file" name="gdetail1" class="form-control" id="name"
                                            value="{{ $item->gdetail1 }}">
                            <div class="form-group">
                                        <label for="name">Gambar Detail 2</label>
                                        <input type="file" name="gdetail2" class="form-control" id="name"
                                            value="{{ $item->gdetail2 }}">

                            <div class="form-group">
                                <label for="email">Nama produk</label>
                                <input type="text" name="nama_produk" class="form-control" id="email" value="{{ $item->nama_produk}}">
                            </div>
                            <div class="form-group">
                                <label for="writer">deskripsi</label>
                                <input type="text" name="deskripsi" class="form-control" id="password" value="{{ $item->deskripsi}}">
                            </div>
                            <div class="form-group">
                                <label for="writer">kondisi</label>
                                <input type="text" name="kondisi" class="form-control" id="password" value="{{ $item->kondisi}}">
                            </div>
                            <div class="form-group">
                                <label for="writer">ukuran</label>
                                <input type="text" name="ukuran" class="form-control" id="password" value="{{ $item->ukuran}}">
                            </div>
                            <div class="form-group">
                                <label for="writer">stok</label>
                                <input type="text" name="stok" class="form-control" id="password" value="{{ $item->stok}}">
                            </div>
                            <div class="form-group">
                                <label for="writer">harga</label>
                                <input type="text" name="harga" class="form-control" id="password" value="{{ $item->harga}}">
                            </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
