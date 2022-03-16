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


}
