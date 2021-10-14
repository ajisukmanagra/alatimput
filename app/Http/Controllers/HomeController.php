<?php

namespace App\Http\Controllers;
use Response;
use PDF;
use Illuminate\Http\Request;
use App\Models\Daftar;
use App\Models\Keluar;
use App\Models\guru;
use App\Models\bangunan;
use App\Models\ada;
use App\Models\gajih;
use App\Models\pembairan;
use App\Models\tamu;
use App\Models\Tenaga;
use DB;

use App\Exports\DaftarExport;
use App\Imports\SiswaImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.s
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    } 

    /**
     * Show the application dashboard. 
     *
     * @return \Illuminate\Contracts\Support\Renderable
     * 
     */
    public function index()
    {
        $daftar = \App\Models\Daftar::all();
        return view('/data-siswa', compact('daftar'));
    }
    public function web() {
        return view('perusahan');
    }

    public function das() {
        $siswa = Daftar::count();// <- nu di pake..
        $data_guru = guru::count();
        $keluar = Keluar::count();
        $bangunan = bangunan::count();
        $ada = ada::count();
        $gajih = gajih::count();
        $pembairan = pembairan::count();
        $tamu = tamu::count();
        $Tenaga = Tenaga::count();
        return view('admin', compact('siswa', 'data_guru','keluar','bangunan','ada','gajih','pembairan','tamu','Tenaga'));
    }

    
    public function export_excel()
	{
        return Excel::download(new DaftarExport, 'daftar.xlsx');
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
        Excel::import(new SiswaImport, public_path('/file/import/'.$nama_file));

        return redirect('/data-siswa');
    }

    public function edit($id) {
        $daftar = Daftar::find($id);

        return view('/edit-data', compact('daftar'));
    }

    public function update(Request $request, $id) {
        $daftar = Daftar::find($id)->update([
            'nis' => $request->get('nis'),
            'nisn' => $request->get('nisn'),
            'nama' => $request->get('nama'),
            'jenis_kelamin' => $request->get('jenis_kelamin'),
            'tempat' => $request->get('tempat'),
            'tahun' => $request->get('tahun'),
            'orangtua' => $request->get('orangtua'),
            'no_ijajah' => $request->get('no_ijajah'),
            'no_skhun' => $request->get('no_skhun'),
            'no_peserta' => $request->get('no_peserta'),
            'kelas' => $request->get('kelas'),
        ]);

        return redirect('/data-siswa');
    }
     public function cetak()
    {
         $daftar = \App\Models\Daftar::get();
        return view('/siswa_cetak', compact('daftar'));
    }
      public function cetak_pdf()
    {
        $daftar = Daftar::all();
        $pdf = PDF::loadview('/cetak-pdf', compact('daftar'))->setPaper('A4', 'potrait');
        return $pdf->stream();
    }
}

