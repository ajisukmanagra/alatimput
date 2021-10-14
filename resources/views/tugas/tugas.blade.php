@extends('layouts.navbar')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
          <a href="/materi/materi/export_excel" class="btn btn-success my-3" >
            <span class="fa fa-upload"> Export</span>
            </a>
    
            </a>
             <a href="/materi/materi-cetak-pdf" target="_blank" class="btn btn-md btn-danger waves-effect">
            Cetak PDF
             </a>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Import EXCEL</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
            
                </div>
              </div>
            </div>
                <table id="dataTable" class="table mt-4">
                    <thead>
                    <tr width="100%">
                        <th>No</th>
                        <th>Nama Tugas</th>
                        <th>Mata Pelajaran</th>
                        <th>Nama Pendidik</th>
                        <th>Aksi</th>
                    </tr>
                    </thead>
                    <tbody>
                        @php $no = 1 @endphp
                        
                        <tr width="100%">
                        <td>{{ $no ++ }}</td>
                        <td>NOTASI FAKTORIAL DAN PERMUTASI</td>
                        <td>Matematika Teknik</td>
                        <td>YAYU MERLIAWATI, S.Pd</td>
                
                        <td>
                           <a href="" class="btn btn-warning">Selengkapnya"</a>
                            <a href="" class="btn btn-danger">Unggas Tugas</a>
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
