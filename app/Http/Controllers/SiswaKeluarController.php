<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keluar;
use PDF;
use App\Exports\SiswaKeluarExport;
use App\Imports\KeluarImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class SiswaKeluarController extends Controller
{
  public function index() 
  {
    $keluar = Keluar::all();
    return view('keluar', compact('keluar'));
  }

    public function cetak() 
  {
    $keluar = Keluar::all();
    return view('/data/cetak', compact('cetak'));
  }

  public function create()
  {
      return view('/data/keluar');
  }
    public function delete_keluar($id) {
        $keluar = Keluar::find($id);
        $keluar->delete();

        return redirect('data/keluar');
    }

    public function export_excel()
	{
		return Excel::download(new SiswaKeluarExport, 'keluar.xlsx');
    }
        public function import_excel() {
        return view('daftar-import');
    }


    public function import_excel_post(Request $request) 
    {
        $file = $request->file('file');
        $nama_file = uniqid().".".$file->getClientOriginalExtension();
        $file->move('file/import', $nama_file);
        Excel::import(new keluarImport, public_path('/file/import/'.$nama_file));

        return redirect('/data/keluar');
    }

    public function store(Request $request) {
        Keluar::create([
            'Nis' => $request->get('Nis'),
            'Nama' => $request->get('Nama'),
            'Tgl' => $request->get('Tgl'),
            'jenis_kelamin' => $request->get('jenis_kelamin'),
            'kls' => $request->get('kls'),
            'ortu' => $request->get('ortu'),
            'Keterangan' => $request->get('Keterangan'),
        ]);

        return redirect('/data/keluar');
    }
    
        public function edit($id) {
        $keluar = Keluar::find($id);

        return view('/data/edit-data', compact('keluar'));
    }

     public function update(Request $request, $id) {
        $keluar = Keluar::find($id)->update([
           'Nis' => $request->get('Nis'),
            'Nama' => $request->get('Nama'),
            'Tgl' => $request->get('Tgl'),
            'jenis_kelamin' => $request->get('jenis_kelamin'),
            'kls' => $request->get('kls'),
            'ortu' => $request->get('ortu'),
            'Keterangan' => $request->get('Keterangan'),
        ]);

        return redirect('/data/keluar');
    }

      public function cetak_pdf()
    {
        $keluar = Keluar::all();
        $pdf = PDF::loadview('/data/cetak-pdf', compact('keluar'))->setPaper('A4', 'potrait');
        return $pdf->stream();
    }
}

