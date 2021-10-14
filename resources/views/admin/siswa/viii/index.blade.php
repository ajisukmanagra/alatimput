@extends('layouts.app')

@section('content')
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Siswa VIII</h1>
        </div>
        <div class="section-body">
            <div class="mb-3">
                <ol class="breadcrumb bg-primary">
                    <li class="breadcrumb-item"><a href="{{route('admin.home')}}" class="text-white text-decoration-none">Home</a></li>
                    <li class="breadcrumb-item"><a href="#" class="text-white text-decoration-none">Siswa VIII</a></li>
                </ol>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4><i class="fas fa-users"></i> Siswa VIII</h4>
                </div>
                <div class="card-body">
                    <a href="{{route('admin.siswa.create')}}" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah Siswa</a>
                    &nbsp;
                    <a data-toggle="modal" data-target="#siswaImport" class="btn btn-sm btn-success"><i class="fas fa-link"></i> Import Siswa</a>

                    <div class="table-responsive">
                        <table class="table table-bordered" id="siswa">
                            <thead>
                            <tr>
                                <th scope="col" style="text-align: center;width: 6%">NO.</th>
                                <th scope="col">NAMA&nbsp;MURID</th>
                                <th scope="col">NIS</th>
                                <th scope="col">NISN</th>
                                <th scope="col">KELAS</th>
                                <th scope="col">TEMPAT&nbsp;LAHIR</th>
                                <th scope="col">TANGGAL&nbsp;LAHIR</th>
                                <th scope="col">STATUS&nbsp;DALAM&nbsp;KELUARGA</th>
                                <th scope="col">ANAK&nbsp;KE</th>
                                <th scope="col">JENIS&nbsp;KELAMIN</th>
                                <th scope="col">AGAMA</th>
                                <th scope="col">SEKOLAH&nbsp;ASAL</th>
                                <th scope="col">KELAS&nbsp;DITERIMA</th>
                                <th scope="col">TANGGAL&nbsp;DITERIMA</th>
                                <th scope="col">TAHUN&nbsp;IJAZAH</th>
                                <th scope="col">NO&nbsp;SERI&nbsp;IJAZAH</th>
                                <th scope="col">TAHUN&nbsp;SKHUN</th>
                                <th scope="col">NO&nbsp;SERI&nbsp;SKHUN</th>
                                <th scope="col">NAMA&nbsp;AYAH</th>
                                <th scope="col">PEKERJAAN&nbsp;AYAH</th>
                                <th scope="col">NAMA&nbsp;IBU</th>
                                <th scope="col">PEKERJAAN&nbsp;IBU</th>
                                <th scope="col">NAMA&nbsp;WALI</th>
                                <th scope="col">AKSI&nbsp;LAINNYA</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $nomor = 1; ?>
                            @foreach ($siswas as $no => $siswa)
                                <tr>
                                    <td scope="row" style="text-align: center">{{$nomor++}}</td>
                                    <td>{{ $siswa->nama }}</td>
                                    <td>{{ $siswa->nis}}</td>
                                    <td>{{ $siswa->nisn}}</td>
                                    <td>{{$siswa->kelas->nama_kelas}}</td>
                                    <td>{{ $siswa->tempat_lahir }}</td>
                                    <td>{{ date('d-m-Y', strtotime($siswa->tgl_lahir)) }}</td>
                                    <td>{{ $siswa->status_dlm_keluarga }}</td>
                                    <td>{{ $siswa->anak_ke }}</td>
                                    <td>{{ $siswa->jenis_kelamin}}</td>
                                    <td>{{ $siswa->agama}}</td>
                                    <td>{{$siswa->sekolah_asal}}</td>
                                    <td>{{$siswa->kelas_diterima}}</td>
                                    <td>{{$siswa->tgl_diterima}}</td>
                                    <td>{{$siswa->tahun_ijazah}}</td>
                                    <td>{{$siswa->no_ijazah}}</td>
                                    <td>{{$siswa->tahun_skhun}}</td>
                                    <td>{{$siswa->no_skhun}}</td>
                                    <td>
                                    {{ $siswa->nama_ayah}}
                                    </td>
                                    <td>{{$siswa->pekerjaan_ayah}}</td>
                                    <td>
                                    {{ $siswa->nama_ibu}}
                                    </td>
                                    <td>{{$siswa->pekerjaan_ibu}}</td>
                                    <td>
                                        {{ $siswa->nama_wali}}
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('admin.siswa.edit', $siswa->id) }}" class="btn btn-sm btn-primary">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>

                                        <button onClick="Delete(this.id)" class="btn btn-sm btn-danger" id="{{ $siswa->id }}">
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
        $('#siswa').DataTable();
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
                        url: "/admin/siswa/delete/"+id,
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
