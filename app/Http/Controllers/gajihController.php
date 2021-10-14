<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Image;
use Storage;
use App\Models\gajih; 

class gajihController extends Controller
{
    public function index()
    {
        $gajih = DB::table('gajih')->get();
        return view('keuangan/gajih-pegawai', compact('gajih'));
    } 
    
    
        public function  store(Request $request){
        // return $request->foto;
                $extension = $request->file('foto')->extension();
        $imgname = date('dmyHis').'.'.$extension;
        $this->validate($request, ['foto' => 'required|file|max:5000']);
        $path = Storage::putFileAs('public/images', $request->file('foto'), $imgname);


        gajih::create([
            'nama' => $request->get('nama'),
            'foto' => $imgname,
            'jenis_kelamin' => $request->get('jenis_kelamin'),
            'nik' => $request->get('nik'),
            'jabatan' => $request->get('jabatan'),
            'hari_kerja' => $request->get('hari_kerja'),
            'gajih_perhari' => $request->get('gajih_perhari'),
            'tunjangan' => $request->get('tunjangan'),
            'gajih_perbulan' => $request->get('gajih_perbulan'),
            
        ]);

        return redirect('/keuangan/gajih-pegawai');
    }


    public function update($id, Request $request)
    {
         $extension = $request->file('foto')->extension();
        $imgname = date('dmyHis').'.'.$extension;
        $this->validate($request, ['foto' => 'required|file|max:5000']);
        $path = Storage::putFileAs('public/images', $request->file('foto'), $imgname);


        $gajih = DB::table('gajih')->where('id', $id)->update([
           'nama' => $request->get('nama'),
            'foto' => $imgname,
            'jenis_kelamin' => $request->get('jenis_kelamin'),
            'nik' => $request->get('nik'),
            'jabatan' => $request->get('jabatan'),
            'hari_kerja' => $request->get('hari_kerja'),
            'gajih_perhari' => $request->get('gajih_perhari'),
            'tunjangan' => $request->get('tunjangan'),
            'gajih_perbulan' => $request->get('gajih_perbulan'),
        ]);
            return redirect('/keuangan/gajih-pegawai');
        }
         
      public function create()
  {
      return view('/keuangan/daftar-gajih-pegawai');
  }
     public function edit_gajih($id) {
        $gajih = gajih::find($id);

        return view('/keuangan/edit-data-gajih-pegawai', compact('gajih'));
     }
    public function delete_gajih($id) {
        $gajih = gajih::find($id);
        $gajih->delete();

        return redirect('/keuangan/gajih-pegawai');
    }
}   
