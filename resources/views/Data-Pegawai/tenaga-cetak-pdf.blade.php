<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAPORAN DATA TENAGA PENDIDIK</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>

    <div class="container-fluid">

        <div class="row">
            <div class="col-8">
                <span class="header-text">LAPORAN DATA TENAGA PENDIDIK</span> <br>
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
                        <th>Fhoto</th>
                        <th>jenis Kelamin</th>
                        <th>Tepe</th>
                        <th>Jabatan</th>
                        <th>Setatus</th> 
                </tr>
            </thead>
            <tbody>
                @php $i = 1; @endphp
                @foreach($tenaga as $k)
                <tr>
                    <td class="text-center">{{ $i ++ }}</td>
                       <td>{{ $k->nama }}</td>
                        <td><img src="{{ asset('storage/images/'.$k->foto) }}" alt="" width="70px"></td>
                        <td>{{ $k->jenis_kelamin}}</td>
                        <td>{{ $k->tipe }}</td>
                        <td>{{ $k->pegawai }}</td>
                        <td>{{ $k->setatus }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

</body>

</html>