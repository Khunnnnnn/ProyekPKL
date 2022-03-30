<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Status;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(StatusSeeder::class);
        $this->call(LevelSeeder::class);
        $this->call(VerifikasiSeeder::class);
        $this->call(KelasSeeder::class);
        $this->call(JurusanSeeder::class);

        Admin::create([
            'nama' => 'Admin',
            'level' => '2',
            'email' => 'admin@gmail.com',
            'ktp' => '1234',
            'password' => bcrypt('123456789'),
            'id_verifikasi' => '1',
            'id_status' => '1',
        ]);
    }
}
