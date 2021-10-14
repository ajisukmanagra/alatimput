<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use PDF;    
use App\Exports\TenagaExport;
use App\Imports\TenagaImport;
use Maatwebsite\Excel\Facades\Excel; 
use Storage;
use App\Models\Tenaga; 

class TenagaPendidikController extends Controller
{
    public function index()
    {
        $tenaga = DB::table('tenaga_pendidik')->get();
        return view('Data-Pegawai/tenaga-pendidik', compact('tenaga'));
    } 
      public function cetak()
    {
        $tenaga = DB::table('tenaga_pendidik')->get();
        return view('/Data-Pegawai/cetak-tenaga-pendidik', compact('tenaga'));
    } 
    
    
        public function  store(Request $request){
        // return $request->foto;
                $extension = $request->file('foto')->extension();
        $imgname = date('dmyHis').'.'.$extension;
        $this->validate($request, ['foto' => 'required|file|max:5000']);
        $path = Storage::putFileAs('public/images', $request->file('foto'), $imgname);


        Tenaga::create([
            'nama' => $request->get('nama'),
            'foto' => $imgname,
            'jenis_kelamin' => $request->get('jenis_kelamin'),
            'tipe' => $request->get('tipe'),
            'pegawai' => $request->get('pegawai'),
            'setatus' => $request->get('setatus'),
        ]);

        return redirect('/Data-Pegawai/tenaga-pendidik');
    }


    public function update($id, Request $request)
    {
        $extension = $request->file('foto')->extension();
        $imgname = date('dmyHis').'.'.$extension;
        $this->validate($request, ['foto' => 'required|file|max:5000']);
        $path = Storage::putFileAs('public/images', $request->file('foto'), $imgname);
        
        $tenaga = DB::table('tenaga_pendidik')->where('id', $id)->update([
            'nama' => $request->get('nama'),
           'foto' => $imgname,
            'jenis_kelamin' => $request->get('jenis_kelamin'),
            'tipe' => $request->get('tipe'),
            'pegawai' => $request->get('pegawai'),
            'setatus' => $request->get('setatus'),
        ]);
        return redirect('/Data-Pegawai/tenaga-pendidik');
        }
         public function edit_tenaga($id) {
        $tenaga = Tenaga::find($id);

        return view('/Data-Pegawai/edit-data-tenaga-pendidik', compact('tenaga'));
    }

         
      public function create()
  {
      return view('/Data-Pegawai/daftar-tenaga-pendidik');
  }
    public function delete_tenaga($id) {
        $tenaga = Tenaga::find($id);
        $tenaga->delete();

        return redirect('/Data-Pegawai/tenaga-pendidik');
    }

     public function export_excel()
	{
        return Excel::download(new TenagaExport, 'tenaga.xlsx');
    }
    public function import_excel() {
        return view('daftar-import');
    }


    public function import_excel_post(Request $request) 
    {
        $file = $request->file('file');
        $nama_file = uniqid().".".$file->getClientOriginalExtension();
        $file->move('file/import', $nama_file);
        Excel::import(new tenagaImport, public_path('/file/import/'.$nama_file));

        return redirect('Data-Pegawai/tenaga-pendidik');
    }
    public function cetak_pdf()
    {
        $tenaga = Tenaga::all();
        $pdf = PDF::loadview('/Data-Pegawai/tenaga-cetak-pdf', compact('tenaga'))->setPaper('A4', 'potrait');
        return $pdf->stream();
        
    }
}   
