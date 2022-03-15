<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMuridsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('murids', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('level')->nullable();
            $table->string('email')->unique();
            $table->integer('nis_siswa')->nullable();
            $table->date('tanggal_daftar')->nullable();
            $table->foreignId('id_kelas')->nullable();;
            $table->foreignId('id_jurusan')->nullable();;
            $table->foreignId('id_verifikasi')->nullable();;
            $table->foreignId('id_status')->nullable();;
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('murids');
    }
}
