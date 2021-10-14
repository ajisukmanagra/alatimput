<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style><br>
	<center>
		<h5> CETAK DATA SISWA</h4>
	</center>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
				
                        <th>No</th>
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
			</tr>
		</thead>
		<tbody>
			  @php $no = 1 @endphp
			 @foreach($daftar as $g)
			<tr>
					  <td>{{ $no ++ }}</td>
                        <td>{{ $g->nis }}</td>
                        <td>{{ $g->nisn }}</td>
                        <td>{{ $g->nama }}</td>
                        <td>{{ $g->jenis_kelamin }}</td	>
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
 
</body>
</html>