@extends('adminlte::page')

@section('content')
<main>
    <div class="text">
      <h5 class="text-center">Laporan Penjualan</h5>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="float-right my-2">
      <a class="btn btn-success" href="{{ url('/admin/laporan/create') }}"><i class="fas fa-fw fa-plus"></i> Masukkan Dokumentasi Baru</a>
    </div>
    <table class="table table-striped">
      <thead>
        <tr>
            <th></th>
            <th>No</th>
            <th>Tanggal Pesan</th>
            <th>Nama Produk</th>
            <th>Harga Jual</th>
            <th>Harga Kulak</th>
            <th>Donasi</th>
        </thead>
        <tbody>
          @foreach ($laporan as $pesanan)
          <tr>
            <th scope="row"></th>
            <td>{{ $loop->iteration }}</td>
            <td>{{$pesanan->created_at }}</td>
            <td>{{$pesanan->nama_produk}}</td>
            <td>{{$pesanan->harga}}</td>
            <td>{{$pesanan->harga_asli}}</td>
            <td>{{$pesanan->donasi}}</td>

            <td class="text-center d-flex">
                {{-- <a class="btn btn-info btn-sm mr-2" href="{{ route('laporan.show',$laporan->id) }}"><i class="fas fa-fw fa-eye"></i> Show</a>

                <a class="btn btn-primary btn-sm mr-2" href="{{ url('/admin/laporan/'.$laporan->id.'/edit') }}"><i class="fas fa-fw fa-pen"></i> Edit</a> --}}
                <form action="{{ url('/admin/pesanan/' . $pesanan->id) }}" method="POST">
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
