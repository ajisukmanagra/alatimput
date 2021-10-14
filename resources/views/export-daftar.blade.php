<table>
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
                        <th>no peserta</th>
                        <th>kelas</th>
                        <td>Aksi</td>  
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
</table>