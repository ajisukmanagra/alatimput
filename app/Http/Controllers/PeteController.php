<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeteController extends Controller
{
    public function index()
    {
        return view('/pt/beranda');
    }
      public function visi()
    {
        return view('/pt/visi_misi');
    }
      public function set()
    {
        return view('/pt/struktur');
    }
      public function peng()
    {
        return view('/pt/pengumuman');
    }
      public function sej()
    {
        return view('/pt/sejarah');
    }
      public function info()
    {
        return view('/pt/info_guru');
    }
      public function sil()
    {
        return view('/pt/silabus');
    }
      public function sis()
    {
        return view('/pt/siswa');
    }
    public function kon()
    {
        return view('/pt/kontak');
    }
     public function esk()
    {
        return view('/pt/eskul');
    }

}
