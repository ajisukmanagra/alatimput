<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    protected $table = 'guru';
    protected $fillable = ['nama','nip','pangkat','jabatan','masakerja', 'pendidikan','tgl','mulai_kerja','mutasi','disini_sejak', 'email','nuptk','nrg'];
}
