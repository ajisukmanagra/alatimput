@extends('layouts.app')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Surat</h1>
            </div>

            <div class="section-body">
                <div class="mb-3">
                    <ol class="breadcrumb bg-primary">
                        <li class="breadcrumb-item"><a href="{{route('admin.home')}}" class="text-white text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('admin.surat')}}" class="text-white text-decoration-none">Kelola Surat</a></li>
                        <li class="breadcrumb-item"><a href="#" class="text-white text-decoration-none">Edit Surat</a></li>
                    </ol>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-envelope"></i> Edit Surat</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('admin.surat.post') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{$surat->id}}">
                            <div class="form-group">
                                <label>JUDUL</label>
                                <input type="text" name="judul" value="{{ $surat->judul }}" placeholder="Masukkan Judul" class="form-control @error('judul') is-invalid @enderror">

                                @error('judul')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>KETERANGAN</label>
                                <input type="text" name="keterangan" value="{{ $surat->keterangan }}" placeholder="Masukkan Keterangan" class="form-control @error('keterangan') is-invalid @enderror">

                                @error('keterangan')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">FILE</label>
                                <input type="file" name="file" class="form-control" value="{{ $surat->file }}">
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