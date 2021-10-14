<?php

namespace App\Exports;
use App\Models\Keluar;
use Auth;
// use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class SiswaKeluarExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
   public function view() : View
    {
        return view('/data/export-tamu', 
            ['keluar' => Keluar::orderBy('nama', 'asc')->get()
        ]);
    }
}
