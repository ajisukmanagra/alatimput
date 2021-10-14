@extends('layouts/templet')

@section('content')

<!-- Kin View na ku ijan di ubah deui we -->

<div class="container-fluid">
    <form action="/keuangan/gajih/update-data/{{ $gajih->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        {{ method_field('PUT') }}

        <div class="card">
            <div class="card-header">
                <h3>Ubah Data</h3>

                <button class="btn btn-success float-right" type="submit">Simpan</button>
            </div>

            <div class="card-body">
                <div class="form-group">
                    <label for="">NAMA</label>
                    <input type="text" class="form-control" name="nama" value="{{ $gajih->nama }}">
                </div>
             <label>PHOTO:</label>
            <div class="row">
                <div class="col-md-6">
                    <input type="file" name="foto" class="form-control" value="{{ $gajih->foto }}">
                </div>
     
            </div>
             <div class="form-group">
                    <label for="">Jenis Kelamin</label>
                    <select name="jenis_kelamin" id="" class="form-control">
                        <option value="L" {{ $gajih->jenis_kelamin == 'L' ? "selected" : "" }} >Laki Laki</option>
                        <option value="P" {{ $gajih->jenis_kelamin == 'P' ? "selected" : "" }} >Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">TIPE</label>
                    <input type="text" class="form-control" name="nik" value="{{ $gajih->nik }}">
                </div>

                <div class="form-group">
                    <label for="">JABATAN</label>
                    <input type="text" class="form-control" name="jabatan" value="{{ $gajih->jabatan }}">
                </div>
                <div class="form-group">
                    <label for="">HARI KERJA</label>
                    <input type="text" class="form-control" name="hari_kerja" value="{{ $gajih->hari_kerja }}">
                </div>
                <div class="form-group">
                    <label for="">GAJIH PERHARI</label>
                    <input type="text" class="form-control" name="gajih_perhari" value="{{ $gajih->gajih_perhari }}">
                </div>

                <div class="form-group">
                    <label for="">TUNJANGAN/BONUS</label>
                    <input type="text" class="form-control" name="tunjangan" value="{{ $gajih->tunjangan }}">
                </div>
                <div class="form-group">
                    <label for="">GAJIH PERBULAN</label>
                    <input type="text" class="form-control" name="gajih_perbulan" value="{{ $gajih->gajih_perbulan }}">
                </div>
            </div>
        </div>

    </form>
</div>

@endsection