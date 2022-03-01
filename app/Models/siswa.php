<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function Kelaz()
    {
        return $this->belongsTo(Kelaz::class,'id_kelas');
    }
    public function Jurusan()
    {
        return $this->belongsTo(Jurusan::class,'id_jurusan');
    }
    public function Verifikasi()
    {
        return $this->belongsTo(Verifikasi::class,'id_verifikasi');
    }
    public function Status()
    {
        return $this->belongsTo(Status::class,'id_status');
    }
}
