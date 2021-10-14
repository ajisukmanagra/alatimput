@extends('layouts.navbar')

@section('content')
<div class="container-fluid">
    <div class="card">
 
        

        
            
            <!-- Modal -->
        
                
            
                </div>
              </div>
            </div>
                <table id="dataTable" class="table mt-4">
                    <thead>
                    <tr width="100%">
                        <th>No</th>
                        <th>HARI DAN TANGGAL</th>
                        <th>SESI / JAM	</th>
                        <th>NAMA UJIAN</th>
                        <th>MATA PELAJARAN / KELAS</th>
                        <th>STATUS UJIAN</th>
                        <th>SOAL</th>
                        <th>DURASI</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                        @php $no = 1 @endphp
                        
                        <tr width="100%">
                        <td>{{ $no ++ }}</td>
                        <td>Selasa 09 Februari 2021</td>
                        <td>Sesi 1</td>
                        <td>Harian ( ULANGAN HARIAN PRODUK KREATIF DAN KEWIRAUSAAN )</td>
                        <td>Produk Kreatif dan kewirausahaan - AHMAD SIROJUDIN, S.T. (XI RPL 2)</td>
                        <td>Tida Tersedia</td>
                        <td>20 Pilihan</td>
                        <td>90 Menit</td>

                        <td>
                           <a href="" class="btn btn-warning">Lihat"</a>
                        </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
    $(document).ready(function () {
   $('#dataTable').DataTable( {
        "order": [
          [ 3, "asc" ],
          ],
          
        "columnDefs": [{
          "targets": 0,
          "orderable": false
        }]
    } );
    });
  </script>
@stop
