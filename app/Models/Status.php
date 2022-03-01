<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;
    public function Siswa()
    {
        return $this->hasMany(siswa::class,'id_status');
    }
}
