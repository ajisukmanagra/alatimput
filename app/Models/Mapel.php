<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    protected $guarded = [];

    public function guru()
    {
        return $this->hasMany(Guru::class);
    }
}
