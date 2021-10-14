<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAPORAN DATA PENDIDIK</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>

    <div class="container-fluid">

        <div class="row">
            <div class="col-8">
                <span class="header-text">LAPORAN DATA PENDIDIK</span> <br>
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
                </tr>
            </thead>
            <tbody>
                @php $i = 1; @endphp
                @foreach($guru as $k)
                <tr>
                    <td class="text-center">{{ $i ++ }}</td>
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
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

</body>

</html>