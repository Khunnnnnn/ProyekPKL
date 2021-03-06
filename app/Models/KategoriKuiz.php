<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriKuiz extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function kuiz()
    {
        return $this->hasMany(Kuiz::class, 'kategori_kuiz_id');
    }
}
