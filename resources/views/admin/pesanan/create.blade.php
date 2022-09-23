@extends('adminlte::page')

@section('content')
<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <a class="btn btn-success mt-3 mb-5" href="{{ url('/admin/pesanan/') }}">Kembali</a>
            <div class="card-header">
            Tambah Pesanan
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
            <form method="post" action="{{ url('/admin/pesanan/') }}" id="myForm" enctype="multipart/form-data" >
            @csrf
            <div class="form-group">
                <label for="nama">Nama Konsumen</label>
                <input type="text" name="nama_konsumen" class="form-control" id="name" >
                <label for="nama">Alamat Pengiriman </label>
                <input type="text" name="alamat_pengiriman" class="form-control" id="name" >
                <label for="nama">Nama Produk</label>
                <input type="text" name="nama_produk" class="form-control" id="name" >
                <label for="nama">Ukuran </label>
                <input type="text" name="ukuran" class="form-control" id="name" >
                <label for="nama">Variasi</label>
                <input type="text" name="variasi" class="form-control" id="name" >
                <label for="nama">Jumlah</label>
                <input type="text" name="jumlah" class="form-control" id="name" >
                <label for="nama">Total Bayar</label>
                <input type="text" name="total_bayar" class="form-control" id="name" >
                <label for="nama">Tanggal Pesan </label>
                <input type="text" name="tanggal_pesan" class="form-control" id="name" >
                <label for="nama">Catatan Pesanan </label>
                <input type="text" name="catatan_pesanan" class="form-control" id="name" >
                <label for="nama">Opsi Pengiriman </label>
                <input type="text" name="opsi_pengiriman" class="form-control" id="name" >
            </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                {{ __('pesanan') }}
            </form>
            </div>
        </div>
    </div>
    </div>
@endsection
