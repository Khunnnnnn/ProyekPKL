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

    public function Murid()
    {
        return $this->hasMany(Murid::class,'id_kelas');
    }
    
}
