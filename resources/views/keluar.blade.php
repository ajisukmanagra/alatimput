@extends('layouts.templet')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
            <a href="/keluar/export_excel" class="btn btn-success my-3" >
            <span class="fa fa-upload"> Export</span>
            </a>
             <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
            Import 
            </button>
             <a href="/data/keluar/create" class="btn btn-primary" target="_blank">
            <span class="fa fa-plus"> Tambah</span>
            </a>
             <a href="/" class="btn btn-warning" target="_blank">
            <span class="fa fa-print"> CETAK</span>
            </a>
            <!-- <a href="/data/cetak-pdf" target="_blank" class="btn btn-md btn-danger waves-effect">
            Cetak PDF
             </a> -->
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
                    <form method="post" action="/keluar/import_excel/post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        
                        <label>Pilih File</label> <br>
                        <input type="file" name="file">

                        <input type="submit" class="btn btn-primary" value="Import">
                    </form>
                  </div>
                </div>
              </div>
            </div>
                <table id="dataTable" class="table mt-4">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Nis</th>
                        <th>Nama Siswa</th>
                        <th>Tgl Lahir</th>
                        <th>jenis kelamin</th>
                        <th>Kls</th>
                        <th>Nama Orang Tua</th>
                        <th>Keterangan</th>
                        <td>Aksi</td>
                    </tr>
                    </thead>
                    <tbody>
                        @php $no = 1 @endphp
                        @foreach($keluar as $k)
                        <tr>
                        <td>{{ $no ++ }}</td>
                        <td>{{ $k->Nis }}</td>
                        <td>{{ $k->Nama }}</td>
                        <td>{{ $k->Tgl }}</td>
                        <td>{{ $k->jenis_kelamin }}</td>
                        <td>{{ $k->kls }}</td>
                        <td>{{ $k->ortu }}</td>
                        <td>{{ $k->Keterangan }}</td>
                        <td>
                         <a href="/data/edit-data/{{ $k->id }}" class="btn btn-warning">Ubah"</a>
                            <a href="/keluar/delete/{{ $k->id }}" class="btn btn-danger">Hapus</a>
                            
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
 


