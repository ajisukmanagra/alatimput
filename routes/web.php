<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DaftarController;
use App\Http\Controllers\SiswaKeluarController;
use App\Http\Controllers\TamuController;
use App\Http\Controllers\SiswaAdaController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('welcome');
    return redirect('/login');
});

Auth::routes();
//

Route::get('api-tamu', [App\Http\Controllers\TamuController::class, 'dataTamu']);

Route::get('/data-siswa', [App\Http\Controllers\HomeController::class, 'index'])->name('data-siswa');
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'das'])->name('admin');
Route::get('/edit-data/{id}', [HomeController::class, 'edit']);
Route::put('/update-data/{id}', [HomeController::class, 'update']);
Route::get('/perusahan', [App\Http\Controllers\HomeController::class, 'web'])->name('perusahan');
Route::get('/daftar/export_excel', [App\Http\Controllers\HomeController::class, 'export_excel']);
Route::post('/daftar/import_excel/post', [App\Http\Controllers\HomeController::class, 'import_excel_post']);
Route::get('/siswa_cetak', [App\Http\Controllers\HomeController::class, 'cetak'])->name('siswa_cetak');
Route::get('/cetak_permintaan_pdf', [App\Http\Controllers\HomeController::class, 'cetak_pdf']);

Route::post('/store', [App\Http\Controllers\DaftarController::class, 'store'])->name('store');
Route::get('/daftar', [App\Http\Controllers\DaftarController::class, 'daftar']);
Route::get('/delete/{id}', [App\Http\Controllers\DaftarController::class, 'delete']);

Route::get('/data/keluar', [App\Http\Controllers\SiswaKeluarController::class, 'index'])->name('keluar');
Route::get('/data/edit-data/{id}', [SiswaKeluarController::class, 'edit']);
Route::put('/data/update-data/{id}', [SiswaKeluarController::class, 'update']);
Route::post('/data/keluar/store', [App\Http\Controllers\SiswaKeluarController::class, 'store']);
Route::get('/data/keluar/create', [App\Http\Controllers\SiswaKeluarController::class, 'create'])->name('create');
Route::get('/keluar/delete/{id}', [App\Http\Controllers\SiswaKeluarController::class, 'delete_keluar']);
Route::get('/keluar/export_excel', [App\Http\Controllers\SiswaKeluarController::class, 'export_excel']);
Route::post('/keluar/import_excel/post', [App\Http\Controllers\SiswaKeluarController::class, 'import_excel_post']);
Route::get('/data/cetak-siswa-keluar', [App\Http\Controllers\SiswaKeluarController::class, 'cetak'])->name('cetak');
Route::get('/data/cetak-pdf', [App\Http\Controllers\SiswaKeluarController::class, 'cetak_pdf']);

Route::get('/data/tamu', [App\Http\Controllers\TamuController::class, 'index'])->name('tamu');
Route::post('/data/tamu/store', [App\Http\Controllers\TamuController::class, 'store']);
Route::get('/data/tamu/create', [App\Http\Controllers\TamuController::class, 'create'])->name('create');
Route::get('/data/tamu/delete/{id}', [App\Http\Controllers\TamuController::class, 'delete_tamu']);
Route::get('/ubah/edit-data-tamu/{id}', [App\Http\Controllers\TamuController::class, 'edit_tamu']);
Route::put('/data/tamu/update-data/{id}', [App\Http\Controllers\TamuController::class, 'update']);
Route::get('/data/tamu/export_excel', [App\Http\Controllers\TamuController::class, 'export_excel']);
 Route::post('/data/tamu/import_excel/post', [App\Http\Controllers\TamuController::class, 'import_excel_post']);

Route::get('/data/ada', [App\Http\Controllers\SiswaAdaController::class, 'index'])->name('ada');
Route::post('/data/ada/store', [App\Http\Controllers\SiswaAdaController::class, 'store']);
Route::get('/data/ada/create', [App\Http\Controllers\SiswaAdaController::class, 'create'])->name('create');
Route::get('/data/ada/delete/{id}', [App\Http\Controllers\SiswaAdaController::class, 'delete_ada']);
Route::get('/ubah/edit-data-kunjungan-tamu/{id}', [App\Http\Controllers\SiswaAdaController::class, 'edit_kunjungan']);
Route::put('/data/kunjungan/update-data/{id}', [App\Http\Controllers\SiswaAdaController::class, 'update']);
Route::get('/data/ada/export_excel', [App\Http\Controllers\SiswaAdaController::class, 'export_excel']);
Route::post('/data/ada/import_excel/post', [App\Http\Controllers\TamuController::class, 'import_excel_post']);

