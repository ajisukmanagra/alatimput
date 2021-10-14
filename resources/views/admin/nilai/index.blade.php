@extends('layouts.app')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Kelola Nilai</h1>
        </div>
        <div class="section-body">
            <div class="mb-3">
                <ol class="breadcrumb bg-primary">
                    <li class="breadcrumb-item"><a href="{{route('admin.home')}}" class="text-white text-decoration-none">Home</a></li>
                    <li class="breadcrumb-item"><a href="#" class="text-white text-decoration-none">Kelola Nilai</a></li>
                </ol>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-trophy"></i> Nilai</h4>
                </div>
                <div class="card-body">
                    <!-- <div class="container">
                        <div class="row">
                            <a href="{{route('admin.nilai.create')}}" class="btn btn-primary mb-4"><i class="fas fa-plus-circle"></i> Tambah Nilai</a>&nbsp;
                            <a href="#" data-toggle="modal" data-target="#nilaiImport" class="btn btn-success mb-4"><i class="fas fa-link"></i> Import Nilai</a>
                        </div>
                    </div> -->
                    
                    
                    <div class="table-responsive">
                        <table class="table table-bordered" id="nilai">
                            <thead>
                            <tr>
                                <th scope="col" style="text-align: center;width: 6%">NO.</th>
                                <th scope="col">NIS</th>
                                <th scope="col">NISN</th>
                                <th scope="col">NAMA</th>
                                <th scope="col">KELAS</th>
                                <th scope="col">MATA&nbsp;PELAJARAN</th>
                                <th scope="col">KKM</th>
                                <th scope="col">ANGKA</th>
                                <th scope="col">PREDIKAT</th>
                                <th scope="col">KETERANGAN&nbsp;NILAI</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $nomor = 1; ?>
                            @foreach ($nilais as $no => $nilai)
                                <tr>
                                    <td scope="row" style="text-align: center">{{$nomor++}}</td>
                                    <td>{{ $nilai->nis }}</td>
                                    <td>{{ $nilai->nisn}}</td>
                                    <td>{{ $nilai->nama}}</td>
                                    <td>{{ $nilai->kelas}}</td>
                                    <td>{{ $nilai->mapel}}</td>
                                    <td>{{ $nilai->kkm}}</td>
                                    <td>{{ $nilai->angka}}</td>
                                    <td>{{ $nilai->predikat}}</td>
                                    <td>{{ $nilai->keterangan}}</td>
                                    
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="modal" tabindex="-1" id="nilaiImport" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      
      <div class="modal-body">
        <div class="row">
            <div class="col-md-10 col-10">
                <h5 class="modal-title">Import Nilai</h5>
            </div>
            <div class="col-md-2 col-2">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        <form action="{{route('admin.nilai.import')}}" method="post" enctype="multipart/form-data">
            @csrf
            {{-- <div class="form-group mt-3">
                <label for="">Format Excel</label>            
                <?php $format = DB::table('formats')->where('title', 'FORMAT EXCEL NILAI')->first(); ?>
                <br>
                <a href="/files/{{$format->file}}"><i class="fas fa-download"></i> {{$format->file}}</a>
            </div> --}}
            <div class="form-group">
                <label for="">File Excel</label>
                <input type="file" name="nilai" class="form-control">
            </div>
            
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
        
      </div>
      
    </div>
  </div>
</div>

<script>
    // datatable
    $(document).ready(function() {
        $('#nilai').DataTable();
    });

    //ajax delete
    function Delete(id)
        {
            var id = id;
            var token = $("meta[name='csrf-token']").attr("content");

            swal({
                title: "APAKAH KAMU YAKIN ?",
                text: "INGIN MENGHAPUS DATA INI!",
                icon: "warning",
                buttons: [
                    'TIDAK',
                    'YA'
                ],
                dangerMode: true,
            }).then(function(isConfirm) {
                if (isConfirm) {

                    //ajax delete
                    jQuery.ajax({
                        url: "/admin/nilai/delete/"+id,
                        data:     {
                            "id": id,
                            "_token": token
                        },
                        type: 'DELETE',
                        success: function (response) {
                            if (response.status == "success") {
                                swal({
                                    title: 'BERHASIL!',
                                    text: 'DATA BERHASIL DIHAPUS!',
                                    icon: 'success',
                                    timer: 1000,
                                    showConfirmButton: false,
                                    showCancelButton: false,
                                    buttons: false,
                                }).then(function() {
                                    location.reload();
                                });
                            }else{
                                swal({
                                    title: 'GAGAL!',
                                    text: 'DATA GAGAL DIHAPUS!',
                                    icon: 'error',
                                    timer: 1000,
                                    showConfirmButton: false,
                                    showCancelButton: false,
                                    buttons: false,
                                }).then(function() {
                                    location.reload();
                                });
                            }
                        }
                    });

                } else {
                    return true;
                }
            })
        }
</script>
@stop 