@extends('adminlte::page')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
             Detail laporan
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    @foreach ($laporan as $item)
                    <li class="list-group-item"><b>Nama Produk      : </b>{{$item->nama_produk}}</li>
                    <li class="list-group-item"><b>Harga Jual       : </b>{{$item->harga_jual}}</li>
                    <li class="list-group-item"><b>Harga Asli       : </b>{{$item->harga_asli}}</li>
                    <li class="list-group-item"><b>Donasi           : </b>{{$item->donasi}}</li>
                    @endforeach
                </ul>
            </div>
            <a class="btn btn-success mt-3" href="{{ url('/admin/laporan') }}">Kembali</a>

        </div>
    </div>
</div>
@endsection
