@extends('layouts.app')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>{{$materi->judul}}</h1>
        </div>
        <div class="section-body">
            <div class="mb-3">
                <ol class="breadcrumb bg-primary">
                    <li class="breadcrumb-item"><a href="{{route('admin.home')}}" class="text-white text-decoration-none">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{route('admin.materi')}}" class="text-white text-decoration-none">Kelola Materi</a></li>
                    <li class="breadcrumb-item"><a href="#" class="text-white text-decoration-none">{{$materi->judul}}</a></li>
                </ol>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-book"></i> {{$materi->judul}}</h4>
                </div>
                <div class="card-body">
                    <p>{!! $materi->deskripsi !!}</p>
                </div>
            </div>
        </div>
    </section>
</div>

@stop 