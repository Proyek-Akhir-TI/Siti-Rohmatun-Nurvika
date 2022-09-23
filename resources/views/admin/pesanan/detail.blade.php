@extends('adminlte::page')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Detail Pesanan
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    @foreach ($pesanan as $item)
                    {{-- <li class="list-group-item"><b>Nama Konsumen: </b>{{$item->nama_konsumen}}</li>
                    <li class="list-group-item"><b>Alamat Pengiriman: </b>{{$item->alamat_pengiriman}}</li> --}}
                    <li class="list-group-item"><b>Nama Produk: </b>{{$item->nama_produk}}</li>
                    <li class="list-group-item"><b>Jumlah pesan: </b>{{$item->stok}}</li>
                    <li class="list-group-item"><b>Kondisi: </b>{{$item->kondisi}}</li>
                    <li class="list-group-item"><b>Deskripsi: </b>{{$item->deskripsi}}</li>
                    <li class="list-group-item"><b>Total Bayar: </b>{{$item->harga}}</li>
                    <li class="list-group-item"><b>Status Pembayaran: </b>{{$item->status}}</li>
                    <li class="list-group-item"><b>Bukti Transfer: </b><img src="{{asset('public/bukti_tf/'.$item->bukti_tf) }}" style="width:100%; height:200%;"></li>
                    {{-- <li class="list-group-item"><b>Opsi Pengiriman: </b>{{$item->opsi_pengiriman}}</li> --}}
                    @endforeach
                </ul>
            </div>
            <a class="btn btn-success mt-3" href="{{ url('/admin/pesanan') }}">Kembali</a>

        </div>
    </div>
</div>
@endsection
