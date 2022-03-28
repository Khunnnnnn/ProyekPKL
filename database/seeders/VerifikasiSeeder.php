<?php

namespace Database\Seeders;

use App\Models\Verifikasi;
use Illuminate\Database\Seeder;

class VerifikasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Verifikasi::create([
            'Verifikasi' => 'Telah Verifikasi'
        ]);
        Verifikasi::create([
            'Verifikasi' => 'Belum Verifikasi'
        ]);
    }
}
