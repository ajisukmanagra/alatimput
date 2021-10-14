<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="http://localhost/project_smp/public/seer/default.png">
  <title>SMP PGRI CIRANJANG</title>
  <link href="{{ asset('templet/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{ asset('templet/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{ asset('templet/css/ruang-admin.min.css')}}" rel="stylesheet">
  <link href="{{ asset('templet/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
</head>
<style>
  .kotak{
    color: #fff;
  }
</style>
<body id="page-top">
  

  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon">
          <img class="rounded-circle" src="{{ asset('/seer/kp.jpg') }}">
        </div>
        <div class="sidebar-brand-text mx-3">Farijan</div>
      </a>
      <hr class="sidebar-divider my-0">
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Menu
      </div>
      <li class="nav-item">
        <a class="nav-link collapsed" href="">
         <i class="fa fa-book fa-2x text-primary" aria-hidden="true"></i>
          <span>Data Peribadi</span>
        </a>
       <li class="nav-item">
        <a class="nav-link collapsed" href="">
         <i class="fa fa-bars fa-2x text-primary" aria-hidden="true"></i>
          <span>Matri</span>
        </a>
      </li>
  
       <li class="nav-item">
        <a class="nav-link collapsed" href="">
         <i class="fas fa-stream fa-2x text-primary" aria-hidden="true"></i>
          <span>Tugas</span>
        </a>
      </li><i class=""></i>
         <li class="nav-item">
        <a class="nav-link collapsed" href="">
         <i class="far fa-window-restore fa-2x text-primary" aria-hidden="true"></i>
          <span>Kelola Nilai</span>
        </a>
      </li>

      </li><i class=""></i>
         <li class="nav-item">
        <a class="nav-link collapsed" href="">
         <i class="far fa-window-restore fa-2x text-primary" aria-hidden="true"></i>
          <span>Format</span>
        </a>
      </li>
     
    
    </ul>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
  
        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
          <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <ul class="navbar-nav ml-auto">
            <li class="nav-link dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="">
                <div class="kotak">
                  <span id="jam"></span> 
                  <span id="menit"></span> 
                  <span id="detik"></span>
                </div>
                </a>
              </li>
            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                @if(Auth::user()->foto == '')
                <img class="img-profile rounded-circle" src="{{ asset('/seer/logo.jpg')}}" style="max-width: 60px">
                @else
                <img class="img-profile rounded-circle" src="{{ asset('img/guru/'. Auth::user()->foto )}}" style="max-width: 60px">
                @endif
              <span class="ml-2 d-none d-lg-inline text-white small">{{ Auth::user()->name}}</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400 "></i>
                  Keluar
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- Topbar -->

        <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper">
          <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
          </div> -->

          <div class="row mb-3">
          @yield('content')
           
          </div>
          <!--Row-->

          <!-- Modal Logout -->
          <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabelLogout">farijan</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Apakah Anda Yakin?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
            
                  <a class="btn btn-primary" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!---Container Fluid-->
      </div>
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>SMP PGRI Ciranjang  &copy; <script> document.write(new Date().getFullYear()); </script> - 
              <b><a href="https://www.facebook.com/farijan.muhamad/" target="_blank">Design by. Muhamad Farijan</a></b>
            </span>
          </div>
        </div>
      </footer>
      <!-- Footer -->
    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <script src="{{ asset('templet/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('templet/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('templet/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
  <script src="{{ asset('templet/js/ruang-admin.min.js')}}"></script>
  <script src="{{ asset('templet/vendor/chart.js/Chart.min.js')}}"></script>
  <script src="{{ asset('templet/js/demo/chart-area-demo.js')}}"></script> 
  <script src="{{ asset('templet/vendor/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{ asset('templet/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
  @yield('js') 
  <script>
	window.setTimeout("waktu()", 1000);
 
	function waktu() {
		var waktu = new Date();
		setTimeout("waktu()", 1000);
		document.getElementById("jam").innerHTML = waktu.getHours();
		document.getElementById("menit").innerHTML = waktu.getMinutes();
		document.getElementById("detik").innerHTML = waktu.getSeconds();
	}
</script>
</body>

</html>