@extends('adminlte::page')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Detail Produk
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    @foreach ($produk as $item)
                    <li class="list-group-item"><b>Gambar Produk : </b><img src="{{asset('public/gambar_produk/'.$item->gambar_produk) }}" style="width:100px; height:100px;"></li>
                    <li class="list-group-item"><b>Gambar detail : </b><img src="{{asset('public/gambar_detail/'.$item->gambar_detail) }}" style="width:100px; height:100px;"></li>
                    <li class="list-group-item"><b>Gambar detail 1 : </b><img src="{{asset('public/gdetail1/'.$item->gdetail1) }}" style="width:100px; height:100px;"></li>
                    <li class="list-group-item"><b>Gambar detail 2: </b><img src="{{asset('public/gdetail2/'.$item->gdetail2) }}" style="width:100px; height:100px;"></li>
                    <li class="list-group-item"><b>Nama produk: </b>{{$item->nama_produk}}</li>
                    <li class="list-group-item"><b>deskripsi: </b>{{$item->deskripsi}}</li>
                    <li class="list-group-item"><b>kondisi: </b>{{$item->kondisi}}</li>
                    <li class="list-group-item"><b>ukuran: </b>{{$item->ukuran}}</li>
                    <li class="list-group-item"><b>stok: </b>{{$item->stok}}</li>
                    <li class="list-group-item"><b>harga: </b>{{$item->harga}}</li>
                    @endforeach
                </ul>
            </div>
            <a class="btn btn-success mt-3" href="{{ url('/admin/produk') }}">Kembali</a>

        </div>
    </div>
</div>
@endsection
