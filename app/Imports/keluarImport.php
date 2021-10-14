<?php

namespace App\Imports;

use App\Models\Keluar;
use Maatwebsite\Excel\Concerns\ToModel;
// use Maatwebsite\Excel\Concerns\WithHeadingRow;

class keluarImport implements ToModel //, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Keluar([
            'Nis' => $row[1], 
            'Nama' => $row[2], 
            'Tgl' => $row[3],
            'jenis_kelamin' => $row[4], 
            'kls' => $row[5], 
            'ortu' => $row[6], 
            'Keterangan' => $row[7],
        ]);
    }
    
}