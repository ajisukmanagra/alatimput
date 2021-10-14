<table>
    <thead>
            <tr>
                        <th>NAMA</th>
                        <th>NIP</th>
                        <th>PANGKAT</th>
                        <th>JABATAN</th>
                        <th>MASA KERJA</th>
                        <th>PENDIDIK</th>
                        <th>TANGGAL LAHIR </th>
                        <th>MULAI KERJA</th>
                         <th>MUTASI</th>
                        <th>DISINI SEJAK</th>
                        <th>EMAIL</th>
                        <th>NUPTK</th>
                        <th>NRG</th>
                        <td>Aksi</td>  
</tr>
</thead>
                    <tbody>
                        @php $no = 1 @endphp
                        @foreach($guru as $g)
                        <tr>
                        <td>{{ $no ++ }}</td>
                        <td>{{ $g->nama }}</td>
                        <td>{{ $g->nip }}</td>
                        <td>{{ $g->pangkat }}</td>
                        <td>{{ $g->jabatan }}</td>
                        <td>{{ $g->masakerja }}</td>
                        <td>{{ $g->pendidik }}</td>
                        <td>{{ $g->tgl }}</td>
                        <td>{{ $g->mulai_kerja }}</td>
                        <td>{{ $g->mutasi }}</td>
                        <td>{{ $g->disini_sejak }}</td>
                        <td>{{ $g->email }}</td>
                        <td>{{ $g->nuptk }}</td>
                        <td>{{ $g->nrg }}</td>
                        </tr>
                        @endforeach
</table>