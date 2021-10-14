<table>
    <thead>
            <tr>
                        <th>No</th>
                        <th>NIS</th>
                        <th>NAMA</th>
                        <th>TANGGAL LAHIR</th>
                        <th>JENIS KELAMIN</th>
                        <th>KELAS</th>
                        <th>NAMA ORANG TUA</th>
                        <th>KETERANGAN</th>
</tr>
</thead>
                    <tbody>
                        @php $no = 1 @endphp
                        @foreach($keluar as $g)
                        <tr>
                        <td>{{ $no ++ }}</td>
                        <td>{{ $g->Nis }}</td>
                        <td>{{ $g->Nama }}</td>
                         <td>{{ $g->Tgl }}</td>
                        <td>{{ $g->jenis_kelamin }}</td>
                        <td>{{ $g->kls }}</td>
                        <td>{{ $g->ortu }}</td>
                        <td>{{ $g->Keterangan }}</td>
                        </tr>
                        @endforeach
</table>
      
    