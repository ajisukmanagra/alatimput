@extends('layouts.app')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Caraka</h1>
            </div>

            <div class="section-body">
                <div class="mb-3">
                    <ol class="breadcrumb bg-primary">
                        <li class="breadcrumb-item"><a href="{{route('admin.home')}}" class="text-white text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('admin.caraka')}}" class="text-white text-decoration-none">Kelola Caraka</a></li>
                        <li class="breadcrumb-item"><a href="#" class="text-white text-decoration-none">Edit Caraka</a></li>
                    </ol>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-users"></i> Edit Caraka</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('admin.caraka.post') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{$caraka->id}}">
                            <div class="form-group">
                                <label>NAMA PEGAWAI</label>
                                <input type="text" name="nama_caraka" value="{{ $caraka->nama_caraka }}" placeholder="Masukkan Nama Pegawai" class="form-control @error('nama_caraka') is-invalid @enderror">

                                @error('nama_caraka')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>NIP</label>
                                <input type="text" name="nip" value="{{ $caraka->nip }}" placeholder="Masukkan NIP" class="form-control @error('nip') is-invalid @enderror">

                                @error('nip')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>NIK</label>
                                <input type="text" name="nik" value="{{ $caraka->nik }}" placeholder="Masukkan NIK" class="form-control @error('nik') is-invalid @enderror">

                                @error('nik')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>EMAIL</label>
                                <input type="email" name="email" value="{{ $caraka->email }}" placeholder="Masukkan Email" class="form-control @error('email') is-invalid @enderror">

                                @error('email')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" value="{{ $caraka->tempat_lahir }}" placeholder="Masukkan Tempat Lahir" class="form-control @error('tempat_lahir') is-invalid @enderror">

                                @error('tempat_lahir')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" value="{{ $caraka->tanggal_lahir }}" placeholder="Masukkan Tanggal Lahir" class="form-control @error('tanggal_lahir') is-invalid @enderror">

                                @error('tanggal_lahir')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>No HP</label>
                                <input type="text" name="no_hp" value="{{ $caraka->no_hp }}" placeholder="Masukkan Nomor HP" class="form-control @error('no_hp') is-invalid @enderror">

                                @error('no_hp')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Pendidikan Terakhir</label>
                                <select name="pendidikan_terakhir" class="form-control @error('pendidikan_terakhir') is-invalid @enderror">
                                    <option value="">Pilih Pendidikan</option>
                                    <option value="SD" @if($caraka->pendidikan_terakhir == 'SD') selected @endif>SD Sederajat</option>
                                    <option value="SMP" @if($caraka->pendidikan_terakhir == 'SMP') selected @endif>SMP Sederajat</option>
                                    <option value="SMA" @if($caraka->pendidikan_terakhir == 'SMA') selected @endif>SMA Sederajat</option>
                                    <option value="D3" @if($caraka->pendidikan_terakhir == 'D3') selected @endif>D3</option>
                                    <option value="S1" @if($caraka->pendidikan_terakhir == 'S1') selected @endif>S1</option>
                                    <option value="S2" @if($caraka->pendidikan_terakhir == 'S2') selected @endif>S2</option>
                                </select>
                                @error('pendidikan_terakhir')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Prodi</label>
                                <input type="text" name="prodi" value="{{ old('prodi', $caraka->prodi) }}" placeholder="Masukkan Prodi" class="form-control @error('prodi') is-invalid @enderror">
                                

                                @error('prodi')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>AGAMA</label>
                                <select name="agama" class="form-control @error('agama') is-invalid @enderror">
                                    <option value="">Pilih Agama</option>
                                    <option value="ISLAM" @if($caraka->agama == 'ISLAM') selected @endif>ISLAM</option>
                                    <option value="KRISTEN" @if($caraka->agama == 'KRISTEN') selected @endif>KRISTEN</option>
                                    <option value="BUDDHA" @if($caraka->agama == 'BUDDHA') selected @endif>BUDDHA</option>
                                    <option value="HINDU" @if($caraka->agama == 'HINDU') selected @endif>HINDU</option>
                                    <option value="KONGHUCU" @if($caraka->agama == 'KONGHUCU') selected @endif>KONGHUCU</option>
                                </select>

                                @error('agama')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>JENIS KELAMIN</label>
                                <select name="jenis_kelamin" class="form-control @error('jenis_kelamin') is-invalid @enderror">
                                    <option value="">Pilih</option>
                                    <option value="Laki-laki" @if($caraka->jenis_kelamin == 'Laki-laki') selected @endif>Laki-laki</option>
                                    <option value="Perempuan" @if($caraka->jenis_kelamin == 'Perempuan') selected @endif>Perempuan</option>
                                </select>

                                @error('jenis_kelamin')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>STATUS</label>
                                <select name="status" class="form-control @error('status') is-invalid @enderror">
                                    <option value="">Pilih Status</option>
                                    <option value="aktif" @if($caraka->status == 'aktif') selected @endif>AKTIF</option>
                                    <option value="tidak-aktif" @if($caraka->status == 'tidak-aktif') selected @endif>TIDAK AKTIF</option>
                                </select>

                                @error('status')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Alamat</label>
                                <textarea class="form-control alamat @error('alamat') is-invalid @enderror" name="alamat" placeholder="Masukkan Alamat" rows="10">{!! $caraka->alamat !!}</textarea>
                                @error('alamat')
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/4.5.12/tinymce.min.js"></script>
    <script>
        var editor_config = {
            selector: "textarea.alamat",
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
            relative_urls: false,
        };

        tinymce.init(editor_config);
    </script>
@stop