<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAPORAN DATA SISWA KELUAR</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>

    <div class="container-fluid">

        <div class="row">
            <div class="col-8">
                <span class="header-text">LAPORAN DATA SISWA KELUAR</span> <br>
                <small>SMP PGRI CIRANJANG</small>
            </div>
            <div class="col-4 float-right">
                <img src="{{ public_path('img/') }}" width="60px" class="float-right">
            </div>
        </div>

        <hr>

        <br><br>
        <style type="text/css" media="print">

    </style>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="text-center" style="width: 20px; size: landscape;">No</th>
                        <th>Nis</th>
                        <th>Nama Siswa</th>
                        <th>Tgl Lahir</th>
                        <th>jenis kelamin</th>
                        <th>Kls</th>
                        <th>Nama Orang Tua</th>
                        <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                @php $i = 1; @endphp
                @foreach($keluar as $k)
                <tr>
                        <p class="text-center">{{ $i ++ }}</p>
                        <td>{{ $k->Nis }}</td>
                        <td>{{ $k->Nama }}</td>
                        <td>{{ $k->Tgl }}</td>
                        <td>{{ $k->jenis_kelamin }}</td>
                        <td>{{ $k->kls }}</td>
                        <td>{{ $k->ortu }}</td>
                        <td>{{ $k->Keterangan }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

</body>

</html>