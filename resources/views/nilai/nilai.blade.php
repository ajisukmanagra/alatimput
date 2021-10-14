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
                        <th>Tipe</th>
                        <th>Nama Tugas/Latihan/Ujian	</th>
                        <th>Mata Pelajaran</th>
                        <th>Tanggal Mulai</th>
                        <th>Tanggal Selesai</th>
                        <th>Lama Pelajaran</th>
                        <th>Nilai</th>
                    </tr>
                    </thead>
                    <tbody>
                        @php $no = 1 @endphp
                        
                        <tr width="100%">
                        <td>{{ $no ++ }}</td>
                        <td>Latihan	</td>
                        <td>Latihan soal ( MEMBUAT MEDIA PROMOSI )</td>
                        <td>Produk Kreatif dan kewirausahaan</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>

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
