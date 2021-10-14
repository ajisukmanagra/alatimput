<table>
    <thead>
            <tr>
                        <th>No</th>
                        <th>NAMA</th>
                        <th>FHOTO</th>
                        <th>JENIS KELAMIN</th>
                        <th>TEPE</th>
                        <th>JABATAN</th>
                        <th>SEATUS</th>
</tr>
</thead>
                    <tbody>
                        @php $no = 1 @endphp
                        @foreach($tenaga as $g)
                        <tr>
                        <td>{{ $no ++ }}</td>
                        <td>{{ $g->nama }}</td>
                        <td>{{ $g->foto }}</td>
                        <td>{{ $g->jenis_kelamin }}</td>
                        <td>{{ $g->tipe }}</td>
                        <td>{{ $g->pegawai }}</td>
                        <td>{{ $g->setatus }}</td>
                        </tr>
                        @endforeach
</table>
   