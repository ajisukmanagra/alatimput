@extends('layouts.app')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Materi</h1>
            </div>

            <div class="section-body">
                <div class="mb-3">
                    <ol class="breadcrumb bg-primary">
                        <li class="breadcrumb-item"><a href="{{route('admin.home')}}" class="text-white text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('admin.materi')}}" class="text-white text-decoration-none">Kelola Materi</a></li>
                        <li class="breadcrumb-item"><a href="#" class="text-white text-decoration-none">Edit Materi</a></li>
                    </ol>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-book"></i> Edit Materi</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('admin.materi.post') }}" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{$materi->id}}">
                            <div class="row">
                                <div class="form-group col-md-6 col-6">
                                    <label>FILE</label>
                                    <input type="file" name="fileMateri" value="{{ old('fileMateri') }}" class="form-control @error('fileMateri') is-invalid @enderror">

                                    @error('fileMateri')
                                    <div class="invalid-feedback" style="display: block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6 col-6">
                                    <label>LINK</label>
                                    <input type="text" name="link" value="{{ old('link') }}" placeholder="Masukkan Link" class="form-control @error('link') is-invalid @enderror">

                                    @error('link')
                                    <div class="invalid-feedback" style="display: block">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="">Kelas</label>
                                <select name="kelas" id="" class="custom-select">
                                    @foreach($kelas as $kls)
                                    <option value="{{$kls->id}}" @if($materi->kelas_id == $kls->id) selected @endif>{{$kls->nama_kelas}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label>MATA PELAJARAN</label>
                                <input type="text" name="mapel" placeholder="Masukkan Mata Pelajaran" class="form-control @error('mapel') is-invalid @enderror" value="{{$materi->mapel}}">

                                @error('mapel')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>JUDUL</label>
                                <input type="text" name="judul" placeholder="Masukkan Judul" class="form-control @error('judul') is-invalid @enderror" value="{{$materi->judul}}">

                                @error('judul')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Isi Materi</label>
                                <textarea name="deskripsi" id="" cols="30" rows="10" class="form-control">{!! $materi->deskripsi !!}</textarea>

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