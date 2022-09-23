@extends('adminlte::page')

@section('content')
<main>
    <div class="text">
      <h5 class="text-center">Pesanan</h5>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="float-right my-2">
      <a class="btn btn-success" href="{{ url('/admin/pesanan/create') }}"><i class="fas fa-fw fa-plus"></i> Masukkan Pesanan Baru</a>
    </div>
    <table class="table table-striped">
      <thead>
        <tr>
            <th></th>
            <th>No</th>
            <th>Nama Pembeli</th>
            <th>Nama Produk</th>
            <th>stok</th>
            <th>size</th>
            <th>kondisi</th>
            {{-- <th>deskripspi</th> --}}
            <th>harga</th>
            <th>Alamat</th>
            <th>Status Pembayaran</th>
            @if (auth()->user()->role == 'admin')
            <th>Validasi</th>
            <th>Bukti Pembayaran</th>
            @endif

        </tr>
        </thead>
        <tbody>
          @foreach ($pesanans as $pesanan)
          <tr>
            <th scope="row"></th>
            <td>{{ $loop->iteration }}</td>
            <td>{{$pesanan->user->name}}</td>
            <td>{{$pesanan->nama_produk}}</td>
            <td>{{$pesanan->stok}}</td>
            <td>{{$pesanan->size}}</td>
            <td>{{$pesanan->kondisi}}</td>
            {{-- <td>{{$pesanan->deskripsi}}</td> --}}
            <td>{{$pesanan->harga}}</td>
            <td>{{$pesanan->user->alamat}}</td>
            @if (auth()->user()->role == 'admin')
            <td>{{$pesanan->status_pembayaran ?'Tervalidasi':'Menunggu Validasi'}}</td>
            @if ($pesanan->status_pembayaran === 0)
            <td><a class="btn btn-primary btn-xs" href="{{ route('validasi',$pesanan->id) }}">Validasi</a></td>
            @endif
            @if ($pesanan->status_pembayaran === 1)
                <td></td>
            @endif
            @endif
            <td><img src="{{asset('public/bukti_tf/'.$pesanan->bukti_tf) }}" style="width: 60px;"></td>
            @if (auth()->user()->role == 'admin')
            <td class="text-center">
                <form action="{{ url('/admin/pesanan/'.$pesanan->id) }}" method="POST">
                  @method('DELETE')
                  @csrf


                    <a class="btn btn-primary btn-xs" href="{{ route('pesanan.show',$pesanan->id) }}"><i class="fas fa-fw fa-eye"></i> Show</a>

                    <a class="btn btn-secondary btn-xs" href="{{ url('/admin/pesanan/'.$pesanan->id.'/edit') }}"><i class="fas fa-fw fa-pen"></i> Edit</a>

                    <button type="submit" class="btn btn-warning btn-xs" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="fas fa-fw fa-trash"></i> Delete</button>
                </form>
            </td>
        @endif

        </tr>
        @endforeach
      </tbody>
    </table>
  </main>
@endsection
