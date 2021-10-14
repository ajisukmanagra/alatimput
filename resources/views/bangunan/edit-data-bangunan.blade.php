@extends('layouts/templet')

@section('content')

<!-- Kin View na ku ijan di ubah deui we -->

<div class="container-fluid">
    <form action="/bangunan/edit/update-data/{{ $bangunan->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        {{ method_field('PUT') }}

        <div class="card">
            <div class="card-header">
                <h3>Ubah Data</h3>

                <button class="btn btn-success float-right" type="submit">Simpan</button>
            </div>

            <div class="card-body">
                <div class="form-group">
                    <label for="">NAMA BANGUNAN</label>
                    <input type="text" class="form-control" name="Jenis_ruangan" value="{{ $bangunan->Jenis_ruangan }}">
                </div>
                </div>
                 <div class="card-body">
                <div class="form-group">
                    <label for="">TANGGAL PEMBUATAN</label>
                    <input type="text" class="form-control" name="tanggal_pembuatan" value="{{ $bangunan->tanggal_pembuatan }}">
                </div>
             <label>PHOTO:</label>
            <div class="row">
                <div class="col-md-6">
                    <input type="file" name="foto" class="form-control" value="{{ $bangunan->foto }}">
            </div>
        </div>
        </div>
           </div>
    </form>
</div>

@endsection