Route::get('/datasiswa/siswa', [App\Http\Controllers\SiswaController::class, 'index'])->name('siswa');

Route::get('/Data-Pegawai/Pendidik', [GuruController::class,'index'])->name('Pendidik');
Route::post('/Data-Pegawai/daftar/store', [GuruController::class, 'store']);
Route::get('/Data-Pegawai/daftar/create', [GuruController::class, 'create'])->name('create');
Route::get('/Data-Pegawai/Pendidik/delete/{id}', [GuruController::class, 'delete_pegawai']);
Route::get('/Data-Pegawai/edit-data-pendidik/{id}', [GuruController::class, 'edit_pendidik']);
Route::put('/Data-Pegawai/update-data/{id}', [GuruController::class, 'update']);
Route::get('/Data-Pegawai/pendidik/export_excel', [GuruController::class, 'export_excel']);
Route::post('/Data-Pegawai/import_excel/post', [GuruController::class, 'import_excel_post']);
Route::get('/Data-Pegawai/pendidik-cetak-pdf', [GuruController::class, 'cetak_pdf']);


Route::get('/Data-Pegawai/tenaga-pendidik', [App\Http\Controllers\TenagaPendidikController::class,'index'])->name('tenaga-Pendidik');
Route::post('/Data-Pegawai/daftar-tenaga-pendidik/store', [App\Http\Controllers\TenagaPendidikController::class, 'store']);
Route::get('/Data-Pegawai/daftar-tenaga-pendidik/create', [App\Http\Controllers\TenagaPendidikController::class, 'create'])->name('create');
Route::get('/Data-Pegawai/tenaga-pendidik/delete/{id}', [App\Http\Controllers\TenagaPendidikController::class, 'delete_tenaga']);
Route::get('/Data-Pegawai/edit-data-tenaga-pendidik/{id}',[App\Http\Controllers\TenagaPendidikController::class, 'edit_tenaga']);
Route::put('/Data-Pegawai/tenaga-pendidik/update-data/{id}',[App\Http\Controllers\TenagaPendidikController::class, 'update']);
Route::get('/Data-Pegawai/tenaga/export_excel', [App\Http\Controllers\TenagaPendidikController::class, 'export_excel']);
Route::post('/Data-Pegawai/import_excel/post', [App\Http\Controllers\TenagaPendidikController::class, 'import_excel_post']);
Route::get('/Data-Pegawai/cetak-tenaga-pendidik', [App\Http\Controllers\TenagaPendidikController::class, 'cetak'])->name('cetak-tenaga-pendidik');
Route::get('/Data-Pegawai/tenaga-cetak-pdf', [App\Http\Controllers\TenagaPendidikController::class, 'cetak_pdf']);

Route::get('/Data-Pegawai/piket', [App\Http\Controllers\PiketController::class,'index'])->name('piket');
Route::get('/Data-Pegawai/mapel', [App\Http\Controllers\MapelController::class,'index'])->name('mapel');

Route::get('/bangunan/kelas', [App\Http\Controllers\BangunanController::class,'index'])->name('kelas');
Route::post('/bangunan/daftar/store', [App\Http\Controllers\BangunanController::class, 'store']);
Route::get('/bangunan/daftar/create', [App\Http\Controllers\BangunanController::class, 'create'])->name('create');
Route::get('/bangunan/kelas/delete/{id}', [App\Http\Controllers\BangunanController::class, 'delete_daftar']);
Route::get('/bangunan/edit-data-bangunan/{id}',[App\Http\Controllers\BangunanController::class, 'edit_bangunan']);
Route::put('/bangunan/edit/update-data/{id}',[App\Http\Controllers\BangunanController::class, 'update']);
Route::get('/bangunan/export_excel', [App\Http\Controllers\BangunanController::class, 'export_excel']);
Route::post('/bangunan/import_excel/post', [App\Http\Controllers\BangunanController::class, 'import_excel_post']);

