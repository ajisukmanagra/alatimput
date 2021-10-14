@extends('layouts.app')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Mapel</h1>
            </div>

            <div class="section-body">
                <div class="mb-3">
                    <ol class="breadcrumb bg-primary">
                        <li class="breadcrumb-item"><a href="{{route('admin.home')}}" class="text-white text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('admin.mapel')}}" class="text-white text-decoration-none">Kelola Mapel</a></li>
                        <li class="breadcrumb-item"><a href="#" class="text-white text-decoration-none">Edit Mapel</a></li>
                    </ol>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-book"></i> Edit Mapel</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('admin.mapel.post') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{$mapel->id}}">
                            <div class="form-group">
                                <label>NAMA MAPEL</label>
                                <input type="text" name="nama_mapel" value="{{$mapel->nama_mapel}}" placeholder="Masukkan Nama Mapel" class="form-control @error('nama_mapel') is-invalid @enderror">

                                @error('nama_mapel')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>KODE MAPEL</label>
                                <input type="text" name="kode_mapel" value="{{$mapel->kode_mapel}}" placeholder="Masukkan Kode Mapel" class="form-control @error('kode_mapel') is-invalid @enderror">

                                @error('kode_mapel')
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