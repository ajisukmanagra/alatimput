@extends('layouts.app')
@section('css')
    <style>
        h1{
            font-size: 20px;
        }
        .navbar-bg{
            height: 60px;
        }
    </style>
@endsection
@section('content')
<div class="main-content">
    
    <h1 class="mb-3">Kelola Tahun Ajaran</h1>

    <div class="mb-3">
        <ol class="breadcrumb bg-primary">
            <li class="breadcrumb-item"><a href="{{route('admin.home')}}" class="text-white text-decoration-none">Home</a></li>
            <li class="breadcrumb-item"><a href="#" class="text-white text-decoration-none">Kelola Tahun Ajaran</a></li>
        </ol>
    </div>
    <div class="card">
        <div class="card-header">
            <h4><i class="fas fa-calendar-alt"></i> Tahun Ajaran</h4>
        </div>
        <div class="card-body">
            <a href="#" data-toggle="modal" data-target="#tambah" class="btn btn-primary mb-4"><i class="fas fa-plus-circle"></i> Tambah Data</a>
            <div class="table-responsive">
                <table class="table table-bordered" id="jurusan">
                    <thead>
                    <tr>
                        <th scope="col" style="text-align: center;width: 6%">NO.</th>
                        <th scope="col">TAHUN&nbsp;AJARAN</th>
                        <th scope="col">STATUS</th>
                        <th scope="col" style="width: 15%;text-align: center">AKSI</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $nomor = 1; ?>
                    @foreach ($tahuns as $no => $tahun)
                        <tr>
                            <td scope="row" style="text-align: center">{{$nomor++}}</td>
                            <td>{{ $tahun->tahun_ajaran }}</td>
                            <td>{{$tahun->status}}</td>
                            <td class="text-center">
                                <a href="#" data-toggle="modal" data-target="#edit{{$tahun->id}}" class="btn btn-sm btn-primary">
                                    <i class="fa fa-pencil-alt"></i>
                                </a>
                                <button onClick="Delete(this.id)" class="btn btn-sm btn-danger" id="{{ $tahun->id }}">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </td>
                        </tr>

                        <div class="modal fade" id="edit{{$tahun->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-md modal-dialog-centered" role="document">
                                <div class="modal-content">
                                
                                    <div class="modal-body">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <h6>Edit Tahun Ajaran</h6>
                                        <form action="{{route('admin.tahun.post')}}" method="post">
                                            @csrf
                                            <input type="hidden" name="id" value="{{$tahun->id}}">
                                            <div class="form-group mt-3">
                                                <label for="">Tahun Ajaran</label>
                                                <input type="text" name="tahun_ajaran" value="{{$tahun->tahun_ajaran}}" id="" class="form-control form-control-sm" autocomplete="off" placeholder="Masukan Tahun Ajaran">
                                            </div>
                                            <div class="form-group">
                                                <label for="">Status</label>
                                                <select name="status" id="" class="form-control form-control-sm">
                                                    <option value="">Pilih Status</option>
                                                    <option value="aktif" @if($tahun->status == 'aktif') selected @endif>aktif</option>
                                                    <option value="tidak-aktif" @if($tahun->status == 'tidak-aktif') selected @endif>tidak aktif</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <button class="btn btn-sm btn-primary" type="submit">Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
        
    <!-- Modal Tambah Data -->
    <div class="modal fade" id="tambah" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-md modal-dialog-centered" role="document">
            <div class="modal-content">
            
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h6>Tambah Tahun Ajaran</h6>
                    <form action="{{route('admin.tahun.post')}}" method="post">
                        @csrf
                        <div class="form-group mt-3">
                            <label for="">Tahun Ajaran</label>
                            <input type="text" name="tahun_ajaran" id="" class="form-control form-control-sm" autocomplete="off" placeholder="Masukan Tahun Ajaran">
                        </div>
                        <div class="form-group">
                            <label for="">Status</label>
                            <select name="status" id="" class="form-control form-control-sm">
                                <option value="">Pilih Status</option>
                                <option value="aktif">aktif</option>
                                <option value="tidak-aktif">tidak aktif</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-sm btn-primary" type="submit">Simpan</button>
                        </div>
                    </form>
                </div>
            
            </div>
        </div>
    </div>
</div>

<script>
    // datatable
    $(document).ready(function() {
        $('#jurusan').DataTable();
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
                        url: "/admin/tahun/delete/"+id,
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