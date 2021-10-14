@extends('layouts.app')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Siswa</h1>
            </div>

            <div class="section-body">
                <div class="mb-3">
                    <ol class="breadcrumb bg-primary">
                        <li class="breadcrumb-item"><a href="{{route('admin.home')}}" class="text-white text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item"><a href="#" class="text-white text-decoration-none">Edit Siswa</a></li>
                    </ol>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-tags"></i> Edit Siswa</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('admin.siswa.post') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{$siswa->id}}">

                            <p><i>Isilah Data Siswa</i></p>
                            <div class="form-group">
                                <label>NAMA</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-primary text-white"><i class="fas fa-user-graduate"></i></span>
                                    </div>
                                    <input type="text" name="nama" value="{{$siswa->nama}}" placeholder="Masukkan Nama Murid" class="form-control @error('nama') is-invalid @enderror">
                                </div> 

                                @error('nama')
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
                                    <input type="text" name="nik" value="{{$siswa->nik}}" placeholder="Masukkan NIK" class="form-control @error('nik') is-invalid @enderror">
                                </div>

                                @error('nik')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>NIS</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-primary text-white"><i class="far fa-address-card"></i></span>
                                    </div>
                                    <input type="text" name="nis" value="{{$siswa->nis}}" placeholder="Masukkan NIS" class="form-control @error('nis') is-invalid @enderror">
                                </div>

                                @error('nis')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>NISN</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-primary text-white"><i class="fas fa-id-card-alt"></i></span>
                                    </div>
                                    <input type="text" name="nisn" value="{{$siswa->nisn}}" placeholder="Masukkan NISN" class="form-control @error('nisn') is-invalid @enderror">
                                </div>

                                @error('nisn')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>TEMPAT LAHIR</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-primary text-white"><i class="fas fa-map-marker-alt"></i></span>
                                    </div>
                                    <input type="text" name="tempat_lahir" value="{{$siswa->tempat_lahir}}" placeholder="Masukkan Tempat Lahir" class="form-control @error('tempat_lahir') is-invalid @enderror">
                                </div>

                                @error('tempat_lahir')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>TANGGAL LAHIR</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-primary text-white"><i class="fas fa-calendar"></i></span>
                                    </div>
                                    <input type="date" name="tgl_lahir" value="{{$siswa->tgl_lahir}}" class="form-control @error('tgl_lahir') is-invalid @enderror">
                                </div>

                                @error('tgl_lahir')
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
                                        <option value="Laki-laki" @if($siswa->jenis_kelamin = 'Laki-laki') selected @endif>Laki-laki</option>
                                        <option value="Perempuan" @if($siswa->jenis_kelamin = 'Perempuan') selected @endif>Perempuan</option>
                                    </select>
                                </div>
                                

                                @error('jenis_kelamin')
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
                                        <option value="ISLAM" @if($siswa->agama = 'ISLAM') selected @endif>ISLAM</option>
                                        <option value="KRISTEN" @if($siswa->agama = 'KRISTEN') selected @endif>KRISTEN</option>
                                        <option value="BUDDHA" @if($siswa->agama = 'BUDDHA') selected @endif>BUDDHA</option>
                                        <option value="HINDU" @if($siswa->agama = 'HINDU') selected @endif>HINDU</option>
                                        <option value="KONGHUCU" @if($siswa->agama = 'KONGHUCU') selected @endif>KONGHUCU</option>
                                    </select>
                                </div>

                                @error('agama')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">STATUS DLM KELUARGA</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-primary text-white">@</span>
                                    </div>
                                    <select name="status_dlm_keluarga" id="" class="form-control @error('status_dlm_keluarga') is-invalid @enderror">
                                        <option value="">Pilih</option>
                                        <option value="Anak Kandung" @if($siswa->status_dlm_keluarga = 'Anak Kandung') selected @endif>Anak Kandung</option>
                                        <option value="Anak Tiri" @if($siswa->status_dlm_keluarga = 'Anak Tiri') selected @endif>Anak Tiri</option>
                                        <option value="Anak Angkat" @if($siswa->status_dlm_keluarga = 'Anak Angkat') selected @endif>Anak Angkat</option>
                                    </select>
                                </div>

                                @error('status_dlm_keluarga')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">ANAK KE</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-primary text-white"><i class="fas fa-child"></i></span>
                                    </div>
                                    <input type="number" name="anak_ke" value="{{$siswa->anak_ke}}" id="" class="form-control  @error('anak_ke') is-invalid @enderror">
                                </div>

                                @error('anak_ke')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">ALAMAT</label>
                                <textarea name="alamat" id="" rows="6" class="form-control alamat @error('alamat') is-invalid @enderror">{{$siswa->alamat}}</textarea>

                                @error('alamat')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">SEKOLAH ASAL</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-primary text-white"><i class="fas fa-university"></i></span>
                                    </div>
                                    <input type="text" name="sekolah_asal" value="{{$siswa->sekolah_asal}}" id="" class="form-control @error('sekolah_asal') is-invalid @enderror">
                                </div>

                                @error('sekolah_asal')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">TELEPON</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-primary text-white"><i class="fas fa-phone"></i></span>
                                    </div>
                                    <input type="text" name="telepon" value="{{$siswa->telepon}}" id="" class="form-control @error('telepon') is-invalid @enderror">
                                </div>

                                @error('telepon')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">TANGGAL DITERIMA</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-primary text-white"><i class="fas fa-calendar"></i></span>
                                    </div>
                                    <input type="date" name="tgl_diterima" value="{{$siswa->tgl_diterima}}" id="" class="form-control @error('tgl_diterima') is-invalid @enderror">
                                </div>

                                @error('tgl_diterima')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">TAHUN IJAZAH</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-primary text-white"><i class="fas fa-calendar-alt"></i></span>
                                    </div>
                                    <input type="text" name="tahun_ijazah" value="{{$siswa->tahun_ijazah}}" id="" class="form-control @error('tahun_ijazah') is-invalid @enderror">
                                </div>

                                @error('tahun_ijazah')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">NO SERI IJAZAH</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-primary text-white">@</span>
                                    </div>
                                    <input type="text" name="no_ijazah" value="{{$siswa->no_ijazah}}" id="" class="form-control @error('no_ijazah') is-invalid @enderror">
                                </div>

                                @error('no_ijazah')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">TAHUN SKHUN</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-primary text-white"><i class="fas fa-calendar-alt"></i></span>
                                    </div>
                                    <input type="text" name="tahun_skhun" value="{{$siswa->tahun_skhun}}" id="" class="form-control @error('tahun_skhun') is-invalid @enderror">
                                </div>

                                @error('tahun_skhun')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">NO SERI SKHUN</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-primary text-white">@</span>
                                    </div>
                                    <input type="text" name="no_skhun" value="{{$siswa->no_skhun}}" id="" class="form-control @error('no_skhun') is-invalid @enderror">
                                </div>

                                @error('no_skhun')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Kelas</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-primary text-white"><i class="fas fa-home"></i></span>
                                    </div>
                                    <select name="kelas" class="form-control" id="">
                                        <option value="">Pilih Kelas</option>
                                        @foreach($kelas as $k)
                                        <option value="{{$k->id}}" @if($siswa->kelas_id == $k->id) selected @endif>{{$k->nama_kelas}}</option>
                                        @endforeach
                                    </select>
                                </dov>
                            </div>

                            <div class="form-group">
                                <label>STATUS</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-primary text-white">@</span>
                                    </div>
                                    <select name="status" class="form-control @error('status') is-invalid @enderror">
                                        <option value="">Pilih Status</option>
                                        <option value="aktif" @if($siswa->status = 'aktif') selected @endif>AKTIF</option>
                                        <option value="tidak-aktif" @if($siswa->status = 'tidak-aktif') selected @endif>TIDAK AKTIF</option>
                                    </select>
                                </dov>

                                @error('status')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>


                            <p><i>Isilah Data Orang Tua Siswa</i></p>

                            <div class="form-group">
                                <label for="">NAMA AYAH</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-primary text-white"><i class="fas fa-male"></i></span>
                                    </div>
                                    <input type="text" name="nama_ayah" value="{{ $siswa->nama_ayah }}" placeholder="Masukkan Nama Ayah" class="form-control @error('nama_ayah') is-invalid @enderror">
                                </div>

                                @error('nama_ayah')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">NIK AYAH</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-primary text-white"><i class="fas fa-address-card"></i></span>
                                    </div>
                                    <input type="text" name="nik_ayah" value="{{ $siswa->nik_ayah }}" placeholder="Masukkan NIK Ayah" class="form-control @error('nik_ayah') is-invalid @enderror">
                                </div>

                                @error('nik_ayah')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">PEKERJAAN AYAH</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-primary text-white"><i class="fas fa-briefcase"></i></span>
                                    </div>
                                    <select name="pekerjaan_ayah" id="" class="form-control @error('pekerjaan_ayah') is-invalid @enderror">
                                        <option value="">Pilih Pekerjaan</option>
                                        <option value="BUMN / BUMD" @if($siswa->pekerjaan_ayah == 'BUMN / BUMD') selected @endif>BUMN / BUMD</option>
                                        <option value="Buruh" @if($siswa->pekerjaan_ayah == 'Buruh') selected @endif>Buruh</option>
                                        <option value="Dokter" @if($siswa->pekerjaan_ayah == 'Dokter') selected @endif>Dokter</option>
                                        <option value="Ibu Rumah Tangga" @if($siswa->pekerjaan_ayah == 'Ibu Rumah Tangga') selected @endif>Ibu Rumah Tangga</option>
                                        <option value="Karyawan Swasta" @if($siswa->pekerjaan_ayah == 'Karyawan Swasta') selected @endif>Karyawan Swasta</option>
                                        <option value="PNS" @if($siswa->pekerjaan_ayah == 'PNS') selected @endif>PNS</option>
                                        <option value="Profesional" @if($siswa->pekerjaan_ayah == 'Profesional') selected @endif>Profesional</option>
                                        <option value="TNI / POLRI" @if($siswa->pekerjaan_ayah == 'TNI / POLRI') selected @endif>TNI / POLRI</option>
                                        <option value="Wiraswasta" @if($siswa->pekerjaan_ayah == 'Wiraswasta') selected @endif>Wiraswasta</option>
                                        <option value="Lainnya" @if($siswa->pekerjaan_ayah == 'Lainnya') selected @endif>Lainnya</option>
                                    </select>
                                </div>

                                @error('pekerjaan_ayah')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">NAMA IBU</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-primary text-white"><i class="fas fa-female"></i></span>
                                    </div>
                                    <input type="text" name="nama_ibu" value="{{ $siswa->nama_ibu }}" placeholder="Masukkan Nama Ibu" class="form-control @error('nama_ibu') is-invalid @enderror">
                                </div>

                                @error('nama_ibu')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">NIK IBU</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-primary text-white"><i class="fas fa-address-card"></i></span>
                                    </div>
                                    <input type="text" name="nik_ibu" value="{{ $siswa->nik_ibu }}" placeholder="Masukkan NIK Ibu" class="form-control @error('nik_ibu') is-invalid @enderror">
                                </div>

                                @error('nik_ibu')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">PEKERJAAN IBU</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-primary text-white"><i class="fas fa-briefcase"></i></span>
                                    </div>
                                    <select name="pekerjaan_ibu" id="" class="form-control @error('pekerjaan_ibu') is-invalid @enderror">
                                        <option value="">Pilih Pekerjaan</option>
                                        <option value="BUMN / BUMD" @if($siswa->pekerjaan_ibu == 'BUMN / BUMD') selected @endif>BUMN / BUMD</option>
                                        <option value="Buruh" @if($siswa->pekerjaan_ibu == 'Buruh') selected @endif>Buruh</option>
                                        <option value="Dokter" @if($siswa->pekerjaan_ibu == 'Dokter') selected @endif>Dokter</option>
                                        <option value="Ibu Rumah Tangga" @if($siswa->pekerjaan_ibu == 'Ibu Rumah Tangga') selected @endif>Ibu Rumah Tangga</option>
                                        <option value="Karyawan Swasta" @if($siswa->pekerjaan_ibu == 'Karyawan Swasta') selected @endif>Karyawan Swasta</option>
                                        <option value="PNS" @if($siswa->pekerjaan_ibu == 'PNS') selected @endif>PNS</option>
                                        <option value="Profesional" @if($siswa->pekerjaan_ibu == 'Profesional') selected @endif>Profesional</option>
                                        <option value="TNI / POLRI" @if($siswa->pekerjaan_ibu == 'TNI / POLRI') selected @endif>TNI / POLRI</option>
                                        <option value="Wiraswasta" @if($siswa->pekerjaan_ibu == 'Wiraswasta') selected @endif>Wiraswasta</option>
                                        <option value="Lainnya" @if($siswa->pekerjaan_ibu == 'Lainnya') selected @endif>Lainnya</option>
                                    </select>
                                </div>

                                @error('pekerjaan_ibu')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">TELEPON ORTU</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-primary text-white"><i class="fas fa-phone"></i></span>
                                    </div>
                                    <input type="text" name="telepon_ortu" value="{{$siswa->telepon_ortu}}" id="" class="form-control @error('telepon_ortu') is-invalid @enderror">
                                </div>

                                @error('telepon_ortu')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">ALAMAT ORTU</label>
                                <textarea name="alamat_ortu" id="" cols="30" rows="10" class="alamat form-control @error('alamat_ortu') is-invalid @enderror">{{$siswa->alamat_ortu}}</textarea>

                                @error('alamat_ortu')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <p><i>Isilah Apabila Siswa Tinggal Bersama Wali</i></p>

                            <div class="form-group">
                                <label for="">NAMA WALI</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-primary text-white"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" name="nama_wali" value="{{ $siswa->nama_wali }}" placeholder="Masukkan Nama Wali" class="form-control @error('nama_wali') is-invalid @enderror">
                                </div>

                                @error('nama_wali')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">NIK WALI</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-primary text-white"><i class="fas fa-address-card"></i></span>
                                    </div>
                                    <input type="text" name="nik_wali" value="{{ $siswa->nik_wali }}" placeholder="Masukkan NIK Wali" class="form-control @error('nik_wali') is-invalid @enderror">
                                </div>

                                @error('nik_wali')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">PEKERJAAN WALI</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-primary text-white"><i class="fas fa-briefcase"></i></span>
                                    </div>
                                    <select name="pekerjaan_wali" id="" class="form-control @error('pekerjaan_wali') is-invalid @enderror">
                                        <option value="">Pilih Pekerjaan</option>
                                        <option value="BUMN / BUMD" @if($siswa->pekerjaan_wali == 'BUMN / BUMD') selected @endif>BUMN / BUMD</option>
                                        <option value="Buruh" @if($siswa->pekerjaan_wali == 'Buruh') selected @endif>Buruh</option>
                                        <option value="Dokter" @if($siswa->pekerjaan_wali == 'Dokter') selected @endif>Dokter</option>
                                        <option value="Ibu Rumah Tangga" @if($siswa->pekerjaan_wali == 'Ibu Rumah Tangga') selected @endif>Ibu Rumah Tangga</option>
                                        <option value="Karyawan Swasta" @if($siswa->pekerjaan_wali == 'Karyawan Swasta') selected @endif>Karyawan Swasta</option>
                                        <option value="PNS" @if($siswa->pekerjaan_wali == 'PNS') selected @endif>PNS</option>
                                        <option value="Profesional" @if($siswa->pekerjaan_wali == 'Profesional') selected @endif>Profesional</option>
                                        <option value="TNI / POLRI" @if($siswa->pekerjaan_wali == 'TNI / POLRI') selected @endif>TNI / POLRI</option>
                                        <option value="Wiraswasta" @if($siswa->pekerjaan_wali == 'Wiraswasta') selected @endif>Wiraswasta</option>
                                        <option value="Lainnya" @if($siswa->pekerjaan_wali == 'Lainnya') selected @endif>Lainnya</option>
                                    </select>
                                </div>

                                @error('pekerjaan_wali')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">TELEPON WALI</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text bg-primary text-white"><i class="fas fa-phone"></i></span>
                                    </div>
                                    <input type="text" name="telepon_wali" value="{{$siswa->telepon_wali}}" id="" class="form-control @error('telepon_wali') is-invalid @enderror">
                                </div>

                                @error('telepon_wali')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">ALAMAT WALI</label>
                                <textarea name="alamat_wali" id="" cols="30" rows="10" class="alamat form-control @error('alamat_wali') is-invalid @enderror">{{$siswa->alamat_wali}}</textarea>

                                @error('alamat_wali')
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
