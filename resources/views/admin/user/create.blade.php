@extends('adminlte::page')

@section('content')
<div class="container mt-5">

    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <a class="btn btn-success mt-3 mb-5" href="{{ url('/admin/user/') }}">Kembali</a>
            <div class="card-header">
            Tambah User
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
            <form method="post" action="{{ url('/admin/user/') }}" id="myForm" enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="name" class="form-control" >
                    <label>Email</label>
                    <input type="text" name="email" class="form-control">
                    <label>No Telepon/WA</label>
                    <input type="text" name="no_telepon" class="form-control" >
                    <label>Alamat</label>
                    <input type="text" name="alamat" class="form-control" >
                    <label>Foto</label>
                    <input type="file" name="foto" class="form-control" >
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" >
                    <label>Konfirmasi Password</label>
                    <input type="password" name="konfirm_password" class="form-control" >
                    @php
                    $roles=DB::table('users')->select('role')->limit(2)->get();
                    @endphp
                    <div class="form-group ">
                        <label class="form-label ">Role</label>
                        <select name="role" class="form-control" value="{{ old('role') }}">
                            <option value="">~pilih role~</option>
                            @foreach($roles as $role)
                            <option value="{{$role->role}}">{{$role->role}}</option>
                        @endforeach
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            </div>
        </div>
    </div>
    </div>
@endsection
