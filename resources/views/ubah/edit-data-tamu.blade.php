@extends('layouts/templet')

@section('content')

<!-- Kin View na ku ijan di ubah deui we -->

<div class="container-fluid">
    <form action="/data/tamu/update-data/{{ $tamu->id }}" method="POST">
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
                    <input type="text" class="form-control" name="Nama" value="{{ $tamu->Nama }}">
                </div>
                <div class="form-group">
                    <label for="">NIK KTP</label>
                    <input type="text" class="form-control" name="Kontak" value="{{ $tamu->Kontak }}">
                </div>

                <div class="form-group">
                    <label for="">NO HP</label>
                    <input type="text" class="form-control" name="Asal_tempat" value="{{ $tamu->Asal_tempat }}">
                </div>
             <div class="form-group">
                    <label for="">Jenis Kelamin</label>
                    <select name="jenis_kelamin" id="" class="form-control">
                        <option value="L" {{ $tamu->jenis_kelamin == 'L' ? "selected" : "" }} >Laki Laki</option>
                        <option value="P" {{ $tamu->jenis_kelamin == 'P' ? "selected" : "" }} >Perempuan</option>
                    </select>
                </div>
        
                <div class="form-group">
                    <label for="">Alamat</label>
                    <input type="text" class="form-control" name="Keterangan" value="{{ $tamu->Keterangan }}">
                </div>
                <div class="form-group">
                    <label for="">Deskripsi</label>
                    <input type="text" class="form-control" name="tujuan" value="{{ $tamu->tujuan }}">
                </div>
            </div>
        </div>

    </form>
</div>

@endsection