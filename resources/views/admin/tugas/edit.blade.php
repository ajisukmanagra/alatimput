@extends('layouts.app')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Tugas</h1>
            </div>

            <div class="section-body">
                <div class="mb-3">
                    <ol class="breadcrumb bg-primary">
                        <li class="breadcrumb-item"><a href="{{route('admin.home')}}" class="text-white text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('admin.tugas')}}" class="text-white text-decoration-none">Kelola Tugas</a></li>
                        <li class="breadcrumb-item"><a href="#" class="text-white text-decoration-none">Edit Tugas</a></li>
                    </ol>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-book"></i> Edit Tugas</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('admin.tugas.post') }}" method="POST">
                            @csrf

                           <input type="hidden" name="id" value="{{$tugas->id}}">
                            <div class="form-group">
                                <label>FILE</label>
                                <input type="file" name="fileTugas" value="{{ old('fileTugas') }}" class="form-control @error('fileTugas') is-invalid @enderror">

                                @error('fileTugas')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label for="">Kelas</label>
                                <select name="kelas" id="" class="custom-select">
                                    <option value="">Pilih Kelas</option>
                                    @foreach($kelas as $kls)
                                    <option value="{{$kls->id}}" @if($kls->id == $tugas->kelas_id) selected @endif>{{$kls->nama_kelas}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>MATA PELAJARAN</label>
                                <input type="text" name="mapel" value="{{$tugas->mapel}}" placeholder="Masukkan Mata Pelajaran" class="form-control @error('mapel') is-invalid @enderror">

                                @error('mapel')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>JUDUL</label>
                                <input type="text" name="judul" value="{{$tugas->judul}}" placeholder="Masukkan Judul" class="form-control @error('judul') is-invalid @enderror">

                                @error('judul')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Isi Materi</label>
                                <textarea name="deskripsi" id="" cols="30" rows="10" class="form-control">{{$tugas->deskripsi}}</textarea>

                                @error('deskripsi')
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
            selector: "textarea.deskripsi",
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace wordcount visualblocks visualchars code fullscreen",
                "insertdatetime media nonbreaking save table contextmenu directionality",
                "emoticons template paste textcolor colorpicker textpattern"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
            relative_urls: false,
        };

        tinymce.init({
            selector: 'textarea',
            height: 300
        });
    </script>
@stop