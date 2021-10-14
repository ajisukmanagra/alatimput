<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bangunan;
use DB;
use Image;
use Storage;
class  BangunanController extends Controller
{
    public function index()
    {
        $bangunan = bangunan::all();
        return view('bangunan/kelas',compact('bangunan'));
    }

    public function create()
  {
      return view('/bangunan/daftar');
  }

   public function delete_daftar($id) {
        $daftar = bangunan::find($id);
        $daftar->delete();

        return redirect('/bangunan/kelas');
    }


    public function store(Request $request){
        // return $request->foto;
                $extension = $request->file('foto')->extension();
        $imgname = date('dmyHis').'.'.$extension;
        $this->validate($request, ['foto' => 'required|file|max:5000']);
        $path = Storage::putFileAs('public/images', $request->file('foto'), $imgname);

      bangunan::create([
            'Jenis_ruangan' => $request->get('Jenis_ruangan'),
            'tanggal_pembuatan' => $request->get('tanggal_pembuatan'),
            'foto' => $imgname,
        ]);

        

        return redirect('/bangunan/kelas');
    }

    public function update($id, Request $request)
    {   
        $extension = $request->file('foto')->extension();
        $imgname = date('dmyHis').'.'.$extension;
        $this->validate($request, ['foto' => 'required|file|max:5000']);
        $path = Storage::putFileAs('public/images', $request->file('foto'), $imgname);

         $tenaga = DB::table('bangunan')->where('id', $id)->update([

           'Jenis_ruangan' => $request->get('Jenis_ruangan'),
            'tanggal_pembuatan' => $request->get('tanggal_pembuatan'),
            'foto' => $imgname,
        ]);

        return redirect('/bangunan/kelas');
    }
     public function edit_bangunan($id) {
        $bangunan = bangunan::find($id);

        return view('/bangunan/edit-data-bangunan', compact('bangunan'));
    }
        

}
