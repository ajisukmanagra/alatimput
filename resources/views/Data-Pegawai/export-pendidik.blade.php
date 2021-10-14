<table>
    <thead>
            <tr>
                        <th>No</th>
                        <th>NAMA</th>
                        <th>NIP</th>
                        <th>PANGKAT</th>
                        <th>JABATAN</th>
                        <th>MASA KERJA</th>
                        <th>PENDIDIKAN</th>
                        <th>TANGGAL LAHIR</th>
                         <th> MUALI KERJA</th>
                        <th>MUTASI</th>
                        <th>DISINIH SEJAK</th>
                        <th>E-MAIL</th>
                        <th>NUPTK</th>  
                        <th>NRG</th>
</tr>
</thead>
                    <tbody>
                        @php $no = 1 @endphp
                        @foreach($pendidik as $g)
                        <tr>
                        <td>{{ $no ++ }}</td>
                        <td>{{ $g->nama }}</td>
                        <td>{{ $g->nip }}</td>
                        <td>{{ $g->pangkat }}</td>
                        <td>{{ $g->jabatan }}</td>
                        <td>{{ $g->masakerja }}</td>
                        <td>{{ $g->pendidikan }}</td>
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