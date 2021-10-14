@extends('layouts.app')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Tata Usaha</h1>
            </div>

            <div class="section-body">
                <div class="mb-3">
                    <ol class="breadcrumb bg-primary">
                        <li class="breadcrumb-item"><a href="{{route('admin.home')}}" class="text-white text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('admin.tatausaha')}}" class="text-white text-decoration-none">Kelola Tata Usaha</a></li>
                        <li class="breadcrumb-item"><a href="#" class="text-white text-decoration-none">Edit Tata Usaha</a></li>
                    </ol>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-tags"></i> Edit Tata Usaha</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('admin.tatausaha.post') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{$tatausaha->id}}">
                            <div class="form-group">
                                <label>NAMA PEGAWAI</label>
                                <input type="text" name="nama_pegawai" value="{{ $tatausaha->nama_pegawai }}" placeholder="Masukkan Nama Pegawai" class="form-control @error('nama_pegawai') is-invalid @enderror">

                                @error('nama_pegawai')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>NIP</label>
                                <input type="text" name="nip" value="{{ $tatausaha->nip }}" placeholder="Masukkan NIP" class="form-control @error('nip') is-invalid @enderror">

                                @error('nip')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>NIK</label>
                                <input type="text" name="nik" value="{{ $tatausaha->nik }}" placeholder="Masukkan NIK" class="form-control @error('nik') is-invalid @enderror">

                                @error('nik')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>EMAIL</label>
                                <input type="email" name="email" value="{{ $tatausaha->email }}" placeholder="Masukkan Email" class="form-control @error('email') is-invalid @enderror">

                                @error('email')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <input type="text" name="tempat_lahir" value="{{ $tatausaha->tempat_lahir }}" placeholder="Masukkan Tempat Lahir" class="form-control @error('tempat_lahir') is-invalid @enderror">

                                @error('tempat_lahir')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date" name="tanggal_lahir" value="{{ $tatausaha->tanggal_lahir }}" placeholder="Masukkan Tanggal Lahir" class="form-control @error('tanggal_lahir') is-invalid @enderror">

                                @error('tanggal_lahir')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>No HP</label>
                                <input type="text" name="no_hp" value="{{ $tatausaha->no_hp }}" placeholder="Masukkan Nomor HP" class="form-control @error('no_hp') is-invalid @enderror">

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
                                    <option value="SD" @if($tatausaha->pendidikan_terakhir == 'SD') selected @endif>SD Sederajat</option>
                                    <option value="SMP" @if($tatausaha->pendidikan_terakhir == 'SMP') selected @endif>SMP Sederajat</option>
                                    <option value="SMA" @if($tatausaha->pendidikan_terakhir == 'SMA') selected @endif>SMA Sederajat</option>
                                    <option value="D3" @if($tatausaha->pendidikan_terakhir == 'D3') selected @endif>D3</option>
                                    <option value="S1" @if($tatausaha->pendidikan_terakhir == 'S1') selected @endif>S1</option>
                                    <option value="S2" @if($tatausaha->pendidikan_terakhir == 'S2') selected @endif>S2</option>
                                </select>
                                @error('pendidikan_terakhir')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Prodi</label>
                                <input type="text" name="prodi" value="{{ old('prodi', $tatausaha->prodi) }}" placeholder="Masukkan Prodi" class="form-control @error('prodi') is-invalid @enderror">
                                

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
                                    <option value="ISLAM" @if($tatausaha->agama == 'ISLAM') selected @endif>ISLAM</option>
                                    <option value="KRISTEN" @if($tatausaha->agama == 'KRISTEN') selected @endif>KRISTEN</option>
                                    <option value="BUDDHA" @if($tatausaha->agama == 'BUDDHA') selected @endif>BUDDHA</option>
                                    <option value="HINDU" @if($tatausaha->agama == 'HINDU') selected @endif>HINDU</option>
                                    <option value="KONGHUCU" @if($tatausaha->agama == 'KONGHUCU') selected @endif>KONGHUCU</option>
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
                                    <option value="Laki-laki" @if($tatausaha->jenis_kelamin == 'Laki-laki') selected @endif>Laki-laki</option>
                                    <option value="Perempuan" @if($tatausaha->jenis_kelamin == 'Perempuan') selected @endif>Perempuan</option>
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
                                    <option value="aktif" @if($tatausaha->status == 'aktif') selected @endif>AKTIF</option>
                                    <option value="tidak-aktif" @if($tatausaha->status == 'tidak-aktif') selected @endif>TIDAK AKTIF</option>
                                </select>

                                @error('status')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Jabatan</label>
                                <select name="jabatan" class="form-control @error('jabatan') is-invalid @enderror">
                                    <option value="">Pilih Jabatan</option>
                                    <option value="Kepala TU" @if($tatausaha->jabatan == 'Kepala TU') selected @endif>Kepala TU</option>
                                    <option value="Sekretaris" @if($tatausaha->jabatan == 'Sekretaris') selected @endif >Sekretaris</option>
                                    <option value="Bendahara" @if($tatausaha->jabatan == 'Bendahara') selected @endif>Bendahara</option>
                                    <option value="Staff 1" @if($tatausaha->jabatan == 'Staff 1') selected @endif>Staff 1</option>
                                    <option value="Staff 2" @if($tatausaha->jabatan == 'Staff 2') selected @endif>Staff 2</option>
                                </select>

                                @error('mapel')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Alamat</label>
                                <textarea class="form-control alamat @error('alamat') is-invalid @enderror" name="alamat" placeholder="Masukkan Alamat" rows="10">{!! $tatausaha->alamat !!}</textarea>
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