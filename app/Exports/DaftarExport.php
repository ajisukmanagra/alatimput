<?php

namespace App\Exports;
use App\Models\Daftar;
// use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class DaftarExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
   public function view() : View
    {
        return view('export-daftar', 
            ['daftar' => Daftar::orderBy('nama', 'asc')->get()
        ]);
    }
}
