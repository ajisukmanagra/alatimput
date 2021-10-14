@extends('layouts.app')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Kelola Walikelas</h1>
        </div>
        <div class="section-body">
            <div class="mb-3">
                <ol class="breadcrumb bg-primary">
                    <li class="breadcrumb-item"><a href="{{route('admin.home')}}" class="text-white text-decoration-none">Home</a></li>
                    <li class="breadcrumb-item"><a href="#" class="text-white text-decoration-none">Kelola Walikelas</a></li>
                </ol>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-user-circle"></i> Walikelas</h4>
                </div>
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <a href="{{route('admin.walikelas.create')}}" class="btn btn-primary mb-4"><i class="fas fa-plus-circle"></i> Tambah Walikelas</a>&nbsp;
                            <a href="#" data-toggle="modal" data-target="#guruImport" class="btn btn-success mb-4"><i class="fas fa-link"></i> Import Walikelas</a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="wk">
                            <thead>
                            <tr>
                                <th scope="col" style="text-align: center;width: 6%">NO.</th>
                                <th scope="col">NAMA&nbsp;WALIKELAS</th>
                                <th scope="col">NIP&nbsp;/&nbsp;NUPTK&nbsp;/&nbsp;NIY</th>
                                <th scope="col">NIK</th>
                                <th scope="col">EMAIL</th>
                                <th scope="col">TEMPAT&nbsp;LAHIR</th>
                                <th scope="col">TANGGAL&nbsp;LAHIR</th>
                                <th scope="col">NO&nbsp;HP</th>
                                <th scope="col">PENDIDIKAN&nbsp;TERAKHIR</th>
                                <th scope="col">ALAMAT</th>
                                <th scope="col">AGAMA</th>
                                <th scope="col">JENIS&nbsp;KELAMIN</th>
                                <th scope="col">STATUS</th>
                                <th scope="col">KONFIRMASI&nbsp;KELAS</th>
                                <th scope="col" style="width: 25%;text-align: center">AKSI&nbsp;LAINNYA</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $nomor = 1; ?>
                            @foreach ($walikelas as $no => $wk)
                                <tr>
                                    <td scope="row" style="text-align: center">{{$nomor++}}</td>
                                    <td>{{ $wk->nama_walikelas }}</td>
                                    <td>{{ $wk->nip}}</td>
                                    <td>{{ $wk->nik}}</td>
                                    <td>{{ $wk->email}}</td>
                                    <td>{{ $wk->tempat_lahir }}</td>
                                    <td>@if($wk->tanggal_lahir)
                                        {{ date('d-m-Y', strtotime($wk->tanggal_lahir)) }}
                                        @else 
                                        @endif
                                    </td>
                                    <td>{{ $wk->no_hp }}</td>
                                    <td>{{ $wk->pendidikan_terakhir }}&nbsp;{{$wk->prodi}}</td>
                                    <td>
                                        <center>
                                            <button type="button" class="btn btn-primary btn-sm" style="font-size: 6px;" title="Alamat" data-toggle="popover" data-placement="bottom" data-content="{{ e(strip_tags($wk->alamat)) }}">
                                                <i class="fas fa-home"></i>
                                            </button>
                                        </center>
                                        
                                    </td>
                                    <td>{{ $wk->agama}}</td>
                                    <td>{{ $wk->jenis_kelamin}}</td>
                                    <td>{{ $wk->status}}</td>
                                    <td>{{ $wk->konfirmasi_kelas}}</td>
                                    <td class="text-center">
                                        <a href="{{ route('admin.walikelas.edit', $wk->id) }}" class="btn btn-sm btn-primary">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>
                                        <button onClick="Delete(this.id)" class="btn btn-sm btn-danger" id="{{ $wk->id }}">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </td>
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

<div class="modal" tabindex="-1" id="guruImport" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      
      <div class="modal-body">
        <div class="row">
            <div class="col-md-10 col-10">
                <h5 class="modal-title">Import Walikelas</h5>
            </div>
            <div class="col-md-2 col-2">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        <form action="{{route('admin.walikelas.import')}}" method="post" enctype="multipart/form-data">
            @csrf
            
            <div class="form-group">
                <label for="">File Excel</label>
                <input type="file" name="walikelas" class="form-control">
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
        $('#wk').DataTable();
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
                        url: "/admin/walikelas/delete/"+id,
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