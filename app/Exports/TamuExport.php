<?php

namespace App\Exports;

use App\Models\Tamu;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class TamuExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view() : View
    {
        return view('export-tamu', 
            ['tamu' => Tamu::all()
        ]);
    }


    // public function view(): View
    // {
    //     return view('exports.invoices', [
    //         'invoices' => Invoice::all()
    //     ]);
}