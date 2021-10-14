@extends('layouts.app')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Tambah Kelas</h1>
            </div>

            <div class="section-body">
                <div class="mb-3">
                    <ol class="breadcrumb bg-primary">
                        <li class="breadcrumb-item"><a href="{{route('admin.home')}}" class="text-white text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('admin.kelas')}}" class="text-white text-decoration-none">Kelola Kelas</a></li>
                        <li class="breadcrumb-item"><a href="#" class="text-white text-decoration-none">Tambah Kelas</a></li>
                    </ol>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-tags"></i> Tambah Kelas</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('admin.kelas.post') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label>NAMA KELAS</label>
                                <input type="text" name="nama_kelas" value="{{ old('nama_kelas') }}" placeholder="Masukkan Nama Kelas" class="form-control @error('nama_kelas') is-invalid @enderror">

                                @error('nama_kelas')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>WALIKELAS</label>
                                <select name="walikelas_id" id="" class="form-control @error('walikelas_id') is-invalid @enderror">
                                    <option value="">Pilih Walikelas</option>
                                    @foreach($walikelas as $w)
                                        <option value="{{$w->id}}">{{$w->nama_walikelas}}</option>
                                    @endforeach
                                </select>

                                @error('walikelas_id')
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
@stop