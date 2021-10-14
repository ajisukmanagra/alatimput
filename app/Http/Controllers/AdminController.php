<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use App\Models\User;
use DB;
use Image;
use App\Models\Agenda;
use App\Models\Berita;
use App\Models\Eskul;
use App\Models\Galeri;
use App\Models\Pengumuman;
use App\Models\Prestasi;
use App\Models\Guru;
use App\Models\Walikelas;
use App\Models\Siswa;
use App\Models\Kelas;
use App\Models\Format;
use App\Models\Nilai;
use App\Models\Mapel;
use App\Models\Materi;
use App\Models\TahunAjar;
use App\Models\Tugas;
use App\Models\Caraka;
use App\Models\TataUsaha;
use App\Models\Surat;
use App\Models\StrukturOrganisasi–m;
use App\Models\Kegiatan;
use App\Imports\NilaiImport;
use App\Imports\GuruImport;
use App\Imports\SiswaImport;
use App\Imports\WalikelasImport;
use Carbon\Carbon;


class AdminController extends Controller
{
  //
// Akun
public function akunSiswa()
{
  $akuns = User::latest()->where('level', 'siswa')->get();
  return view('akun.siswa.index', compact('akuns'));
}

public function akunSiswaAdd()
{
  return view('akun/siswa/create');
}

public function akunSiswaEdit($id)
{
  $akun = User::find($id);
  return view('akun.siswa.edit', compact('akun'));
}


public function akunSiswaPost(Request $req)
{
  $id = $req->get('id');
  if($id){
    $akun = User::find($id);
  }else{
    $akun = new User;
  }
  $akun->name = $req->name;
  $akun->email = $req->email;
  $akun->username = $req->username;
  $akun->password = bcrypt($req->password);
  $akun->level = $req->level;
  $akun->status = 'aktif';
  $akun->save();


  return redirect()->route('akun.siswa.index')->with(['success' => 'Data Berhasil Disimpan!']);
}

public function akunSiswaDelete($id) {
  $akun = User::find($id);
  $akun->delete();

  return redirect('/akun/siswa');
}


  public function akunPegawai()
      {
        $akuns = User::latest()->where('level','Pegawai')->get();
        return view('akun.pegawai.index', compact('akuns'));
      }

      public function akunPegawaiAdd()
      {
        return view('akun/pegawai/create');
       
      }

      public function akunPegawaiEdit($id)
      {
        $akun = User::find($id);
        return view('akun.pegawai.edit', compact('akun'));
      }


      public function akunPegawaiPost(Request $req)
      {
        $id = $req->get('id');
        if($id){
          $akun = User::find($id);
        }else{
          $akun = new User;
        }
        $akun->name = $req->name;
        $akun->email = $req->email;
        $akun->username = $req->username;
        $akun->password = bcrypt($req->password);
        $akun->level = $req->level;
        $akun->status = 'aktif';
        $akun->save();


        return redirect()->route('akun.pegawai.index')->with(['success' => 'Data Berhasil Disimpan!']);
      }

      public function akunPegawaiDelete($id) {
        $akun = User::find($id);
        $akun->delete();
      
        return redirect('/akun/pegawai');
      }
      

        // end Struktur Organisasi Sekolah

    // Kegiatan Intrakulikuler
      public function intrakulikuler()
      {
        $kegiatans = Kegiatan::latest()->where('status', 'intrakulikuler')->get();
        return view('admin.kegiatan.intrakulikuler.index', compact('kegiatans'));
      }

      public function intrakulikulerAdd()
      {
        return view('admin.kegiatan.intrakulikuler.create');
      }

      public function intrakulikulerEdit(Kegiatan $kegiatan)
      {
        return view('kegiatan.intrakulikuler.edit', compact('kegiatan'));
      }