Route::get('/keuangan/pembaiaran-siswa', [App\Http\Controllers\BaiaranSiswaController::class,'index'])->name('pembaiaran-siswa');
Route::post('/keuangan/daftar-pembaiaran-siswa/store', [App\Http\Controllers\BaiaranSiswaController::class, 'store']);
Route::get('/keuangan/daftar-pembaiaran-siswa/create', [App\Http\Controllers\BaiaranSiswaController::class, 'create'])->name('create');
Route::get('/keuangan/pembaiaran-siswa/delete/{id}', [App\Http\Controllers\BaiaransiswaController::class, 'delete_pembaiaran']);
Route::get('/keuangan/edit-data-pembairan-siswa/{id}',[App\Http\Controllers\BaiaransiswaController::class, 'edit_pembairan']);
Route::put('/keuangan/siswa/update-data/{id}',[App\Http\Controllers\BaiaransiswaController::class, 'update']);
Route::get('/keuangan/export_excel', [App\Http\Controllers\BaiaranSiswaController::class, 'export_excel']);

Route::get('/keuangan/gajih-pegawai', [App\Http\Controllers\gajihController::class,'index'])->name('gajih-pegawai');
Route::post('/keuangan/daftar-gajih-pegawai/store', [App\Http\Controllers\gajihController::class, 'store']);
Route::get('/keuangan/daftar-gajih-pegawai/create', [App\Http\Controllers\gajihController::class, 'create'])->name('create');
Route::get('/keuangan/gajih-pegawai/delete/{id}', [App\Http\Controllers\gajihController::class, 'delete_gajih']);
Route::get('/keuangan/edit-data-gajih-pegawai/{id}',[App\Http\Controllers\gajihController::class, 'edit_gajih']);
Route::put('/keuangan/gajih/update-data/{id}',[App\Http\Controllers\gajihController::class, 'update']);
Route::get('/keuangan/export_excel', [App\Http\Controllers\gajihsController::class, 'export_excel']);
Route::post('/keuangan/import_excel/post', [App\Http\Controllers\gajihsController::class, 'import_excel_post']);

Route::get('/profil/sejarah', [App\Http\Controllers\profilController::class, 'index'])->name('sejarah');
Route::get('/profil/visi-misi-sekolah', [App\Http\Controllers\profilController::class, 'visi'])->name('visi-misi-sekolah');
Route::get('/profil/sarana-prasarana', [App\Http\Controllers\profilController::class, 'sarana'])->name('sarana-prasaranan');
Route::get('/profil/struktur-organisasi', [App\Http\Controllers\profilController::class, 'struktur'])->name('struktur-organisasi');
Route::get('/profil/pembaritahuan', [App\Http\Controllers\profilController::class, 'pemberi'])->name('pembaritahuan');
Route::get('/profil/guru-smp-pgri', [App\Http\Controllers\profilController::class, 'guru'])->name('guru-smp-pgri');
Route::get('/profil/kontak-sekolah', [App\Http\Controllers\profilController::class, 'kontak'])->name('kontak-sekolah');


Route::get('/tujuh/tujuh-a', [App\Http\Controllers\kelastujuhConttroller::class, 'index'])->name('tujuh-a');
Route::post('/tujuh/tujuh-a/store', [App\Http\Controllers\kelastujuhConttroller::class, 'store']);
Route::get('/tujuh/apload-tugas-kelas-7/create', [App\Http\Controllers\kelastujuhConttroller::class, 'create'])->name('create');
Route::get('/tujuh/tujuh-a/delete/{id}', [App\Http\Controllers\kelastujuhConttroller::class, 'delete_tujuh']);
Route::get('/tujuh/export_excel', [App\Http\Controllers\kelastujuhConttroller::class, 'export_excel']);


// Akun Siswa
Route::get('/akun/siswa',[App\Http\Controllers\AdminController::class,'akunSiswa'])->name('akun.siswa.index');
Route::get('/akun/siswa/create',  [App\Http\Controllers\AdminController::class,'akunSiswaAdd'])->name('akun/siswa/create');
Route::get('/akun/siswa/edit/{id}',  [App\Http\Controllers\AdminController::class,'akunSiswaEdit'])->name('akun.siswa.edit');
Route::post('/akun/siswa/post',  [App\Http\Controllers\AdminController::class,'akunSiswaPost'])->name('akun.siswa.post');
Route::get('/akun/siswa/index/delete/{id}',  [App\Http\Controllers\AdminController::class,'akunSiswaDelete']);


  // Akun Pegawai
