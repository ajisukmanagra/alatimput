@extends('layouts.templet')

@section('content')

 <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">SMP PGRI CIRANJANG</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item active" aria-current="page">Dashboard Admin</li>
            </ol>
          </div>


          <div class="row mb-3">
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Siswa Keluar</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $keluar}}</div>
                      <div class="mt-2 mb-0 text-muted text-xs">
                        <span class="text-success mr-2"><i class="fa fa-arrow-up"></i> 10.%</span>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-primary"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Earnings (Annual) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1"> SISWA</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $siswa}}</div>
                      <div class="mt-2 mb-0 text-muted text-xs">
                        <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 70%</span>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-info"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- New User Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1"> Pendidik </div>
                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $data_guru }}</div>
                      <div class="mt-2 mb-0 text-muted text-xs">
                        <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 70%</span>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-user-graduate  fa-2x text-primary"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1"> KELAS </div>
                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{ $bangunan }}</div>
                      <div class="mt-2 mb-0 text-muted text-xs">
                        <span class="text-success mr-2"><i class="fas fa-arrow-up"></i> 70%</span>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fa fa-building  fa-2x text-primary"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>


              <!-- Grafik -->
        <div class="row">
          <div class="col-md-6 col-12 mb-3">
              <div class="card h-100">
                  <div class="card-body">
                      <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-uppercase mb-1"> Grafik Siswa</div>
                      </div>
                      <div id="pie"></div>
                  </div>
              </div>
          </div>
          <div class="col-md-6 col-12 mb-3">
            <div class="card h-100">
                <div class="card-body">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-uppercase mb-1"> Grafik Akun</div>
                    </div>
                    <div id="pie2"></div>
                </div>
            </div>
          </div>
        </div>
        


           
            
</div>
</div>  
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script>
var option = {
        colors : ['#0099ff', '#47C363'],
        series: [{{ $siswa }}, {{ $keluar }}],
        chart: {
        width: 380,
        type: 'pie',
    },
    labels: ['siswa', 'keluar'],
    responsive: [{
        breakpoint: 480,
        options: {
        chart: {
            width: 300
        },
        legend: {
            position: 'bottom'
        }
        }
    }]
};

var pie = new ApexCharts(document.querySelector("#pie"), option);
pie.render();

</script>
<script>
var option_2 = {
        colors : ['#0099ff', '#47C363', '#FC544B'],
        series: [{{ $data_guru }}, {{ $siswa }}, {{ $Tenaga }}],
        chart: {
        width: 380,
        type: 'pie',
    },
    labels: ['data_guru', 'siswa', 'Tenaga'],
    responsive: [{
        breakpoint: 480,
        options: {
        chart: {
            width: 300
        },
        legend: {
            position: 'bottom'
        }
        }
    }]
};
var pie_2 = new ApexCharts(document.querySelector("#pie2"), option_2);
pie_2.render();
</script>

@endsection