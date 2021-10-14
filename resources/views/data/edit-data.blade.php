@extends('layouts/templet')

@section('content')

<!-- Kin View na ku ijan di ubah deui we -->

<div class="container-fluid">
    <form action="/data/update-data/{{ $keluar->id }}" method="POST">
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
                    <input type="text" class="form-control" name="Nis" value="{{ $keluar->Nis }}">
                </div>

                <div class="form-group">
                    <label for="">NAMA</label>
                    <input type="text" class="form-control" name="Nama" value="{{ $keluar->Nama }}">
                </div>

                <div class="form-group">
                    <label for="">TANGGAL LAHIR</label>
                    <input type="text" class="form-control" name="Tgl" value="{{ $keluar->Tgl }}">
                </div>

                <div class="form-group">
                    <label for="">JENIS KELAMIN</label>
                    <select name="jenis_kelamin" id="" class="form-control">
                        <option value="L" {{ $keluar->jenis_kelamin == 'L' ? "selected" : "" }} >Laki Laki</option>
                        <option value="P" {{ $keluar->jenis_kelamin == 'P' ? "selected" : "" }} >Perempuan</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="">KELAS</label>
                    <input type="text" class="form-control" name="kls" value="{{ $keluar->kls }}">
                </div>

                <div class="form-group">
                    <label for="">NAMA ORANG TUA</label>
                    <input type="text" class="form-control" name="ortu" value="{{ $keluar->ortu }}">
                </div>

                <div class="form-group">
                    <label for="">KETERANGAN</label>
                    <input type="text" class="form-control" name="Keterangan" value="{{ $keluar->Keterangan }}">
                </div>
            </div>
        </div>

    </form>
</div>

@endsection