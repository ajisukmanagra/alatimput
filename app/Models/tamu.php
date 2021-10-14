<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tamu extends Model
{
    protected $table = 'tamu';
    protected $fillable = ['Nama','Kontak','Asal_tempat','jenis_kelamin','Keterangan', 'tujuan'];
}
