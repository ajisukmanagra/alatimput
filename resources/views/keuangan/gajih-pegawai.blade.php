@extends('layouts.templet')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
            <a href="/banguna/kelas/export_excel" class="btn btn-success my-3" >
            <span class="fa fa-upload"> Export</span>
            </a>
            <button type="button" class="btn btn-warning waves-effect" data-toggle="modal" data-target="#exampleModal">
            Import 
            </button>
             <a href="/keuangan/daftar-gajih-pegawai/create" class="btn btn-primary" target="_blank">
            <span class="fa fa-plus"> Tambah</span>
            </a>
             <a href="/" class="btn btn-warning waves-effect" target="_blank">
            <span class="fa fa-print"> CETAK</span>
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
                    <form method="post" action="/bangunan/kelas/import_excel/post" enctype="multipart/form-data">
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
                <table id="bangunanTable" class="table mt-4">
                    <thead>
                    <tr>
                   <th>NO</th>
                        <th>NAMA</th>
                        <th>FHOTO</th>
                         <th>L/P</th>
                        <th>NIK</th>
                        <th>JABATAN</th>
                        <th>HARI KERJA</th>
                         <th>GAJIH PERHARI</th>
                        <th>TUNJANGAN/BONUS</th>
                        <th>GAJIH BULANAN</th>
                        <th>AKSI</th>
                    </tr>
                    </thead>
                    <tbody>
                        @php $no = 1 @endphp
                        @foreach($gajih as $k)
                        <tr>
                        <td>{{ $no ++ }}</td>
                        <td>{{ $k->nama }}</td>
                        <td><img src="{{ asset('storage/images/'.$k->foto) }}" alt="" width="70px"></td>
                        <td>{{ $k->jenis_kelamin }}</td>
                        <td>{{ $k->nik }}</td>
                        <td>{{ $k->jabatan }}</td>
                        <td>{{ $k->hari_kerja }}</td>
                        <td>{{ $k->gajih_perhari }}</td>
                        <td>{{ $k->tunjangan }}</td>
                        <td>{{ $k->gajih_perbulan }}</td>
                        <td>
                            <a href="/keuangan/edit-data-gajih-pegawai/{{ $k->id }}" class="btn btn-warning">Ubah"</a>
                            <a href="/keuangan/gajih-pegawai/delete/{{ $k->id }}" class="btn btn-danger">Hapus</a>
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
      $('#bangunanTable').bangunanTable();
    });
  </script>

@stop
