<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ada;
use DB;
use App\Exports\AdaExport;
use App\Imports\AdaImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class SiswaAdaController extends Controller
{
  public function index() 
  {
    $ada = Ada::all();
    return view('ada', compact('ada'));
  }

  public function create()
  {
      return view('/data/ada');
  }
    public function delete_ada($id) {
        $ada = Ada::find($id);
        $ada->delete();

        return redirect('/data/ada');
    }



    public function export_excel()
	{
		return Excel::download(new AdaExport, 'ada.xlsx');
    }

    public function store(Request $request) {
        Ada::create([
            'Nama' => $request->get('Nama'),
            'Kontak' => $request->get('Kontak'),
            'Asal_tempat' => $request->get('Asal_tempat'),
            'jenis_kelamin' => $request->get('jenis_kelamin'),
            'Keterangan' => $request->get('Keterangan'),
            'tujuan' => $request->get('tujuan'),
        ]);

        return redirect('/data/ada');
    }
         public function update($id, Request $request)
    {
        $ada = DB::table('ada')->where('id', $id)->update([
            'Nama' => $request->get('Nama'),
            'Kontak' => $request->get('Kontak'),
            'Asal_tempat' => $request->get('Asal_tempat'),
            'jenis_kelamin' => $request->get('jenis_kelamin'),
            'Keterangan' => $request->get('Keterangan'),
            'tujuan' => $request->get('tujuan'),
        ]);
        return redirect('/data/ada');
    }
   public function edit_kunjungan($id) {
        $ada = Ada::find($id);

        return view('/ubah/edit-data-kunjungan-tamu', compact('ada'));
    
    }
}

