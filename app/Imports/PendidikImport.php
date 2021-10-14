<?php

namespace App\Imports;

use App\Models\Guru;
use Maatwebsite\Excel\Concerns\ToModel;
// use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PendidikImport implements ToModel //, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Guru([
            'nama' => $row[1], 
            'nip' => $row[2], 
            'pangkat' => $row[3],
            'jabatan' => $row[4], 
             'masakerja' => $row[5], 
            'pendidikan' => $row[6], 
            'tgl' => $row[7], 
             'mulai_kerja' => $row[8],
            'mutasi' => $row[9], 
            'disini_sejak' => $row[10], 
            'email' => $row[11], 
            'nuptk' => $row[12], 
              'nrg' => $row[13], 
        ]);
    }
    
}
 