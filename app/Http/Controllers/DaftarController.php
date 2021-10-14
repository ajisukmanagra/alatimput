<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Daftar;
use DB;
use Image;

class DaftarController extends Controller
{
    public function daftar()
    {

        return view('daftar');
    }

    public function store(Request $request)
    {

        Daftar::create([
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

        return redirect('/daftar');
    }


    public function update($id, Request $request)
    {
        $guru = DB::table('guru')->where('id', $id)->update([
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

    }

    public function delete($id) {
        $Daftar = Daftar::find($id);
        $Daftar->delete();

        return redirect('/data-siswa');
    }
    // public function DaftarController()
    // {
    //     $foto = Foto::get();
    //     return view('daftar', compact('foto'));
    // }
    // public function home(Request $request)
    // { 
    //     $extension = $request->file('foto')->extension();
    //     $imgname = date('dmyHis').'.'.$extension;
    //     $this->validate($request, ['foto' => 'required|file|max:5000']);
    //     $path = Storage::putFileAs('public/images', $request->file('foto'), $imgname);
    //     Foto::create(['foto' => $imgname]);
    //     return redirect('daftar')->with('SUKSES KAMU BERHASIL');
    // }

}
