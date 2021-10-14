<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keluar extends Model
{
    protected $table = 'keluar';
    protected $fillable = ['Nis','Nama','Tgl','jenis_kelamin','kls', 'ortu', 'Keterangan'];
}
