@extends('layouts.app')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Kelola Tata Usaha</h1>
        </div>
        <div class="section-body">
            <div class="mb-3">
                <ol class="breadcrumb bg-primary">
                    <li class="breadcrumb-item"><a href="{{route('admin.home')}}" class="text-white text-decoration-none">Home</a></li>
                    <li class="breadcrumb-item"><a href="#" class="text-white text-decoration-none">Kelola Tata Usaha</a></li>
                </ol>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-chalkboard-teacher"></i> Tata Usaha</h4>
                </div>
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <a href="{{route('admin.tatausaha.create')}}" class="btn btn-primary mb-4"><i class="fas fa-plus-circle"></i> Tambah Tata Usaha</a>&nbsp;
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered" id="guru">
                            <thead>
                            <tr>
                                <th scope="col" style="text-align: center;width: 6%">NO.</th>
                                <th scope="col">NAMA&nbsp;PEGAWAI</th>
                                <th scope="col">NIP</th>
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
                                <th scope="col">Jabatan</th>
                                <th scope="col" style="width: 25%;text-align: center">AKSI&nbsp;LAINNYA</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $nomor = 1; ?>
                            @foreach ($tatausaha as $no => $tu)
                                <tr>
                                    <td scope="row" style="text-align: center">{{$nomor++}}</td>
                                    <td>{{ $tu->nama_pegawai }}</td>
                                    <td>{{ $tu->nip}}</td>
                                    <td>{{ $tu->nik}}</td>
                                    <td>{{ $tu->email}}</td>
                                    <td>{{ $tu->tempat_lahir }}</td>
                                    <td>@if($tu->tanggal_lahir)
                                        {{ date('d-m-Y', strtotime($tu->tanggal_lahir)) }}
                                        @else 
                                        @endif
                                    </td>
                                    <td>{{ $tu->no_hp }}</td>
                                    <td>{{ $tu->pendidikan_terakhir }}&nbsp;{{$tu->prodi}}</td>
                                    <td>
                                        <center>
                                            <button type="button" class="btn btn-primary btn-sm" style="font-size: 6px;" title="Alamat" data-toggle="popover" data-placement="bottom" data-content="{{ e(strip_tags($tu->alamat)) }}">
                                                <i class="fas fa-home"></i>
                                            </button>
                                        </center>
                                        
                                    </td>
                                    <td>{{ $tu->agama}}</td>
                                    <td>{{ $tu->jenis_kelamin}}</td>
                                    <td>{{ $tu->status}}</td>
                                    <td>{{ $tu->jabatan }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('admin.tatausaha.edit', $tu->id) }}" class="btn btn-sm btn-primary">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>
                                        <button onClick="Delete(this.id)" class="btn btn-sm btn-danger" id="{{ $tu->id }}">
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

<script>
    // datatable
    $(document).ready(function() {
        $('#guru').DataTable();
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
                        url: "/admin/tata-usaha/delete/"+id,
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