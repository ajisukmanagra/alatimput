<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pembairan;
use DB;
use Image;
use Storage;
class  BaiaranSiswaController extends Controller
{
    public function index()
    {
        $pembairan = pembairan::all();
        return view('keuangan/pembaiaran-siswa',compact('pembairan'));
    }

    public function create()
  {
      return view('/keuangan/daftar-pembaiaran-siswa');
  }

   public function delete_pembaiaran($id) {
        $pembaiaran = pembairan::find($id);
        $pembaiaran->delete();

        return redirect('/keuangan/pembaiaran-siswa');
    }


    public function store(Request $request){
      pembairan::create([
            'nama' => $request->get('nama'),
            'kelas' => $request->get('kelas'),
              'jenis_kelamin' => $request->get('jenis_kelamin'),
            'jumlah_baiaran' => $request->get('jumlah_baiaran'),
        ]);

            return redirect('/keuangan/pembaiaran-siswa');
    }
      public function update($id, Request $request)
    {
        $pembairan = DB::table('pembaiaran')->where('id', $id)->update([
              'nama' => $request->get('nama'),
            'kelas' => $request->get('kelas'),
              'jenis_kelamin' => $request->get('jenis_kelamin'),
            'jumlah_baiaran' => $request->get('jumlah_baiaran'),
        ]);

            return redirect('/keuangan/pembaiaran-siswa');
    }
     public function edit_pembairan($id) {
        $pembairan = pembairan::find($id);

        return view('/keuangan/edit-data-pembairan-siswa', compact('pembairan'));
        

}
}