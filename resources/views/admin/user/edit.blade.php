@extends('adminlte::page')

@section('content')

<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Edit User
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

            <form method="post" action="{{ url('/admin/user/'.$user->id) }}" id="myForm" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="name" class="form-control" value="{{$user->name}}">
            </div>
            <div class="form-group">
                <label >Email</label>
                <input type="text" name="email" class="form-control" value="{{$user->email }}">
            </div>
            <div class="form-group">
                <label>No Telepon/WA</label>
                <input type="text" name="no_telepon" class="form-control" value="{{$user->no_telepon}}">
            </div>
            <div class="form-group">
                <label >Alamat</label>
                <input type="text" name="alamat" class="form-control" value="{{$user->alamat }}">
            </div>
            <div class="form-group">
                <label>Foto</label>
                <input type="file" name="foto" class="form-control" value="{{ $user->foto }}">
            </div>
            <div class="form-group">
                <label >Password</label>
                <input type="password" name="password" class="form-control" value="{{ $user->password }}">
            </div>
            <div class="form-group">
                <label>Konfirmasi Password</label>
                <input type="password" name="konfirm_password" class="form-control" value="{{ $user->password }}">
            </div>
            @php 
            $roles=DB::table('users')->select('role')->where('id',$user->id)->get();
            // dd($roles);
            @endphp
            <div class="form-group ">
                <label class="form-label ">Role</label>
                <select name="role" class="form-control">
                    @foreach($roles as $role)
                    <option value="{{$role->role}}" {{(($role->role=='admin') ? 'selected' : '')}}>Admin</option>
                    <option value="{{$role->role}}" {{(($role->role=='konsumen') ? 'selected' : '')}}>Konsumen</option>
                @endforeach
                </select>
            </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection
