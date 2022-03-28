<?php

namespace Database\Seeders;

use App\Models\Jurusan;
use Illuminate\Database\Seeder;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Jurusan::create([
            'nama_jurusan' => 'Teknik Komputer Jaringan'
        ]);
        Jurusan::create([
            'nama_jurusan' => 'Rekayasa Perangkat Lunak'
        ]);
        Jurusan::create([
            'nama_jurusan' => 'Teknik Mesin'
        ]);
        Jurusan::create([
            'nama_jurusan' => 'Multimedia'
        ]);
    }
}
