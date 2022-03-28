<?php

namespace Database\Seeders;

use App\Models\Kelaz;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Kelaz::create([
            'nama_kelas' => 'X TKJ 1'
        ]);
        Kelaz::create([
            'nama_kelas' => 'X RPL 1'
        ]);
        Kelaz::create([
            'nama_kelas' => 'X TM 1'
        ]);
        Kelaz::create([
            'nama_kelas' => 'X MM 1'
        ]);
    }
}
