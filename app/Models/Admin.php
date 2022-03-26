<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class Admin extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $guarded = ['id'];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $table = 'admins';
    protected $primaryKey='id';

    public function Verifikasi()
    {
        return $this->belongsTo(Verifikasi::class,'id_verifikasi');
    }
    public function Status()
    {
        return $this->belongsTo(Status::class,'id_status');
    }
}
