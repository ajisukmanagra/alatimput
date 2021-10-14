<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daftar extends Model
{
    protected $table = 'daftar';
    protected $fillable = ['nis','nisn','nama','jenis_kelamin','tempat', 'tahun','orangtua','no_ijajah','no_skhun','no_peserta', 'kelas'];
}
