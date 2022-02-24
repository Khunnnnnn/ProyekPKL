<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kuiz extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function kategoriKuiz()
    {
        return $this->belongsTo(KategoriKuiz::class, 'kategori_kuiz_id');
    }
}
