@extends('layouts.app')

@section('content')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Format</h1>
            </div>

            <div class="section-body">
                <div class="mb-3">
                    <ol class="breadcrumb bg-primary">
                        <li class="breadcrumb-item"><a href="{{route('admin.home')}}" class="text-white text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{route('admin.format')}}" class="text-white text-decoration-none">Kelola Format</a></li>
                        <li class="breadcrumb-item"><a href="#" class="text-white text-decoration-none">Edit Format</a></li>
                    </ol>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4><i class="fas fa-tags"></i> Edit Format</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ route('admin.format.post') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{$format->id}}">
                            <div class="form-group">
                                <label>TITLE</label>
                                <input type="text" name="title" value="{{ $format->title }}" placeholder="Masukkan Title" class="form-control @error('title') is-invalid @enderror">

                                @error('title')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>SLUG</label>
                                <input type="text" name="slug" value="{{ $format->slug }}" placeholder="Masukkan Slug" class="form-control @error('slug') is-invalid @enderror">

                                @error('slug')
                                <div class="invalid-feedback" style="display: block">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">FILE</label>
                                <input type="file" name="file" class="form-control" required>
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