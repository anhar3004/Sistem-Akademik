<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Kelas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Tb_Kelas', function (Blueprint $table) {
            $table->id('id_kelas');
            $table->integer('kelas');
            $table->foreignId('ruangan');
            $table->foreignId('walkes');
            $table->timestamps();

            $table->foreign('ruangan')->references('id_ruangan')->on('Tb_Ruangan');
            $table->foreign('walkes')->references('id_guru')->on('Tb_Guru');
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
        Schema::dropIfExists('Tb_Kelas');
    }
}
