<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>PROFIL|SMP PGRI CIRANJANG</title>
  </head>
  <body>
  
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMP PGRI CIRANJANG</title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('datatable/css/dataTables.min.css')}}">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>
<style>
    .top{
        position:relative;
        background-image: linear-gradient(-90deg, #0984e3, #00cec9);
        width:100%;
        height:520px;
    }

    .carousel-inner img {
        width: 100%;
        height: 640px;
        object-fit:cover;
    }

    marquee{
        width: 1200px;
        margin-right: 30px;
    }

    *{
        font-family:'Poppins';
    }
    h1,h2,h3,h4,h5,h6{
        font-weight:bold;
    }

    #foot{
        background:#10A5F5;
        height: 450px;
    }

    #myBtn {
    display: none;
    position: fixed;
    bottom: 20px;
    right: 30px;
    z-index: 99;
    font-size: 30px;
    border: none;
    outline: none;
    background-color: #10A5F5;
    color: white;
    cursor: pointer;
    padding: 15px;
    border-radius: 4px;
    }

    #myBtn:hover {
    background-color: #10A5F5;
    }
    .font12{
        font-size: 12px;
    }
    .font13{
        font-size: 13px;
    }
    .font14{
        font-size: 14px;
    }
    .font15{
        font-size: 15px;
    }
    .font16{
        font-size: 16px;
    }
    .font18{
        font-size: 18px;
    }

    @media only screen and (max-width: 600px) {
        .carousel-inner img {
            width: 100%;
            height: 50%;
        }

        #foot{
            background:#10A5F5;
            height: 800px;
        }

        #paragrafHP{
            font-size: 10px;
        }

        #fontNav{
            font-size: 10px;
        }

        marquee{
            width: 200px;
            margin-right: 30px;
        }

        .font14{
            font-size: 12px;
        }

        .bd-title{
            font-size: 13px;
        }

        .font-size-sm{
            font-size: 12px;
        }

        .fontMobile{
            font-size: 10px;
        }
    }
