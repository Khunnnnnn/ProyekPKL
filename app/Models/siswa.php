<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class siswa extends Authenticatable
{
    use HasFactory;
    protected $guarded = [];
    protected $table = "siswa";
    // protected $primaryKey="id";

    protected $hidden = [
        'password', 'remember_token',
    ];

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
