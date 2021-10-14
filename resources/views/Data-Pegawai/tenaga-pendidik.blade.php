@extends('layouts.templet')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
          <a href="/Data-Pegawai/tenaga/export_excel" class="btn btn-success my-3" >
            <span class="fa fa-upload"> Export</span>
            </a>
            <button type="button" class="btn btn-warning waves-effect" data-toggle="modal" data-target="#exampleModal">
            Import 
            </button>
             <a href="/Data-Pegawai/daftar-tenaga-pendidik/create" class="btn btn-primary waves-effect" target="_blank">
            <span class="fa fa-plus"> Tambah</span>
            </a>
             <a href="/Data-Pegawai/cetak-tenaga-pendidik" class="btn btn-warning waves-effect" target="_blank">
            <span class="fa fa-print"> CETAK</span>
            </a>
             <!-- <a href="/Data-Pegawai/tenaga-cetak-pdf" target="_blank" class="btn btn-md btn-danger waves-effect">
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
                    <form method="post" action="/Data-Pegawai/import_excel/post" enctype="multipart/form-data">
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
                        <th>Nama</th>
                        <th>Fhoto</th>
                        <th>jenis Kelamin</th>
                        <th>Tepe</th>
                        <th>Jabatan</th>
                        <th>Setatus</th> 
                        <th>Aksi</th>               
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1 @endphp
                        @foreach($tenaga as $k)
                        <tr>
                        <td>{{ $no ++ }}</td>
                        <td>{{ $k->nama }}</td>
                        <td><img src="{{ asset('storage/images/'.$k->foto) }}" alt="" width="70px"></td>
                        <td>{{ $k->jenis_kelamin}}</td>
                        <td>{{ $k->tipe }}</td>
                        <td>{{ $k->pegawai }}</td>
                        <td>{{ $k->setatus }}</td>
                        <td>
                           <a href="/Data-Pegawai/edit-data-tenaga-pendidik/{{ $k->id }}" class="btn btn-warning">Ubah"</a>
                            <a href="/Data-Pegawai/tenaga-pendidik/delete/{{ $k->id }}" class="btn btn-danger">Hapus</a>
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