      public function intrakulikulerPost(Request $req)
      {
        $id = $req->get('id');
        if($id){
          $kegiatan = Kegiatan::findOrFail($id);
        }else{
          $kegiatan = new Kegiatan;
        }

        $kegiatan->title = $req->title;
        $kegiatan->date = $req->date;
        
        if($req->image){
          if($req->hasFile('image')){
              $foto = $req->file('image');
              $filename = time() . '.' . $foto->getClientOriginalExtension();
              Image::make($foto)->save(public_path('/image/kegiatan/' . $filename));
          }
            $kegiatan->image = $filename;
        }

        $kegiatan->status = 'intrakulikuler';
        $kegiatan->save();

        return redirect()->route('admin.intrakulikuler.index')->with(['success' => 'Data Berhasil Disimpan!']);
      }

      public function intrakulikulerDelete($id)
      {
        $kegiatan = Kegiatan::findOrFail($id);
        File::delete(public_path('images/kegiatan/'. $kegiatan->image));
        $kegiatan->delete();

          if($kegiatan){
              return response()->json([
                  'status' => 'success'
              ]);
          }else{
              return response()->json([
                  'status' => 'error'
              ]);
          }
      }

      // Kegiatan Ekstrakulikuler
      public function ekstrakulikuler()
      {
        $kegiatans = Kegiatan::latest()->where('status', 'ekstrakulikuler')->get();
        return view('admin.kegiatan.ekstrakulikuler.index', compact('kegiatans'));
      }

      public function ekstrakulikulerAdd()
      {
        return view('admin.kegiatan.ekstrakulikuler.create');
      }

      public function ekstrakulikulerEdit(Kegiatan $kegiatan)
      {
        return view('admin.kegiatan.ekstrakulikuler.edit', compact('kegiatan'));
      }

      public function ekstrakulikulerPost(Request $req)
      {
        $id = $req->get('id');
        if($id){
          $kegiatan = Kegiatan::findOrFail($id);
        }else{
          $kegiatan = new Kegiatan;
        }

        $kegiatan->title = $req->title;
        $kegiatan->date = $req->date;
        
        if($req->image){
          if($req->hasFile('image')){
              $foto = $req->file('image');
              $filename = time() . '.' . $foto->getClientOriginalExtension();
              Image::make($foto)->save(public_path('/image/kegiatan/' . $filename));
          }
            $kegiatan->image = $filename;
        }

        $kegiatan->status = 'ekstrakulikuler';
        $kegiatan->save();

        return redirect()->route('admin.ekstrakulikuler.index')->with(['success' => 'Data Berhasil Disimpan!']);
      }

    public function ekstrakulikulerDelete($id)
      {
        $kegiatan = Kegiatan::findOrFail($id);
        File::delete(public_path('images/kegiatan/'. $kegiatan->image));
        $kegiatan->delete();

          if($kegiatan){
              return response()->json([
                  'status' => 'success'
              ]);
          }else{
              return response()->json([
                  'status' => 'error'
              ]);
          }
      }
      // Struktur Organisasi Sekolah
      public function strukturOrganisasi()
      {
        $strukturs = StrukturOrganisasi–m::latest()->get();
        return view('struktur.index', compact('strukturs'));
      }

      public function strukturCreate()
      {
        return view('struktur.create');
      }

      public function strukturEdit(StrukturOrganisasi–m $struktur)
      {
        return view('struktur.edit', compact('struktur'));
      }

      public function strukturPost(Request $req)
      {
        $id = $req->get('id');
        if($id){
          $struktur = StrukturOrganisasi–m::find($id);
        }else{
          $struktur = new StrukturOrganisasi–m;
        }
        $struktur->komite_sekolah = $req->komite_sekolah;
        $struktur->kepala_sekolah = $req->kepala_sekolah;
        $struktur->wk_sekolah = $req->wk_sekolah;
        $struktur->kaur_tu_sekolah = $req->kaur_tu_sekolah;
        $struktur->staff_kurikulum = $req->staff_kurikulum;
        $struktur->staff_kesiswaan = $req->staff_kesiswaan;
        $struktur->staff_humas = $req->staff_humas;
        $struktur->save();
        return redirect()->route('struktur.index')->with(['success' => 'Data Berhasil Disimpan!']);
      }

