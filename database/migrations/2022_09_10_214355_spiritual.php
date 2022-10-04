<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Spiritual extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Tb_Spiritual', function (Blueprint $table) {
            $table->id('id_spiritual');
            $table->foreignId('periode');
            $table->integer('semester');
            $table->foreignId('kelas');
            $table->foreignId('siswa');
            $table->text('aspek_spiritual');
            $table->integer('nilai');
            $table->string('predikat');
            $table->text('deskripsi');
            $table->timestamps();

            $table->foreign('periode')->references('id_periode')->on('Tb_Periode');
            $table->foreign('kelas')->references('id_kelas')->on('Tb_Kelas');
            $table->foreign('siswa')->references('id_Siswa')->on('Tb_Siswa');
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
        Schema::dropIfExists('Tb_Spiritual');
    }
}
