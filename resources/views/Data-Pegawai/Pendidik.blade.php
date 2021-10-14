@extends('layouts.templet')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
          <a href="/Data-Pegawai/pendidik/export_excel" class="btn btn-success my-3" >
            <span class="fa fa-upload"> Export</span>
            </a>
            <button type="button" class="btn btn-warning waves-effect" data-toggle="modal" data-target="#exampleModal">
            Import 
            </button>
             <a href="/Data-Pegawai/daftar/create" class="btn btn-primary" target="_blank">
            <span class="fa fa-plus"> Tambah</span>
            </a>
             <a href="/" class="btn btn-warning waves-effect" target="_blank">
            <span class="fa fa-print"> CETAK</span>
            </a>
             <!-- <a href="/Data-Pegawai/pendidik-cetak-pdf" target="_blank" class="btn btn-md btn-danger waves-effect">
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
                    <tr width="100%">
                        <th>No</th>
                        <th>Nama</th>
                        <th>NIP</th>
                        <th>Pangkat</th>
                        <th>Jabatan</th>
                        <th>Masa Kerja</th>
                        <th>Pendidikan</th>
                        <th>Tanggal Lahir</th>
                        <th>Mulai Kerja</th>
                        <th>Mutasi Diri</th>
                        <th>Disinih Sejak</th>
                        <th>E-mail</th>
                        <th>NUPTK</th>
                        <th>NRG</th>
                        <td>Aksi</td>
                    </tr>
                    </thead>
                    <tbody>
                        @php $no = 1 @endphp
                        @foreach($guru as $k)
                        <tr width="100%">
                        <td>{{ $no ++ }}</td>
                        <td>{{ $k->nama }}</td>
                        <td>{{ $k->nip }}</td>
                        <td>{{ $k->pangkat }}</td>
                        <td>{{ $k->jabatan }}</td>
                        <td>{{ $k->masakerja }}</td>
                        <td>{{ $k->pendidikan }}</td>
                        <td>{{ $k->tgl }}</td>
                        <td>{{ $k->mulai_kerja }}</td>
                        <td>{{ $k->mutasi }}</td>
                        <td>{{ $k->disini_sejak }}</td>
                        <td>{{ $k->email }}</td>
                        <td>{{ $k->nuptk }}</td>
                        <td>{{ $k->nrg }}</td>
                        <td>
                           <a href="/Data-Pegawai/edit-data-pendidik/{{ $k->id }}" class="btn btn-warning">Ubah"</a>
                            <a href="/Data-Pegawai/Pendidik/delete/{{ $k->id }}" class="btn btn-danger">Hapus</a>
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
