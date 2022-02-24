<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;

    public function Siswaa()
    {
        return $this->hasMany(siswa::class,'id_jurusan');
    }
}
