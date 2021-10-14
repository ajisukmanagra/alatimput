@extends('layouts/templet')

@section('content')

<!-- Kin View na ku ijan di ubah deui we -->

<div class="container-fluid">
    <form action="/update-data/{{ $daftar->id }}" method="POST">
        @csrf
        {{ method_field('PUT') }}

        <div class="card">
            <div class="card-header">
                <h3>Ubah Data</h3>

                <button class="btn btn-success float-right" type="submit">Simpan</button>
            </div>

            <div class="card-body">
                <div class="form-group">
                    <label for="">NIS</label>
                    <input type="text" class="form-control" name="nis" value="{{ $daftar->nis }}">
                </div>

                <div class="form-group">
                    <label for="">NISN</label>
                    <input type="text" class="form-control" name="nisn" value="{{ $daftar->nisn }}">
                </div>

                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" class="form-control" name="nama" value="{{ $daftar->nama }}">
                </div>

                <div class="form-group">
                    <label for="">Jenis Kelamin</label>
                    <select name="jenis_kelamin" id="" class="form-control">
                        <option value="L" {{ $daftar->jenis_kelamin == 'L' ? "selected" : "" }} >Laki Laki</option>
                        <option value="P" {{ $daftar->jenis_kelamin == 'P' ? "selected" : "" }} >Perempuan</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Tempat</label>
                    <input type="text" class="form-control" name="tempat" value="{{ $daftar->tempat }}">
                </div>

                <div class="form-group">
                    <label for="">Tahun</label>
                    <input type="text" class="form-control" name="tahun" value="{{ $daftar->tahun }}">
                </div>

                <div class="form-group">
                    <label for="">Orang Tua</label>
                    <input type="text" class="form-control" name="orangtua" value="{{ $daftar->orangtua }}">
                </div>

                <div class="form-group">
                    <label for="">No Ijazah</label>
                    <input type="text" class="form-control" name="no_ijajah" value="{{ $daftar->no_ijajah }}">
                </div>

                <div class="form-group">
                    <label for="">No SKHUN</label>
                    <input type="text" class="form-control" name="no_skhun" value="{{ $daftar->no_skhun }}">
                </div>

                <div class="form-group">
                    <label for="">No Peserta</label>
                    <input type="text" class="form-control" name="no_peserta" value="{{ $daftar->no_peserta }}">
                </div>
                <div class="form-group">
                    <label for="">kelas</label>
                    <input type="text" class="form-control" name="kelas" value="{{ $daftar->kelas }}">
                </div>
            </div>
        </div>

    </form>
</div>

@endsection