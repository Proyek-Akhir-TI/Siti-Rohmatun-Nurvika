@extends('adminlte::page')

@section('content')
<main>
    <div class="text">
      <h5 class="text-center">Produk</h5>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="float-right my-2">
      <a class="btn btn-success" href="{{ url('/admin/produk/create') }}"><i class="fas fa-fw fa-plus"></i> Masukkan Dokumentasi Baru</a>
    </div>
    <table class="table table-striped teble-responsive">
      <thead>
        <tr>
            <th></th>
            <th>No</th>
            <th>Gambar Produk</th>
            <th>Gambar detail</th>
            <th>Gambar detail 1</th>
            <th>Gambar detail 2</th>
            <th>Nama Produk</th>
            {{-- <th>Deskripsi</th> --}}
            <th>Kondisi</th>
            <th>Ukuran</th>
            <th>Stok</th>
            <th>Harga</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($produks as $produk)
          <tr>
            <th scope="row"></th>
            <td>{{ $loop->iteration }}</td>
            <td><img src="{{asset('public/gambar_produk/'.$produk->gambar_produk)}}" style="width: 60px;"></td>
            <td><img src="{{asset('public/gambar_detail/'.$produk->gambar_detail)}}" style="width: 60px;"></td>
            <td><img src="{{asset('public/gdetail1/'.$produk->gdetail1)}}" style="width: 60px;"></td>
            <td><img src="{{asset('public/gdetail2/'.$produk->gdetail2)}}" style="width: 60px;"></td>
            {{-- <td>{{ $produk->gambar_produk }}</td> --}}
            <td>{{$produk->nama_produk}}</td>
            {{-- <td>{{$produk->deskripsi}}</td> --}}
            <td>{{$produk->kondisi}}</td>
            <td>{{$produk->ukuran}}</td>
            <td>{{$produk->stok}}</td>
            <td>{{$produk->harga}}</td>
            <td class="text-center d-flex">
                <a class="btn btn-info btn-sm mr-2" href="{{ route('produk.show',$produk->id) }}"><i class="fas fa-fw fa-eye"></i> Show</a>

                <a class="btn btn-primary btn-sm mr-2" href="{{ url('/admin/produk/'.$produk->id.'/edit') }}"><i class="fas fa-fw fa-pen"></i> Edit</a>
            <form action="{{ url('/admin/produk/'.$produk->id) }}" method="POST">
              @method('DELETE')
              @csrf
                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="fas fa-fw fa-trash"></i> Delete</button>
            </form>
        </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </main>
@endsection
