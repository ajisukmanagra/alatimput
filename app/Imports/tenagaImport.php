<?php

namespace App\Imports;

use App\Models\Tenaga;
use Maatwebsite\Excel\Concerns\ToModel;
// use Maatwebsite\Excel\Concerns\WithHeadingRow;

class tenagaImport implements ToModel //, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Tenaga([
            'nama' => $row[1], 
            'foto' => $row[2], 
            'jenis_kelamin' => $row[3],
            'tipe' => $row[4], 
            'pegawai' => $row[5], 
            'setatus' => $row[6], 
        ]);
    }
    
}
