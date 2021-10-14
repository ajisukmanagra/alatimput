<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request, Response;
use App\Models\Tamu;
use DB;

use App\Exports\TamuExport;
use App\Imports\TamuImport;
use Maatwebsite\Excel\Facades\Excel;
class TamuController extends Controller
{
   public function index() 
  {
    $tamu = Tamu::all();
    return view('tamu', compact('tamu'));
  }

  public function dataTamu()
  {
      $data = DB::SELECT("
        SELECT * FROM tamu
      ");

    //   Kondisi data tamu 
    if (count($data) > 0) {
        $get = $data;
    } else {
        $get = ["Ups Data Masih Kosong!"];
    }
    

      return response()->json([
          ["judul_data"     => "Data Tamu"],
          ["Data"           => $get],
          ["text_footer"    => "SMP PGRI BY Farijan"]
      ]);
  }

  public function create()
  {
      return view('/data/tamu');
  }
    public function delete_tamu($id) {
        $tamu = Tamu::find($id);
        $tamu->delete();

        return redirect('/data/tamu');
    }

    // public function indexx()
    // {
    //     $daftar = \App\Models\Keluar::all();
    //     return view('/data/keluar', compact('keluar'));
    // }

    public function export_excel()
	{
		return Excel::download(new TamuExport, 'tamu.xlsx');
    }

    public function store(Request $request) {
        Tamu::create([
            'Nama' => $request->get('Nama'),
            'Kontak' => $request->get('Kontak'),
            'Asal_tempat' => $request->get('Asal_tempat'),
            'jenis_kelamin' => $request->get('jenis_kelamin'),
            'Keterangan' => $request->get('Keterangan'),
            'tujuan' => $request->get('tujuan'),
        ]);

        return redirect('/data/tamu');
    }
       public function update($id, Request $request)
    {
        $tamu = DB::table('tamu')->where('id', $id)->update([
            'Nama' => $request->get('Nama'),
            'Kontak' => $request->get('Kontak'),
            'Asal_tempat' => $request->get('Asal_tempat'),
            'jenis_kelamin' => $request->get('jenis_kelamin'),
            'Keterangan' => $request->get('Keterangan'),
            'tujuan' => $request->get('tujuan'),
        ]);

        return redirect('/data/tamu');
    }
   public function edit_tamu($id) {
        $tamu = Tamu::find($id);

        return view('/ubah/edit-data-tamu', compact('tamu'));
    
    }
}