</style>
<body >

    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fas fa-angle-up"></i></button>

    <nav class="navbar navbar-expand-md  navbar-dark" style="background: #10A5F5;">
        <div class="container-fluid">
            <ul class="navbar-nav ml-auto">
                <div class="row">
                    <li class="nav-item">
                        <marquee behavior=""  class="mt-2 fontMobile font14 text-white" direction="left">
                            Selamat Datang Di Website SMP PGRI CIRANJANG, Dapatkan Informasi Terkait SMP PGRI CIRANJANG Disini . . .
                        </marquee>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-white mr-2 fontMobile font14"  href="{{route('login')}}"><i class="fas fa-sign-in-alt"></i> Login</a>
                    </li>
                </div>

            </ul>
        </div>
    </nav>

    <header class="pt-3 border-bottom">
        <div class="container pt-md-1 pb-md-1">
            <ul class="navbar-nav">
                <div class="row">
                    <li class="nav-item">
                        <img src="/image/logo/logo.png" alt="" class="img img-thumbnail" width="80" style="border:none;background:transparent;">&emsp;
                    </li>
                    <li class="navbar-nav">
                        <h5 class="bd-title mt-4 mb-0 font-weight-bold" style="color:#10A5F5;">SMP PGRI CIRANJANG</h5>
                        <p class="mt-0 font-size-sm">Unggul, Santun, Bersih Dan Berakhlaq</p>
                    </li>

                </div>
            </ul>

        </div>
    </header>


		  <nav class="navbar navbar-expand-lg navbar-light bg-badge bg-info text-dark">
		  <div class="container-fluid">
		  
		    <a class="navbar-brand" href="#"></a>
		    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
		      <span class="navbar-toggler-icon"></span>
		    </button>
		    <div class="collapse navbar-collapse" id="navbarNavDropdown">
		     <ul class="navbar-nav ml-auto">
				<li class="nav-item active">
		          <a class="nav-link active" aria-current="page" href="/ ">BERANDA</a>
		        </li>
		         <li class="nav-item">
		          <a class="nav-link" href="#"></a>
		        </li>
		         <li class="nav-item">
		          <a class="nav-link" href="#"></a>
		        </li>
                <li class="nav-item dropdown">
		          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
		           PROFIL SEKOLAH
		          </a>
		          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
		            <li><a class="dropdown-item" href="/profil/sejarah">SEJARAH SMP PGRI CIRANJANG</a></li><hr>
		            <li><a class="dropdown-item" href="/profil/visi-misi-sekolah">VISI DAN MISI SEKOLAH</a></li><hr>
		            <li><a class="dropdown-item" href="/profil/sarana-prasarana">SARANA DAN PRASARANAN</a></li><hr>
					<li><a class="dropdown-item" href="/profil/struktur-organisasi">STRUKTUR ORGANISASI</a></li>
		          </ul>
		         <li class="nav-item">
		          <a class="nav-link" href="#"></a>
		        </li>
		         <li class="nav-item">
		          <a class="nav-link" href="#"></a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="/profil/pembaritahuan">Pengumuman</a>
		        </li>
		         <li class="nav-item">
		          <a class="nav-link" href="#"></a>
		        </li>
	
		          <a class="nav-link" href="#"></a>
				  
                <li class="nav-item dropdown">
		          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
		          GURU
		          </a>
		          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
		            <li><a class="dropdown-item" href="/profil/guru-smp-pgri">INFO GURU SMP PGRI CIRANJANG</a></li><hr>
		            <li><a class="dropdown-item" href="#">SILABUS</a></li><hr>
		            <li><a class="dropdown-item" href="#">KALENDER AKADEMIK</a></li>
		          </ul>
		         <li class="nav-item">
		          <a class="nav-link" href="#"></a>
		        </li>
		         <li class="nav-item">
		          <a class="nav-link" href="#"></a>
		        </li>
		        <li class="nav-item dropdown">
		          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
		            SISWA SMP PGRI CIRANJANG
		          </a>
		          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
		            <li><a class="dropdown-item" href="#">SISWA</a></li><hr>
		            <li><a class="dropdown-item" href="#">PRESTASI SISWA</a></li><hr>
		            <li><a class="dropdown-item" href="#">ESKUL</a></li>
		          </ul>
		           <li class="nav-item">
		          <a class="nav-link" href="#"></a>
		        </li>
		         <li class="nav-item">
		          <a class="nav-link" href="#"></a>
		        </li>
		           <li class="nav-item">
		          <a class="nav-link" href="/profil/kontak-sekolah">Kontak</a>
		        </li>
		      </ul>
		    </div>
		  </div>
		</nav>



		<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <ol class="carousel-indicators">
    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
    <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="{{ asset('/seer/xk.PNG ') }}" class="d-block w-100" alt="" width="100%">
      <div class="carousel-caption d-none d-md-block">
        <h5>SELAMAT DATANG DI SMP PGRI CIRANJANG</h5>
        <p></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src=" {{ asset('/seer/guru.jpeg ') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>GURU SMP PGRI CIRANJANG</h5>
        <p></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="{{ asset('/seer/as.jpeg') }}" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>SISWA SMP PGRI CIRANJANG</h5>
        <p></p>
      </div>
    </div>
  </div>
</div>

<br><br>
    <footer class="mt-5" id="foot">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-4 col-12">
                    <h6 class="mt-5 text-center text-white">Peta Sekolah</h6>
                    <center>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.6894103101386!2d107.27213721431603!3d-6.807583968474162!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6855a0b778e567%3A0x55fda2f35408cc9c!2sSMP%20PGRI%20Ciranjang!5e0!3m2!1sid!2sid!4v1606908231800!5m2!1sid!2sid" width="250" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </center>
                </div>
                <div class="col-md-4 col-12">
                    <br>
                    <p class="mt-5 text-white ml-5">Nomor Telepon : 0877-0102-6553</p>
                    <p class="text-white ml-5">Email : smppgriciranjang@gmail.com</p>
                    <p class="text-white ml-5">Alamat : Jl Raya Sipon Desa Sindangjaya Kec Ciranjang Kab Cianjur (43282)</p>
                </div>
                <div class="col-md-4 col-12">
                    <h6 class="mt-5 text-center text-white">Media Sosial</h6>
                    <div class="row justify-content-center">
                    <a href="#" class="">
                        <img src="/image/logo/fb.png" alt="" class="img img-thumbnail" width="50" style="background: transparent;border:none;">
                    </a>
                    <a href="#" class="">
                        <img src="/image/logo/ig.png" alt="" class="img img-thumbnail" width="50" style="background: transparent;border:none;">
                    </a>
                    <a href="">
                        <img src="/image/logo/yt.png" alt="" class="img img-thumbnail" width="50" style="background: transparent;border:none;">
                    </a>
                    </div>
                </div>
            </div>
            <p class="text-center text-white" style="font-size: 15px;font-weight:bold;padding-top:80px;">Copyright SMP PGRI CIRANJANG | 2020</p>
        </div>
    </footer>
	</footer>

<style>
	footer{
	background-color: rgb(125, 151, 236);
	text-align: center;
	color: white;
	padding: 10px;
}
</style>






    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  </body>
</html>