<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;
    public function Murid()
    {
        return $this->hasMany(Murid::class,'id_status');
    }

    public function Admin()
    {
        return $this->hasMany(Admin::class,'id_status');
    }

    public function Guru()
    {
        return $this->hasMany(Guru::class,'id_status');
    }
   
}
