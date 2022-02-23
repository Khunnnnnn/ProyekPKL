<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelaz extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_kelas'
    ];

    public function Siswa()
    {
        return $this->hasMany(siswa::class,'id_kelas');
    }
}
