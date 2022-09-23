@extends('adminlte::page')

@section('content')
<main>
    <div class="text">
      <h5 class="text-center">Daftar User</h5>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="float-right my-2">
      <a class="btn btn-success" href="{{ url('/admin/user/create') }}"><i class="fas fa-fw fa-plus"></i> Masukkan User Baru</a>
    </div>
    <table class="table table-striped">
      <thead>
        <tr>
            <th></th>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>No Telepon/WA</th>
            <th>Alamat</th>
            <th>Foto</th>
            <th>Role</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($users as $user)
          <tr>
            <th scope="row"></th>
            <td>{{ $loop->iteration }}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->no_telepon}}</td>
            <td>{{$user->alamat}}</td>
            <td><img src="{{asset('public/foto/'.$user->foto)}}" style="width: 60px;"></td>
            <td>{{$user->role}}</td>

            <td class="text-center">
                {{-- <a class="btn btn-primary btn-xs" href="{{ route('user.show',$user->id) }}"><i class="fas fa-fw fa-eye"></i> Show</a> --}}

                <a class="btn btn-secondary btn-xs" href="{{ url('/admin/user/'.$user->id.'/edit') }}"><i class="fas fa-fw fa-pen"></i> Edit</a>

            <form action="{{ url('/admin/user/'.$user->id) }}" method="POST">
              @method('DELETE')
              @csrf


                <button type="submit" class="btn btn-warning btn-xs" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"><i class="fas fa-fw fa-trash"></i> Delete</button>
            </form>
        </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </main>
@endsection
