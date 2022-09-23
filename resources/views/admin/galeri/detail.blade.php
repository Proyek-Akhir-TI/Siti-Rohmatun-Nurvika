@extends('adminlte::page')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Detail Galeri
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    @foreach ($galeri as $item)
                    <li class="list-group-item"><b>Nama: </b>{{$item->name}}</li>
                    <li class="list-group-item"><b>Dokumentasi      : </b><img src="{{asset('public/dokumentasi/'.$item->dokumentasi) }}" style="width:100px; height:100px;"></li>
                    <li class="list-group-item"><b>Tempat           : </b>{{$item->tempat}}</li>
                    <li class="list-group-item"><b>Jenis Bantuan    : </b>{{$item->jenis_bantuan}}</li>
                    <li class="list-group-item"><b>Jumlah Bantuan   : </b>{{$item->jumlah}}</li>
                    @endforeach
                </ul>
            </div>
            <a class="btn btn-success mt-3" href="{{ url('/admin/galeri') }}">Kembali</a>

        </div>
    </div>
</div>
@endsection
