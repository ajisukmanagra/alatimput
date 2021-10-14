@extends('layouts/templet')

@section('content')

<!-- Kin View na ku ijan di ubah deui we -->

<div class="container-fluid">
    <form action="/keuangan/siswa/update-data/{{ $pembairan->id }}" method="POST">
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
                    <input type="text" class="form-control" name="nama" value="{{ $pembairan->nama }}">
                </div>

                <div class="form-group">
                    <label for="">KELAS</label>
                    <input type="text" class="form-control" name="kelas" value="{{ $pembairan->kelas }}">
                </div>

                <div class="form-group">
                    <label for="">JENIS KELAMIN</label>
                    <select name="jenis_kelamin" id="" class="form-control">
                        <option value="L" {{ $pembairan->jenis_kelamin == 'L' ? "selected" : "" }} >Laki Laki</option>
                        <option value="P" {{ $pembairan->jenis_kelamin == 'P' ? "selected" : "" }} >Perempuan</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="">BAYARAN SISWA</label>
                    <input type="text" class="form-control" name="jumlah_baiaran" value="{{ $pembairan->jumlah_baiaran }}">
               </div>
            </div>
        </div>

    </form>
</div>
@endsection