@extends('layouts.templet')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
                <h1>Edit Akun Pegawai</h1>
            </div>

            <div class="section-body">
                <div class="mb-3">
                    <ol class="breadcrumb bg-primary">
                        <li class="breadcrumb-item"><a href="{{route('admin')}}" class="text-white text-decoration-none">Admin</a></li>
                        <li class="breadcrumb-item"><a href="{{route('akun.pegawai.index')}}" class="text-white text-decoration-none">Kelola Akun Pegawai</a></li>
                        <li class="breadcrumb-item"><a href="#" class="text-white text-decoration-none">Edit Akun Pegawai</a></li>
                    </ol>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-tags"></i> Edit Akun Pegawai</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('akun.pegawai.post') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{$akun->id}}">
                            <div class="form-group">
                                <label>NAMA</label>
                                <input type="text" name="name" value="{{$akun->name}}" placeholder="Masukkan Nama Akun" class="form-control @error('name') is-invalid @enderror">

                                @error('name')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>USERNAME</label>
                                <input type="text" name="username" value="{{$akun->username}}" placeholder="Masukkan Username" class="form-control @error('username') is-invalid @enderror">

                                @error('username')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>EMAIL</label>
                                <input type="email" name="email" value="{{$akun->email}}" placeholder="Masukkan Email" class="form-control @error('email') is-invalid @enderror">

                                @error('email')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>PASSWORD</label>
                                <input type="password" name="password" placeholder="Masukkan Password Baru" class="form-control @error('password') is-invalid @enderror">

                                @error('password')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>LEVEL</label>
                                <select name="level" class="form-control @error('level') is-invalid @enderror">
                                    <option value="">Pilih Level</option>
                                    <option value="Pegawai" @if($akun->level == 'Pegawai') selected @endif>Pegawai</option>
                                </select>

                                @error('level')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <button class="btn btn-primary mr-1 btn-submit" type="submit"><i class="fa fa-paper-plane"></i> SIMPAN</button>
                            <button class="btn btn-warning btn-reset" type="reset"><i class="fa fa-redo"></i> RESET</button>

                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@stop