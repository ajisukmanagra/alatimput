<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bangunan extends Model
{
    protected $table = 'bangunan';
    protected $fillable = ['Jenis_ruangan','tanggal_pembuatan','foto'];
}
