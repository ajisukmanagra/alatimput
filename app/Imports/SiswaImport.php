<?php

namespace App\Imports;

use App\Models\Daftar;
use Maatwebsite\Excel\Concerns\ToModel;
// use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SiswaImport implements ToModel //, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Daftar([
            'nis' => $row[1], 
            'nisn' => $row[2], 
            'nama' => $row[3],
            'jenis_kelamin' => $row[4], 
            'tempat' => $row[5], 
            'tahun' => $row[6], 
             'orangtua' => $row[7],
            'no_ijajah' => $row[8], 
            'no_skhun' => $row[9], 
            'no_peserta' => $row[10], 
            'kelas' => $row[11], 
        ]);
    }
    
}
