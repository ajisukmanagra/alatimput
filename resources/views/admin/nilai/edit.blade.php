@extends('layouts.app')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Tambah Nilai</h1>
            </div>

            <div class="section-body">
                <div class="mb-3">
                    <ol class="breadcrumb bg-primary">
                        <li class="breadcrumb-item"><a href="{{route('admin.home')}}" class="text-white text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('admin.nilai')}}" class="text-white text-decoration-none">Kelola Nilai</a></li>
                        <li class="breadcrumb-item"><a href="#" class="text-white text-decoration-none">Edit Nilai</a></li>
                    </ol>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-tags"></i> Edit Nilai</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('admin.nilai.post') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{$nilai->id}}">
                            <div class="row">
                                <div class="form-group col-md-6 col-6">
                                    <label>NIS</label>
                                    <input type="text" name="nis" value="{{$nilai->nis}}" placeholder="Masukkan NIS" class="form-control @error('nis') is-invalid @enderror">

                                    @error('nis')
                                    <div class="invalid-feedback" style="display: block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6 col-6">
                                    <label>NISN</label>
                                    <input type="text" name="nisn" value="{{$nilai->nisn}}" placeholder="Masukkan NISN" class="form-control @error('nisn') is-invalid @enderror">

                                    @error('nisn')
                                    <div class="invalid-feedback" style="display: block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-6 col-6">
                                    <label>NAMA</label>
                                    <input type="text" name="nama" value="{{$nilai->nama}}" placeholder="Masukkan Nama" class="form-control @error('nama') is-invalid @enderror">

                                    @error('nama')
                                    <div class="invalid-feedback" style="display: block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6 col-6">
                                    <label>KELAS</label>
                                    <input type="text" name="kelas" value="{{$nilai->kelas}}" placeholder="Masukkan Kelas" class="form-control @error('kelas') is-invalid @enderror">

                                    @error('kelas')
                                    <div class="invalid-feedback" style="display: block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label>MATA PELAJARAN</label>
                                <input type="text" name="mapel" value="{{$nilai->mapel}}" placeholder="Masukkan Mata Pelajaran" class="form-control @error('mapel') is-invalid @enderror">

                                @error('mapel')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="row">
                                <div class="form-group col-md-4 col-4">
                                    <label>KKM</label>
                                    <input type="number" minlength="2" maxlength="2" name="kkm" value="{{$nilai->kkm}}" placeholder="Nilai KKM" class="form-control @error('kkm') is-invalid @enderror">

                                    @error('kkm')
                                    <div class="invalid-feedback" style="display: block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-4 col-4">
                                    <label>ANGKA</label>
                                    <input type="number" minlength="2" maxlength="2" name="angka" value="{{$nilai->angka}}" placeholder="Nilai Angka" class="form-control @error('angka') is-invalid @enderror">

                                    @error('angka')
                                    <div class="invalid-feedback" style="display: block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-4 col-4">
                                    <label>PREDIKAT</label>
                                    <select name="predikat" class="form-control @error('predikat') is-invalid @enderror">
                                        <option value="">Pilih Predikat</option>
                                        <option value="SB" @if($nilai->predikat == 'SB') selected @endif>SB</option>
                                        <option value="A" @if($nilai->predikat == 'A') selected @endif>A</option>
                                        <option value="B" @if($nilai->predikat == 'B') selected @endif>B</option>
                                        <option value="C" @if($nilai->predikat == 'C') selected @endif>C</option>
                                        <option value="D" @if($nilai->predikat == 'D') selected @endif>D</option>
                                    </select>

                                    @error('predikat')
                                    <div class="invalid-feedback" style="display: block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="">Keterangan</label>
                                <select name="keterangan" class="form-control @error('keterangan') is-invalid @enderror">
                                        <option value="">Pilih Keterangan</option>
                                        <option value="Pengetahuan" @if($nilai->keterangan == 'Pengetahuan') selected @endif>Pengetahuan</option>
                                        <option value="Keterampilan" @if($nilai->keterangan == 'Keterampilan') selected @endif>Keterampilan</option>
                                    </select>

                                    @error('keterangan')
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