Route::get('/akun/pegawai',[App\Http\Controllers\AdminController::class,'akunPegawai'])->name('akun.pegawai.index');
Route::get('/akun/pegawai/create',   [App\Http\Controllers\AdminController::class,'akunPegawaiAdd'])->name('akun/pegawai/create');
Route::get('/akun/pegawai/edit/{id}',  [App\Http\Controllers\AdminController::class,'akunPegawaiEdit'])->name('akun.pegawai.edit');
Route::post('/akun/pegawai/post',   [App\Http\Controllers\AdminController::class,'akunPegawaiPost'])->name('akun.pegawai.post');
Route::get('/akun/pegawai/index/delete/{id}',   [App\Http\Controllers\AdminController::class,'akunPegawaiDelete']);

// Struktur Organisasi
Route::get('/struktur-organisasi',[App\Http\Controllers\AdminController::class,'strukturOrganisasi'])->name('admin.struktur.index');
Route::get('/struktur-organisasi/create',[App\Http\Controllers\AdminController::class,'strukturCreate'])->name('admin.struktur.create');
Route::get('/struktur-organisasi/edit/{struktur}',[App\Http\Controllers\AdminController::class,'strukturEdit'])->name('admin.struktur.edit');
Route::post('/struktur-organisasi/post',[App\Http\Controllers\AdminController::class,'strukturPost'])->name('admin.struktur.post');
Route::delete('/struktur-organisasi/delete/{id}',[App\Http\Controllers\AdminController::class,'strukturDelete'])->name('admin.struktur.delete');


