@extends('layouts.app')

@section('content')
<style>
  .icon{
    padding-top: 20px;
    padding-bottom: 10px;
    font-size: 60px;
    color:#f2f2f2;
  }
</style>

<div class="atas" style="background: #0099ff;height: 430px;border-bottom-left-radius: 35px;border-bottom-right-radius: 35px;">
    <center>
      <img src="{{asset('image/logo/icon-logo.png')}}" alt="" class="img rounded border-0" style="background: transparent" width="200">
    </center>
    <h5 class="text-white mt-3">Hai {{auth()->user()->name}},</h5>
    <p class="mt-4 text-white">"Kesuksesan seseorang berbanding lurus dengan kemauannya untuk belajar, bangkit, dan mencoba."</p>
</div>
<div class="main-content" style="padding-top: 20px;">
    <p class="font-weight-bold text-dark">Fitur Aplikasi</p>
    <div class="row mt-3">
      <div class="col-md-6 col-6">
        <a href="{{route('siswa.materi')}}" class="text-decoration-none">
          <div class="card" style="background: #0099ff;border-bottom-left-radius: 35px;border-bottom-right-radius: 35px;border-top-left-radius: 35px;border-top-right-radius: 35px;">
            <center>
              <i class="fas fa-book-open icon"></i>
            </center>
            <div class="card-footer" style="background: #2794E3;border-bottom-left-radius: 35px;border-bottom-right-radius: 35px;height: 50px;">
              <p class="text-center text-white mb-0" style="margin-top: -10px;">Baca Materi</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-6 col-6">
        <a href="{{route('siswa.tugas')}}" class="text-decoration-none">
          <div class="card" style="background: #6DF42D;border-bottom-left-radius: 35px;border-bottom-right-radius: 35px;border-top-left-radius: 35px;border-top-right-radius: 35px;">
            <center>
              <i class="fas fa-envelope-open-text icon"></i>
            </center>
            <div class="card-footer" style="background: #34B739;border-bottom-left-radius: 35px;border-bottom-right-radius: 35px;height: 50px;">
              <p class="text-center text-white mb-0" style="margin-top: -10px;">Tugas</p>
            </div>
          </div>
        </a>
      </div>
    </div>
    <div class="row mt-3">
      <div class="col-md-6 col-6">
        <a href="{{route('siswa.lihat-nilai')}}" class="text-decoration-none">
          <div class="card" style="background: #FB0D62;border-bottom-left-radius: 35px;border-bottom-right-radius: 35px;border-top-left-radius: 35px;border-top-right-radius: 35px;">
            <center>
              <i class="fas fa-chart-bar icon"></i>
            </center>
            <div class="card-footer" style="background: #DD2869;border-bottom-left-radius: 35px;border-bottom-right-radius: 35px;height: 50px;">
              <p class="text-center text-white mb-0" style="margin-top: -10px;">Lihat Nilai</p>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-6 col-6">
        <a href="{{route('siswa.profile')}}" class="text-decoration-none">
          <div class="card" style="background: #FDD609;border-bottom-left-radius: 35px;border-bottom-right-radius: 35px;border-top-left-radius: 35px;border-top-right-radius: 35px;">
            <center>
              <i class="fas fa-user-edit icon"></i>
            </center>
            <div class="card-footer" style="background: #FDA802;border-bottom-left-radius: 35px;border-bottom-right-radius: 35px;height: 50px;">
              <p class="text-center text-white mb-0" style="margin-top: -10px;">Profile</p>
            </div>
          </div>
        </a>
      </div>
    </div>
    <p class="font-weight-bold text-dark">Kata - kata Motivasi</p>
    <div class="row">
      <div class="col-md-12 col-12">
        <small>"Barang siapa bersungguh-sungguh, maka dia akan mendapatkan kesuksesan."</small>
      </div>
      <div class="col-md-12 col-12 mt-2">
        <small><i>"Lakukan yang terbaik di semua kesempatan yang kamu miliki."</i></small>
      </div>
      <div class="col-md-12 col-12 mt-2">
        <small>"Makin awal kamu memulai pekerjaan, makin awal pula kamu akan melihat hasilnya."</small>
      </div>
      <div class="col-md-12 col-12 mt-2">
        <small><i>"Jangan mengharapkan semuanya bisa jadi lebih mudah, berharaplah agar dirimu bisa jadi lebih baik."</i></small>
      </div>
    </div>
</div>


<script>
    $('.owl-carousel').owlCarousel({
        autoplay:true,
        navigation: false,
        navText: [" ", " "],
        loop:true,
        margin:10,
        responsiveClass:true,
        responsive:{
            autoplay: true,
            0:{
                items:1,
                nav:true
            },
            600:{
                items:3,
                nav:false
            },
            1000:{
                items:4,
                nav:true,
                loop:false
            }
        }
    })
</script>
@endsection
