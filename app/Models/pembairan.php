<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembairan extends Model
{
    protected $table = 'pembaiaran';
    protected $fillable = ['nama','kelas','jenis_kelamin','jumlah_baiaran'];
}