Route::get('/pegawai', [App\Http\Controllers\cobaController::class, 'index'])->name('pegawai');
Route::get('/siswa',[App\Http\Controllers\Siswa1Controller::class,'index'])->name('siswa');
Route::get('/materi/materi', [App\Http\Controllers\materiController::class, 'index'])->name('materi');
Route::get('/tugas/tugas', [App\Http\Controllers\TugasController::class, 'index'])->name('tugas');
Route::get('/ujian/ujian', [App\Http\Controllers\UjianController::class, 'index'])->name('ujian');
Route::get('/nilai/nilai', [App\Http\Controllers\NilaiController::class, 'index'])->name('nilai');



    // Website Sekolah
    //berita
    Route::get('/admin/berita',[App\Http\Controllers\AdminController::class,'beritaGet'])->name('admin.berita.index');
    Route::get('/admin/berita/create', [App\Http\Controllers\AdminController::class,'beritaCreate'])->name('admin/berita/create');
    Route::post('/admin/berita-post',[App\Http\Controllers\AdminController::class,'beritaPost'])->name('admin.berita.post');
    Route::get('/admin/berita/edit/{id}',[App\Http\Controllers\AdminController::class,'beritaEdit'])->name('admin.berita.edit');
    Route::delete('/admin/berita-del/{id}', [App\Http\Controllers\AdminController::class,'beritaDel'])->name('admin.beritaDel');
    Route::get('/admin/berita/detail/{id}', [App\Http\Controllers\AdminController::class,'beritaDetail'])->name('admin.berita.detail');

    //agenda
    Route::get('/admin/agenda', [App\Http\Controllers\AdminController::class,'agendaGet'])->name('admin.agenda.index');
    Route::get('/admin/agenda/create', [App\Http\Controllers\AdminController::class,'agendaCreate'])->name('admin/agenda/create');
    Route::post('/admin/agenda-post', [App\Http\Controllers\AdminController::class,'agendaPost'])->name('admin.agenda.post');
    Route::get('/admin/agenda/edit/{id}', [App\Http\Controllers\AdminController::class,'agendaEdit'])->name('admin.agenda.edit');
    Route::get('/admin/agenda/index/delete/{id}',[App\Http\Controllers\AdminController::class,'agendaDel']);

    //eskul
    Route::get('/admin/eskul',[App\Http\Controllers\AdminController::class,'eskulGet'])->name('admin.eskul.index');
    Route::get('/admin/eskul/create', [App\Http\Controllers\AdminController::class,'eskulCreate'])->name('admin/eskul/create');
    Route::post('/admin/eskul-post',[App\Http\Controllers\AdminController::class,'eskulPost'])->name('admin.eskul.post');
    Route::get('/eskul/edit/{id}', [App\Http\Controllers\AdminController::class,'eskulEdit'])->name('admin.eskul.edit');
    Route::get('/admin/eskul/detail/{id}', [App\Http\Controllers\AdminController::class,'eskulDetail'])->name('admin.eskul.detail');
    Route::delete('/admin/eskul-del/{id}', [App\Http\Controllers\AdminController::class,'eskulDel'])->name('admin.eskulDel');

    //galeri
    Route::get('/admin/galeri', [App\Http\Controllers\AdminController::class,'galeriGet'])->name('admin.galeri.index');
    Route::get('/admin/galeri/create', [App\Http\Controllers\AdminController::class,'galeriCreate'])->name('admin/galeri/create');
    Route::get('/admin/galeri/edit/{id}', [App\Http\Controllers\AdminController::class,'galeriEdit'])->name('admin.galeri.edit');
    Route::post('/admin/galeri-post',[App\Http\Controllers\AdminController::class,'galeriPost'])->name('admin.galeri.post');
    Route::delete('/admin/galeri-del/{id}', [App\Http\Controllers\AdminController::class,'galeriDel'])->name('admin.galeriDel');

    //prestasi
    Route::get('/admin/prestasi', [App\Http\Controllers\AdminController::class,'prestasiGet'])->name('admin.prestasi.index');
    Route::get('/admin/prestasi/create', [App\Http\Controllers\AdminController::class,'prestasiCreate'])->name('admin/prestasi/create');
    Route::get('/admin/prestasi/edit/{id}',[App\Http\Controllers\AdminController::class,'prestasiEdit'])->name('admin.prestasi.edit');
    Route::post('/admin/prestasi-post', [App\Http\Controllers\AdminController::class,'prestasiPost'])->name('admin.prestasi.post');
    Route::delete('/admin/prestasi-del/{id}',[App\Http\Controllers\AdminController::class,'prestasiDel'])->name('admin.prestasiDel');


    //pengumuman
    Route::get('/admin/pengumuman',[App\Http\Controllers\AdminController::class,'pengumumanGet'])->name('admin.pengumuman.index');
    Route::get('/admin/pengumuman/create',[App\Http\Controllers\AdminController::class,'pengumumanCreate'])->name('admin/pengumuman/create');
    Route::get('/admin/pengumuman/edit/{id}', [App\Http\Controllers\AdminController::class,'pengumumanEdit'])->name('admin.pengumuman.edit');
    Route::post('/admin/pengumuman-post',[App\Http\Controllers\AdminController::class,'pengumumanPost'])->name('admin.pengumuman.post');
    Route::delete('/admin/pengumuman-del/{id}',[App\Http\Controllers\AdminController::class,'pengumumanDel'])->name('admin.pengumumanDel');

      // Intrakulikuler
    Route::get('/admin/kegiatan/intrakulikuler',[App\Http\Controllers\AdminController::class,'intrakulikuler'])->name('admin.kegiatan.intrakulikuler.index');
    Route::get('/admin/kegiatan/intrakulikuler/add' ,[App\Http\Controllers\AdminController::class,'intrakulikulerAdd'])->name('admin.kegiatan.intrakulikuler.add');
    Route::get('/admin/kegiatan/intrakulikuler/{kegiatan}'  ,[App\Http\Controllers\AdminController::class,'intrakulikulerEdit'])->name('admin.kegiatan.intrakulikuler.edit');
    Route::post('/admin/kegiatan/intrakulikuler/post',[App\Http\Controllers\AdminController::class,'intrakulikulerPost'])->name('admin.kegiatan.intrakulikuler.post');
    Route::delete('/admin/kegiatan/intrakulikuler/{id}' ,[App\Http\Controllers\AdminController::class,'intrakulikulerDelete'])->name('admin.kegiatan.intrakulikuler.delete');
      // Ekstrakulikuler
    Route::get('/admin/kegiatan/ekstrakulikuler',  [App\Http\Controllers\AdminController::class,'ekstrakulikuler'])->name('admin.kegiatan.ekstrakulikuler.index');
    Route::get('/admin/kegiatan/ekstrakulikuler/add', [App\Http\Controllers\AdminController::class,'ekstrakulikulerAdd'])->name('admin/kegiatan/ekstrakulikuler/add');
    Route::get('/admin/kegiatan/ekstrakulikuler/{kegiatan}',  [App\Http\Controllers\AdminController::class,'ekstrakulikulerEdit'])->name('admin.kegiatan.ekstrakulikuler.edit');
    Route::post('/admin/kegiatan/ekstrakulikuler/post',  [App\Http\Controllers\AdminController::class,'ekstrakulikulerPost'])->name('admin.kegiatan.ekstrakulikuler.post');
    Route::delete('/admin/kegiatan/ekstrakulikuler/{id}', [App\Http\Controllers\AdminController::class,'ekstrakulikulerDelete'])->name('admin.kegiatan.ekstrakulikuler.delete');
