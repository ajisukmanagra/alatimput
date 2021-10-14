@extends('layouts/templet')

@section('content')

<!-- Kin View na ku ijan di ubah deui we -->

<div class="container-fluid">
    <form action="/Data-Pegawai/tenaga-pendidik/update-data/{{ $tenaga->id }}" method="POST" enctype="multipart/form-data">
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
                    <input type="text" class="form-control" name="nama" value="{{ $tenaga->nama }}">
                </div>
             <label>PHOTO:</label>
            <div class="row">
                <div class="col-md-6">
                    <input type="file" name="foto" class="form-control" value="{{ $tenaga->foto }}">
                </div>
     
            </div>
             <div class="form-group">
                    <label for="">Jenis Kelamin</label>
                    <select name="jenis_kelamin" id="" class="form-control">
                        <option value="L" {{ $tenaga->jenis_kelamin == 'L' ? "selected" : "" }} >Laki Laki</option>
                        <option value="P" {{ $tenaga->jenis_kelamin == 'P' ? "selected" : "" }} >Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">TIPE</label>
                    <input type="text" class="form-control" name="tipe" value="{{ $tenaga->tipe }}">
                </div>

                <div class="form-group">
                    <label for="">PEGAWAI KERJA</label>
                    <input type="text" class="form-control" name="pegawai" value="{{ $tenaga->pegawai }}">
                </div>
                <div class="form-group">
                    <label for="">SETATUS</label>
                    <input type="text" class="form-control" name="setatus" value="{{ $tenaga->setatus }}">
                </div>
            </div>
        </div>

    </form>
</div>

@endsection