<?php

namespace App\Exports;
use App\Models\Tenaga;
use Auth;
// use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class TenagaExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
   public function view() : View
    {
        return view('Data-pegawai/export-tenaga', 
            ['tenaga' => Tenaga::orderBy('nama', 'asc')->get()
        ]);
    }
}
