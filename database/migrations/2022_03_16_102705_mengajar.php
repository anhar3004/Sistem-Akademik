<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Mengajar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Tb_Mengajar', function (Blueprint $table) {
            $table->id('id_mengajar');
            $table->foreignId('kelas');
            $table->foreignId('mapel');
            $table->foreignId('guru');
            $table->timestamps();

            $table->foreign('kelas')->references('id_kelas')->on('Tb_Kelas');
            $table->foreign('mapel')->references('id_mapel')->on('Tb_Pelajaran');
            $table->foreign('guru')->references('id_guru')->on('Tb_Guru');
            $table->engine ='InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Tb_Mengajar');
    }
}
