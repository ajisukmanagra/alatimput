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
 <br>
	<table class='table table-bordered'>
		<thead>
			<tr  border="1" style="background-color: blue;">
				
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
			  @php $no = 1 @endphp
			 @foreach($tenaga as $k)
			<tr>
                       <td>{{ $no ++ }}</td>
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
 
</body>
</html>