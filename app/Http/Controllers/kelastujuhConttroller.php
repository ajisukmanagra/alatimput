<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tujuh;

use App\Exports\SiswaExport;
use App\Imports\SiswaImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class kelastujuhConttroller extends Controller
{
  public function index() 
  {
    $tujuh = tujuh::all();
    return view('tujuh/tujuh-a', compact('tujuh'));
  }

  public function create()
  {
      return view('/tujuh/apload-tugas-kelas-7');
  }
    public function delete_tujuh($id) {
        $tujuh = tujuh::find($id);
        $tujuh->delete();

        return redirect('/tujuh/tujuh-a');
    }


    public function store(Request $request) {
        tujuh::create([
            'mata_pelajaran' => $request->get('mata_pelajaran'),
            'pelajaran' => $request->get('pelajaran'),
            'nama' => $request->get('nama'),
        ]);

        return redirect('/tujuh/tujuh-a');
    }
    

     public function update(Request $request, $id) {
        $tujuh = tujuh::find($id)->update([
           'mata_pelajaran' => $request->get('mata_pelajaran'),
            'pelajaran' => $request->get('pelajaran'),
            'nama' => $request->get('nama'),
        ]);

        return redirect('/tujuh/tujuh-a');
    }
}

