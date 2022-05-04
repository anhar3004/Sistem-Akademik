<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Jadwal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Tb_Jadwal', function (Blueprint $table) {
            $table->id('id_jadwal');
            $table->foreignId('mengajar');
            $table->integer('semester');
            $table->string('hari');
            $table->integer('jam_ke');
            $table->string('jam_awal');
            $table->string('jam_akhir');
            $table->string('jumlah_menit');
            $table->timestamps();

            $table->foreign('mengajar')->references('id_mengajar')->on('Tb_Mengajar');
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Tb_Jadwal');
    }
}