      public function strukturDelete($id)
      {
        $struktur = StrukturOrganisasi–m::findOrFail($id);
        $struktur->delete();

          if($struktur){
              return response()->json([
                  'status' => 'success'
              ]);
          }else{
              return response()->json([
                  'status' => 'error'
              ]);
          }
      }

      
      // website profile sekolah
   
      //berita
      public function beritaGet()
      {
          $beritas = Berita::all();
          return view('admin.berita.index', ['beritas' => $beritas]);
      }

      public function beritaCreate()
      {
        return view('admin/berita/create');
      }

      public function beritaDetail($id)
      {
        $berita = Berita::find($id);
        return view('admin.berita.detail', compact('berita'));
      }
      
      public function beritaEdit($id)
      {
        $berita = Berita::find($id);
        return view('admin.berita.edit', compact('berita'));
      }
      public function beritaPost(Request $req)
      {
          $id = $req->get('id');
          if($id){
              $berita = Berita::find($id);
          }else{
              $berita = new Berita;
          }
          if($req->gambar){
              if($req->hasFile('gambar')){
                  $foto = $req->file('gambar');
                  $filename = time() . '.' . $foto->getClientOriginalExtension();
                  Image::make($foto)->save(public_path('/image/beritas/' . $filename));
              }
              $berita->gambar = $filename;
          }

          $berita->judul = $req->judul;
          $berita->isi = $req->isi;
          $berita->save();
          return redirect()->route('admin.berita.index')->with(['success' => 'Data Berhasil Di Simpan']);
      }
      
      public function beritaDel($id)
      {
        $berita = Berita::findOrFail($id);
        $berita->delete();

          if($berita){
              return response()->json([
                  'status' => 'success'
              ]);
          }else{
              return response()->json([
                  'status' => 'error'
              ]);
          }
      }
     
      //agenda
      public function agendaGet()
      {
          $agendas = Agenda::all();
          return view('admin.agenda.index', ['agendas' => $agendas]);
      }
      public function agendaCreate()
      {
        return view('admin/agenda/create');
      }

      public function agendaEdit($id)
      {
        $agenda = Agenda::find($id);
        return view('admin.agenda.edit', compact('agenda'));
      }

      public function agendaPost(Request $req)
      {
          $id = $req->get('id');
          if($id){
              $agenda = Agenda::find($id);
          }else{
              $agenda = new Agenda;
          }

          $agenda->judul = $req->judul;
          $agenda->lokasi = $req->lokasi;
          $agenda->tanggal = $req->tanggal;
          $agenda->save();
          return redirect()->route('admin.agenda.index')->with(['success' => 'Data Berhasil Di Simpan']);
      }
      
      public function agendaDel($id)
      {
        $agenda = Agenda::find($id);
        $agenda->delete();

        return redirect('/admin/agenda');

          if($agenda){
              return response()->json([
                  'status' => 'success'
              ]);
          }else{
              return response()->json([
                  'status' => 'error'
              ]);
          }
      }
    
           //eksul
      public function eskulGet()
      {
          $eskuls = Eskul::all();
          return view('admin.eskul.index', compact('eskuls'));
      }
      public function eskulCreate()
      {
        return view('admin/eskul/create');
      }
      public function eskulDetail($id)
      {
        $eskul = Eskul::find($id);
        return view('admin/eskul/detail', compact('eskul'));
      }
      
      public function eskulEdit($id)
      {
        $eskul = Eskul::find($id);
        return view('admin.eskul.edit', compact('eskul'));
      }

