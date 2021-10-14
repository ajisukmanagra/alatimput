<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;
use App\Models\Guru; 
use App\Exports\PendidikExport;
use App\Imports\PendidikImport;
use Maatwebsite\Excel\Facades\Excel;    
class GuruController extends Controller
{
    public function index()
    {
        $guru = DB::table('guru')->get();
        return view('Data-Pegawai/Pendidik', compact('guru'));
    } 
     public function store(Request $request)
    {

        Guru::create([
            'nama' => $request->get('nama'),
            'nip' => $request->get('nip'),
            'pangkat' => $request->get('pangkat'),
            'jabatan' => $request->get('jabatan'),
            'masakerja' => $request->get('masakerja'),
            'pendidikan' => $request->get('pendidikan'),
            'tgl' => $request->get('tgl'),
            'mulai_kerja' => $request->get('mulai_kerja'),
            'mutasi' => $request->get('mutasi'),
            'disini_sejak' => $request->get('disini_sejak'),
            'email' => $request->get('email'),
             'nuptk' => $request->get('nuptk'),
            'nrg' => $request->get('nrg'),
        ]);

        return redirect('/Data-Pegawai/Pendidik');
    }
     public function edit_pendidik($id) {
        $guru = Guru::find($id);

        return view('/Data-Pegawai/edit-data-pendidik', compact('guru'));
    }


    public function update($id, Request $request)
    {
        $daftar = DB::table('guru')->where('id', $id)->update([
            'nama' => $request->get('nama'),
            'nip' => $request->get('nip'),
            'pangkat' => $request->get('pangkat'),
            'jabatan' => $request->get('jabatan'),
            'masakerja' => $request->get('masakerja'),
            'pendidikan' => $request->get('pendidikan'),
            'tgl' => $request->get('tgl'),
            'mulai_kerja' => $request->get('mulai_kerja'),
            'mutasi' => $request->get('mutasi'),
            'disini_sejak' => $request->get('disini_sejak'),
            'email' => $request->get('email'),
             'nuptk' => $request->get('nuptk'),
            'nrg' => $request->get('nrg'),
        ]);
        return redirect('/Data-Pegawai/Pendidik');
        
        }
        
      public function create()
  {
      return view('/Data-Pegawai/daftar');
  }
    public function delete_pegawai($id) {
        $daftar = Guru::find($id);
        $daftar->delete();

        return redirect('/Data-Pegawai/Pendidik');
    }
     public function export_excel()
	{
        return Excel::download(new PendidikExport, 'pendidik.xlsx');
        // $daftar = \App\Models\Daftar::all();
        // return $daftar;
    }
    public function import_excel() {
        return view('daftar-import');
    }


    public function import_excel_post(Request $request) 
    {
        $file = $request->file('file');
        $nama_file = uniqid().".".$file->getClientOriginalExtension();
        $file->move('file/import', $nama_file);
        Excel::import(new PendidikImport, public_path('/file/import/'.$nama_file));

        return redirect('Data-Pegawai/Pendidik');
    }
    public function cetak_pdf()
    {
        $guru = Guru::all();
        $pdf = PDF::loadview('/Data-Pegawai/pendidik-cetak-pdf', compact('guru'))->setPaper('A4', 'potrait');
        return $pdf->stream();
    }
}