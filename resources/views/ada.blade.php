@extends('layouts.templet')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
            <a href="/ada/export_excel" class="btn btn-success my-3" >
            <span class="fa fa-upload"> Export</span>
            </a>
            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
            Import 
            </button>
             <a href="/data/ada/create" class="btn btn-primary" target="_blank">
            <span class="fa fa-plus"> Tambah</span>
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
                        <th>Nama</th>
                        <th>Kontak</th>
                        <th>Asal Tempat</th>
                        <th>jenis kelamin</th>
                        <th>Instansi</th>
                        <th>Setatus</th>
                        <td>Aksi</td>
                    </tr>
                    </thead>
                    <tbody>
                        @php $no = 1 @endphp
                        @foreach($ada as $k)
                        <tr>
                        <td>{{ $no ++ }}</td>
                        <td>{{ $k->Nama }}</td>
                        <td>{{ $k->Kontak }}</td>
                        <td>{{ $k->Asal_tempat }}</td>
                        <td>{{ $k->jenis_kelamin }}</td>
                        <td>{{ $k->Keterangan }}</td>
                        <td>{{ $k->tujuan }}</td>
                        <td>
                           <a href="/ubah/edit-data-kunjungan-tamu/{{ $k->id }}" class="btn btn-warning">Ubah"</a>
                            <a href="/data/ada/delete/{{ $k->id }}" class="btn btn-danger">Hapus</a>
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
