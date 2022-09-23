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
            @foreach ($pesanan as $item )
            <form method="post" action="{{ url('/admin/pesanan/'.$item->id) }}" id="myForm" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="name">Nama Konsumen</label>
                <input type="text" name="nama_konsumen" class="form-control" id="name" value="{{$item->nama_konsumen }}">
            </div>
            <div class="form-group">
                <label for="email">Alamat Pengiriman</label>
                <input type="text" name="alamat_pengiriman" class="form-control" id="email" value="{{$item->alamat_pengiriman }}">
            </div>
            <div class="form-group">
                <label for="name">Nama Produk</label>
                <input type="text" name="nama_produk" class="form-control" id="name" value="{{$item->nama_produk}}">
            </div>
            <div class="form-group">
                <label for="email">Ukuran</label>
                <input type="text" name="ukuran" class="form-control" id="email" value="{{$item->ukuran }}">
            </div>
            <div class="form-group">
                <label for="name">Variasi</label>
                <input type="text" name="variasi" class="form-control" id="name" value="{{ $item->variasi }}">
            </div>
            <div class="form-group">
                <label for="email">Jumlah</label>
                <input type="text" name="jumlah" class="form-control" id="email" value="{{ $item->jumlah }}">
            </div>
            <div class="form-group">
                <label for="name">Total Bayar</label>
                <input type="text" name="total_bayar" class="form-control" id="name" value="{{ $item->total_bayar }}">
            </div>
            <div class="form-group">
                <label for="email">Tanggal Pesan</label>
                <input type="text" name="tanggal_pesan" class="form-control" id="email" value="{{ $item->tanggal_pesan }}">
            </div>
            <div class="form-group">
                <label for="name">Catatan Pesanan</label>
                <input type="text" name="catatan_pesanan" class="form-control" id="name" value="{{ $item->catatan_pesanan }}">
            </div>
            <div class="form-group">
                <label for="email">Opsi Pengiriman</label>
                <input type="text" name="opsi_pengiriman" class="form-control" id="email" value="{{ $item->opsi_pengiriman }}">
            </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
