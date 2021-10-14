<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAPORAN DATA SISWA</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>

    <div class="container-fluid">

        <div class="row">
            <div class="col-8">
                <span class="header-text">LAPORAN DATA SISWA</span> <br>
                <small>SMP PGRI CIRANJANG</small>
            </div>
            <div class="col-4 float-right">
                <img src="{{ public_path('img/') }}" width="60px" class="float-right">
            </div>
        </div>

        <hr>

        <br><br>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="text-center" style="width: 20px;">No</th>
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
                @php $i = 1; @endphp
                @foreach($daftar as $g)
                <tr>
                    <td class="text-center">{{ $i ++ }}</td>
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
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

</body>

</html>