      public function eskulPost(Request $req)
      {
          $id = $req->get('id');
          if($id){
              $eskul = Eskul::find($id);
          }else{
              $eskul = new Eskul;
          }
          if($req->foto){
              if($req->hasFile('foto')){
                  $foto = $req->file('foto');
                  $filename = time() . '.' . $foto->getClientOriginalExtension();
                  Image::make($foto)->save(public_path('/image/eskul/' . $filename));
              }
              $eskul->gambar = $filename;
          }

          $eskul->nama_eskul = $req->nama_eskul;
          $eskul->deskripsi = $req->deskripsi;
          $eskul->save();
          return redirect()->route('admin.eskul.index')->with(['success' => 'Data Berhasil Di Simpan']);
      }
      public function eskulDel($id)
      {
        $eskul = Eskul::findOrFail($id);
        $eskul->delete();

          if($eskul){
              return response()->json([
                  'status' => 'success'
              ]);
          }else{
              return response()->json([
                  'status' => 'error'
              ]);
          }
      }

      //gelar
      public function galeriGet()
      {
          $galeris = Galeri::all();
          return view('admin.galeri.index', compact('galeris'));
      }
      public function galeriCreate()
      {
        return view('admin/galeri/create');
      }

      public function galeriEdit($id)
      {
        $galeri = Galeri::find($id);
        return view('admin.galeri.edit', compact('galeri'));
      }

      public function galeriPost(Request $req)
      {
          $id = $req->get('id');
          if($id){
              $galeri = Galeri::find($id);
          }else{
              $galeri = new Galeri;
          }

          if($req->foto){
              if($req->hasFile('foto')){
                  $foto = $req->file('foto');
                  $filename = time() . '.' . $foto->getClientOriginalExtension();
                  Image::make($foto)->save(public_path('/image/galeri/' . $filename));
              }
              $galeri->gambar = $filename;
          }

          $galeri->judul = $req->judul;
          $galeri->save();
          return redirect()->route('admin.galeri.index')->with(['success' => 'Data Berhasil Di Simpan']);
      }
      
      public function galeriDel($id)
      {
        $galeri = Galeri::findOrFail($id);
        $galeri->delete();

          if($galeri){
              return response()->json([
                  'status' => 'success'
              ]);
          }else{
              return response()->json([
                  'status' => 'error'
              ]);
          }
      }


        //prestasi
        public function prestasiGet()
        {
            $prestasis = Prestasi::all();
            return view('admin.prestasi.index', compact('prestasis'));
        }
        public function prestasiCreate()
        {
          return view('admin/prestasi/create');
        }
        public function prestasiEdit($id)
        {
          $prestasi = Prestasi::find($id);
          return view('admin.prestasi.edit', compact('prestasi'));
        }
  
        public function prestasiPost(Request $req)
        {
            $id = $req->get('id');
            if($id)
            {
                $prestasi = Prestasi::find($id);
            }else
            {
                $prestasi = new Prestasi;
            }
            $prestasi->nama_lomba = $req->nama_lomba;
            $prestasi->bidang_lomba = $req->bidang_lomba;
            $prestasi->juara = $req->juara;
            $prestasi->ket = $req->ket;
            $prestasi->save();
            return redirect()->route('admin.prestasi.index')->with(['success' => 'Data Berhasil Di Simpan']);
        }
        public function prestasiDel($id)
      {
        $prestasi = Prestasi::findOrFail($id);
        $prestasi->delete();

          if($prestasi){
              return response()->json([
                  'status' => 'success'
              ]);
          }else{
              return response()->json([
                  'status' => 'error'
              ]);
          }
      }


        //pengumuman
        public function pengumumanGet()
        {
            $pengumumans = Pengumuman::all();
            return view('admin.pengumuman.index', compact('pengumumans'));
        }
        
        public function pengumumanCreate()
        {
          return view('admin/pengumuman/create');
        }

      public function pengumumanEdit($id)
      {
        $pengumuman = Pengumuman::find($id);
        return view('admin.pengumuman.edit', compact('pengumuman'));
      }
   
      public function pengumumanPost(Request $req)
      {
          $id = $req->get('id');
          if($id){
              $pengumuman = Pengumuman::find($id);
          }else{
              $pengumuman = new Pengumuman;
          }

          $pengumuman->title = $req->title;
          $pengumuman->deskripsi = $req->deskripsi;
          $pengumuman->save();
          return redirect()->route('admin.pengumuman.index')->with(['success' => 'Data Berhasil Di Simpan']);
      }
    
