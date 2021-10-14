@extends('layouts.templet')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
            <!-- <a href="/ada/export_excel" class="btn btn-success my-3" >
            <span class="fa fa-upload"> Export</span>
            </a>
            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
            Import 
            </button> -->
             <a href="/tujuh/apload-tugas-kelas-7/create" class="btn btn-primary" target="_blank">
            <span class="fa fa-plus"> Apload Siswa Kelas-7</span>
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
                  <div class="modal-body">
                    <form method="post" action="/ada/import_excel/post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        
                        <label>Pilih File</label> <br>
                        <input type="file" name="file">

                        <input type="submit" class="btn btn-primary" value="Import">
                    </form>
                  </div>
                  <!-- <div class="modal-footer">
                    <button type="button" class="btn btn-primary"></button>
                  </div> -->
                </div>
              </div>
            </div>
                 <table id="dataTable" class="table mt-4">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>NamaTugas </th>
                        <th>Mata Pelajaran</th>
                        <th>Nama Pendidik</th>
                        <td>Aksi</td>
                    </tr>
                    </thead>
                    <tbody>
                        @php $no = 1 @endphp
                        @foreach($tujuh as $k)
                        <tr>
                        <td>{{ $no ++ }}</td>
                        <td>{{ $k->mata_pelajaran }}</td>
                        <td>{{ $k->pelajaran }}</td>
                        <td>{{ $k->nama }}</td>
                        <td>
                           <a href="/{{ $k->id }}" class="btn btn-warning">Ubah"</a>
                            <a href="/tujuh/tujuh-a/delete/{{ $k->id }}" class="btn btn-danger">Hapus</a>
                        </td>
                        </tr>
                        @endforeach
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
      $('#dataTable').DataTable();
    });
  </script>

@stop
