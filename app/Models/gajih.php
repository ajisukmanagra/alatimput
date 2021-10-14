<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gajih extends Model
{
    protected $table = 'gajih';
    protected $fillable = ['nama','foto','jenis_kelamin','nik','jabatan', 'hari_kerja','gajih_perhari','tunjangan','gajih_perbulan'];
}
