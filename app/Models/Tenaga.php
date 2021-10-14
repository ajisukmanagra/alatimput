<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenaga extends Model
{
    protected $table = 'tenaga_pendidik';
    protected $fillable = ['nama','foto','jenis_kelamin','tipe','pegawai', 'setatus'];
}
