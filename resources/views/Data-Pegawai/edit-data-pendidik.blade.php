@extends('layouts/templet')

@section('content')

<!-- Kin View na ku ijan di ubah deui we -->

<div class="container-fluid">
    <form action="/Data-Pegawai/update-data/{{ $guru->id }}" method="POST">
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
                    <input type="text" class="form-control" name="nama" value="{{ $guru->nama }}">
                </div>

                <div class="form-group">
                    <label for="">NIP</label>
                    <input type="text" class="form-control" name="nip" value="{{ $guru->nip }}">
                </div>

                <div class="form-group">
                    <label for="">PANGKAT</label>
                    <input type="text" class="form-control" name="pangkat" value="{{ $guru->pangkat }}">
                </div>

                <div class="form-group">
                    <label for="">JABATAN</label>
                    <input type="text" class="form-control" name="jabatan" value="{{ $guru->jabatan }}">
                </div>

                <div class="form-group">
                    <label for="">MASA KERJA</label>
                    <input type="text" class="form-control" name="masakerja" value="{{ $guru->masakerja }}">
                </div>

                <div class="form-group">
                    <label for=""> PENDIDIKAN</label>
                    <input type="text" class="form-control" name="pendidikan" value="{{ $guru->pendidikan }}">
                </div>

                <div class="form-group">
                    <label for="">TANGGAL LAHIR</label>
                    <input type="text" class="form-control" name="tgl" value="{{ $guru->tgl }}">
                </div>

                <div class="form-group">
                    <label for="">MULAI KERJA</label>
                    <input type="text" class="form-control" name="mulai_kerja" value="{{ $guru->mulai_kerja }}">
                </div>

                <div class="form-group">
                    <label for="">MUTASI DIRI</label>
                    <input type="text" class="form-control" name="mutasi" value="{{ $guru->mutasi }}">
                </div>
                <div class="form-group">
                    <label for="">DISINIH SEJAK</label>
                    <input type="text" class="form-control" name="disini_sejak" value="{{ $guru->disini_sejak }}">
                </div>
                <div class="form-group">
                    <label for="">E-MAIL</label>
                    <input type="text" class="form-control" name="email" value="{{ $guru->email }}">
                </div>
                <div class="form-group">
                    <label for="">NUPTK</label>
                    <input type="text" class="form-control" name="nuptk" value="{{ $guru->nuptk }}">
                </div>
                <div class="form-group">
                    <label for="">NRG</label>
                    <input type="text" class="form-control" name="nrg" value="{{ $guru->nrg }}">
                </div>
            </div>
        </div>

    </form>
</div>

@endsection