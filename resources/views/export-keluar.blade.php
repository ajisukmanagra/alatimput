<table>
    <thead>
            <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Kontak</th>
                        <th>Asal Tempat</th>
                        <th>jenis kelamin</th>
                        <th>Keterangan</th>
                        <th>Tujuan</th>
                        <td>Aksi</td>   
</tr>
</thead>
                    <tbody>
                        @php $no = 1 @endphp
                        @foreach($keluar as $k)
                        <tr>
                        <td>{{ $no ++ }}</td>
                        <td>{{ $g->Nama }}</td>
                        <td>{{ $g->Kontak }}</td>
                        <td>{{ $g->Asal_tempat }}</td>
                        <td>{{ $g->jenis_kelamin }}</td>
                        <td>{{ $g->Keterangan }}</td>
                        <td>{{ $g->tujuan }}</td>
                        </tr>
                        @endforeach
</table>