      public function pengumumanDel($id)
      {
        $pengumuman = Pengumuman::findOrFail($id);
        $pengumuman->delete();

          if($pengumuman){
              return response()->json([
                  'status' => 'success'
              ]);
          }else{
              return response()->json([
                  'status' => 'error'
              ]);
          }
      }

     
  


  // Learning

    // Materi
      public function materi()
      {
        $materis = Materi::where('guru_id', auth()->user()->id)->get();
        return view('admin.materi.index', compact('materis'));
      }

      public function materiCreate()
      {
        $kelas = Kelas::all();
        return view('admin.materi.create', compact('kelas'));
      }

      public function materiEdit($id)
      {
        $kelas = Kelas::all();
        $materi = Materi::find($id);
        return view('admin.materi.edit', compact('materi', 'kelas'));
      }

      public function materiDetail($id)
      {
        $materi = Materi::find($id);
        return view('admin.materi.detail', compact('materi'));
      }

      public function materiPost(Request $req)
      {
        $id = $req->get('id');
        if($id)
        {
          $materi = Materi::find($id);
        }else{
          $materi = new Materi;
        }
        if($req->file)
        {
          $file = $req->file('fileMateri');

          $destinationPath = 'files/materi';
          $filename = $file->getClientOriginalName();
          $upload_success = $req->file('fileMateri')->move($destinationPath, $filename);


          $materi->file = $filename;
        }
        if($req->link){
          $materi->link = $req->link;
        }
        $materi->judul = $req->judul;
        $materi->mapel = $req->mapel;
        $materi->deskripsi = $req->deskripsi;
        $materi->guru_id = auth()->user()->id;
        $materi->kelas_id = $req->kelas;
        $materi->save();
        return redirect()->route('admin.materi.index')->with(['success' => 'data berhasil disimpan!']);
      }

      public function materiDelete($id)
      {
        $materi = Materi::findOrFail($id);
        $materi->delete();

          if($materi){
              return response()->json([
                  'status' => 'success'
              ]);
          }else{
              return response()->json([
                  'status' => 'error'
              ]);
          }
      }
    // End Materi

    // Tugas
      public function tugas()
      {
        $tugas = Tugas::where('guru_id', auth()->user()->id)->get();
        return view('admin.tugas.index', compact('tugas'));
      }

      public function tugasCreate()
      {
        $kelas = Kelas::all();
        return view('admin.tugas.create', compact('kelas'));
      }

      public function tugasEdit($id)
      {
        $kelas = Kelas::all();
        $tugas = Tugas::find($id);
        return view('admin.tugas.edit', compact('tugas', 'kelas'));
      }

      public function tugasDetail($id)
      {
        $tugas = Tugas::find($id);
        return view('admin.tugas.detail', compact('tugas'));
      }

      public function tugasPost(Request $req)
      {
        $id = $req->get('id');
        if($id)
        {
          $tugas = Tugas::find($id);
        }else{
          $tugas = new Tugas;
        }
        if($req->file)
        {
          $file = $req->file('fileTugas');

          $destinationPath = 'files/tugas';
          $filename = $file->getClientOriginalName();
          $upload_success = $req->file('fileTugas')->move($destinationPath, $filename);


          $tugas->file = $filename;
        }
        $tugas->mapel = $req->mapel;
        $tugas->judul = $req->judul;
        $tugas->deskripsi = $req->deskripsi;
        $tugas->guru_id = auth()->user()->id;
        $tugas->kelas_id = $req->kelas;
        $tugas->save();
        return redirect()->route('admin.tugas.index')->with(['success' => 'data berhasil disimpan!']);
      }

      public function tugasDelete($id)
      {
        $tugas = Tugas::findOrFail($id);
        $tugas->delete();

          if($tugas){
              return response()->json([
                  'status' => 'success'
              ]);
          }else{
              return response()->json([
                  'status' => 'error'
              ]);
          }
      }
}