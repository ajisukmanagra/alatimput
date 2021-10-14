@extends('layouts.templet')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
            <a href="/daftar/export_excel" class="btn btn-primary waves-effect">
            <span class="fa fa-upload"> Export</span>
            </a>
            
            
            <button type="button" class="btn btn-warning waves-effect" data-toggle="modal" data-target="#exampleModal">
            Import 
            </button>
             <a href="/daftar" class="btn btn-success my-3" >
            <span class="fa fa-plus"> Tambah</span>
            </a>
            <a href="/siswa_cetak" class="btn btn-warning waves-effect" target="_blank">
            <span class="fa fa-print"> CETAK</span>
           <a href="/cetak_permintaan_pdf" target="_blank" class="btn btn-md btn-danger waves-effect">
            Cetak PDF
             </a>
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
                    <form method="post" action="/daftar/import_excel/post" enctype="multipart/form-data">
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
                <table class="table mt-4" id="dataTable">
                  <!-- Ijan, data ieu ngambilna dina tabel naon? 
                    Naha field, nama di isi ku NIS?
                    heeee akang ku ijan can di ubah ih ijan na nuju riweh heee
                -->
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Nis</th>
                        <th>Nisn</th>
                        <th>Nama</th>
                        <th>jenis kelamin</th>
                        <th>tempat</th>
                        <th>tahun</th>
                        <th>Nama orang tua</th>
                         <th>No ijajah</th>
                        <th>No skhun</th>
                        <th>No peserta ujian</th>
                        <th>kelas</th>
                        <td>Aksi</td>
                    </tr>
                    </thead>
                    <tbody>
                        @php $no = 1 @endphp
                        @foreach($daftar as $g)
                        <tr>
                        <td>{{ $no ++ }}</td>
                        <td>{{ $g->nis }}</td>
                        <td>{{ $g->nisn }}</td>
                        <td>{{ $g->nama }}</td>
                        <td>{{ $g->jenis_kelamin }}</td>
                        <td>{{ $g->tempat }}</td>
                        <td>{{ $g->tahun }}</td>
                        <td>{{ $g->orangtua }}</td>
                        <td>{{ $g->no_ijajah }}</td>
                        <td>{{ $g->no_skhun }}</td>
                        <td>{{ $g->no_peserta }}</td>
                        <td>{{ $g->kelas }}</td>
                        <td>
                          <a href="/edit-data/{{ $g->id }}" class="btn btn-warning">Ubah"</a>
                            <a href="/delete/{{ $g->id }}" class="btn btn-danger">Hapus</a>
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