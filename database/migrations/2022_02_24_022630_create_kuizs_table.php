<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKuizsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kuizs', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->integer('nilai_kkm');
            $table->string('deskripsi');
            $table->string('soal');
            $table->foreignId('kategori_kuiz_id');
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
        Schema::dropIfExists('kuizs');
    }
}
