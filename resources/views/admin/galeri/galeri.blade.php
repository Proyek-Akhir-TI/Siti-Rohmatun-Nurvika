@extends('adminlte::page')

@section('content')
<main>
    <div class="text">
      <h5 class="text-center">Galeri</h5>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="float-right my-2">
      <a class="btn btn-success" href="{{ url('/admin/galeri/create') }}"><i class="fas fa-fw fa-plus"></i> Masukkan Dokumentasi Baru</a>
    </div>
    <table class="table table-striped">
      <thead>
        <tr>
            <th></th>
            <th>No</th>
            <th>Nama</th>
            <th>Dokumentasi</th>
            <th>Tempat</th>
            <th>Jenis Bantuan</th>
            <th>Jumlah Bantuan</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($galeris as $galeri)
          <tr>
            <th scope="row"></th>
            <td>{{ $loop->iteration }}</td>
            <td>{{$galeri->name}}</td>
            <td><img src="{{asset('public/dokumentasi/'.$galeri->dokumentasi) }}" style="width: 60px;"></td>
            {{-- <td>{{$galeri->dokumentasi}}</td> --}}
            <td>{{$galeri->tempat}}</td>
            <td>{{$galeri->jenis_bantuan}}</td>
            <td>{{$galeri->jumlah}}</td>
            <td class="text-center d-flex">
                <a class="btn btn-info btn-sm mr-2" href="{{ route('galeri.show',$galeri->id) }}"><i class="fas fa-fw fa-eye"></i> Show</a>

                <a class="btn btn-primary btn-sm mr-2" href="{{ url('/admin/galeri/'.$galeri->id.'/edit') }}"><i class="fas fa-fw fa-pen"></i> Edit</a>
            <form action="{{ url('/admin/galeri/'.$galeri->id) }}" method="POST">
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
