<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ada extends Model
{
    protected $table = 'ada';
    protected $fillable = ['Nama','Kontak','Asal_tempat','jenis_kelamin','Keterangan', 'tujuan'];
}
