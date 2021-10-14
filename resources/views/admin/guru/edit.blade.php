@extends('layouts.app')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Guru</h1>
            </div>

            <div class="section-body">
                <div class="mb-3">
                    <ol class="breadcrumb bg-primary">
                        <li class="breadcrumb-item"><a href="{{route('admin.home')}}" class="text-white text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('admin.guru')}}" class="text-white text-decoration-none">Kelola Guru</a></li>
                        <li class="breadcrumb-item"><a href="#" class="text-white text-decoration-none">Edit Guru</a></li>
                    </ol>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-tags"></i> Edit Guru</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('admin.guru.post') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{$guru->id}}">
                            <div class="form-group">
                                <label>NAMA GURU</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-primary text-white"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" name="nama_guru" value="{{ $guru->nama_guru }}" placeholder="Masukkan Nama Guru" class="form-control @error('nama_guru') is-invalid @enderror">
                                </div>
                                

                                @error('nama_guru')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>NIP / NUPTK / NIY</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-primary text-white"><i class="far fa-address-card"></i></span>
                                    </div>
                                    <input type="text" name="nip" value="{{ $guru->nip }}" placeholder="Masukkan NIP / NUPTK / NIY" class="form-control @error('nip') is-invalid @enderror">
                                </div>
                                

                                @error('nip')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>NIK</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-primary text-white"><i class="fas fa-address-card"></i></span>
                                    </div>
                                    <input type="text" name="nik" value="{{ $guru->nik }}" placeholder="Masukkan NIK" class="form-control @error('nik') is-invalid @enderror">
                                </div>
                                

                                @error('nik')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>EMAIL</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-primary text-white">@</span>
                                    </div>
                                    <input type="email" name="email" value="{{ $guru->email }}" placeholder="Masukkan Email" class="form-control @error('email') is-invalid @enderror">
                                </div>

                                @error('email')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-primary text-white"><i class="fas fa-map-marker-alt"></i></span>
                                    </div>
                                    <input type="text" name="tempat_lahir" value="{{ $guru->tempat_lahir }}" placeholder="Masukkan Tempat Lahir" class="form-control @error('tempat_lahir') is-invalid @enderror">
                                </div>

                                @error('tempat_lahir')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-primary text-white"><i class="fas fa-calendar"></i></span>
                                    </div>
                                    <input type="date" name="tanggal_lahir" value="{{ $guru->tanggal_lahir }}" placeholder="Masukkan Tanggal Lahir" class="form-control @error('tanggal_lahir') is-invalid @enderror">
                                </div>
                                

                                @error('tanggal_lahir')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>No HP</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-primary text-white"><i class="fas fa-phone"></i></span>
                                    </div>
                                    <input type="text" name="no_hp" value="{{ $guru->no_hp }}" placeholder="Masukkan Nomor HP" class="form-control @error('no_hp') is-invalid @enderror">
                                </div>

                                @error('no_hp')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Pendidikan Terakhir</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-primary text-white"><i class="fas fa-graduation-cap"></i></span>
                                    </div>
                                    <select name="pendidikan_terakhir" class="form-control @error('pendidikan_terakhir') is-invalid @enderror">
                                        <option value="">Pilih Pendidikan</option>
                                        <option value="SD" @if($guru->pendidikan_terakhir == 'SD') selected @endif>SD Sederajat</option>
                                        <option value="SMP" @if($guru->pendidikan_terakhir == 'SMP') selected @endif>SMP Sederajat</option>
                                        <option value="SMA" @if($guru->pendidikan_terakhir == 'SMA') selected @endif>SMA Sederajat</option>
                                        <option value="D3" @if($guru->pendidikan_terakhir == 'D3') selected @endif>D3</option>
                                        <option value="S1" @if($guru->pendidikan_terakhir == 'S1') selected @endif>S1</option>
                                        <option value="S2" @if($guru->pendidikan_terakhir == 'S2') selected @endif>S2</option>
                                    </select>
                                </div>
                                
                                @error('pendidikan_terakhir')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Prodi</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-primary text-white"><i class="far fa-address-card"></i></span>
                                    </div>
                                    <input type="text" name="prodi" value="{{ old('prodi', $guru->prodi) }}" placeholder="Masukkan Prodi" class="form-control @error('prodi') is-invalid @enderror">
                                </div>

                                @error('prodi')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>AGAMA</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-primary text-white"><i class="fas fa-mosque"></i></span>
                                    </div>
                                    <select name="agama" class="form-control @error('agama') is-invalid @enderror">
                                        <option value="">Pilih Agama</option>
                                        <option value="ISLAM" @if($guru->agama == 'ISLAM') selected @endif>ISLAM</option>
                                        <option value="KRISTEN" @if($guru->agama == 'KRISTEN') selected @endif>KRISTEN</option>
                                        <option value="BUDDHA" @if($guru->agama == 'BUDDHA') selected @endif>BUDDHA</option>
                                        <option value="HINDU" @if($guru->agama == 'HINDU') selected @endif>HINDU</option>
                                        <option value="KONGHUCU" @if($guru->agama == 'KONGHUCU') selected @endif>KONGHUCU</option>
                                    </select>
                                </div>
                                

                                @error('agama')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>JENIS KELAMIN</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-primary text-white"><i class="fas fa-venus-mars"></i></span>
                                    </div>
                                    <select name="jenis_kelamin" class="form-control @error('jenis_kelamin') is-invalid @enderror">
                                        <option value="">Pilih</option>
                                        <option value="Laki-laki" @if($guru->jenis_kelamin == 'Laki-laki') selected @endif>Laki-laki</option>
                                        <option value="Perempuan" @if($guru->jenis_kelamin == 'Perempuan') selected @endif>Perempuan</option>
                                    </select>
                                </div>
                                

                                @error('jenis_kelamin')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>STATUS</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-primary text-white">@</span>
                                    </div>
                                    <select name="status" class="form-control @error('status') is-invalid @enderror">
                                        <option value="">Pilih Status</option>
                                        <option value="aktif" @if($guru->status == 'aktif') selected @endif>AKTIF</option>
                                        <option value="tidak-aktif" @if($guru->status == 'tidak-aktif') selected @endif>TIDAK AKTIF</option>
                                    </select>
                                </div>
                                

                                @error('status')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>MATA PELAJARAN</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-primary text-white"><i class="fas fa-book"></i></span>
                                    </div>
                                    <select name="mapel" class="form-control @error('mapel') is-invalid @enderror">
                                        <option value="">Pilih Mapel</option>
                                        @foreach($mapels as $mapel)
                                            <option value="{{$mapel->id}}" @if($guru->mapel_id == $mapel->id) selected @endif>{{$mapel->nama_mapel}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                

                                @error('mapel')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Alamat</label>
                                <textarea class="form-control alamat @error('alamat') is-invalid @enderror" name="alamat" placeholder="Masukkan Alamat" rows="10">{!! $guru->alamat !!}</textarea>
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