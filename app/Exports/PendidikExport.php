<?php

namespace App\Exports;
use App\Models\Guru;
use Auth;
// use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class PendidikExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
   public function view() : View
    {
        return view('Data-pegawai/export-pendidik', 
            ['pendidik' => Guru::orderBy('nama', 'asc')->get()
        ]);
    }
}
