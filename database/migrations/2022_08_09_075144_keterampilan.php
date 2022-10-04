<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Keterampilan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Tb_Keterampilan', function (Blueprint $table) {
            $table->id('id_keterampilan');
            $table->foreignId('periode');
            $table->integer('semester');
            $table->foreignId('mapel');
            $table->foreignId('kelas');
            $table->foreignId('siswa');
            $table->integer('K1')->nullable();
            $table->integer('K2')->nullable();
            $table->integer('K3')->nullable();
            $table->integer('K4')->nullable();
            $table->integer('K5')->nullable();
            $table->float('HPA',3,1)->nullable();
            $table->string('predikat',)->nullable();
            $table->timestamps();

            $table->foreign('periode')->references('id_periode')->on('Tb_Periode');
            $table->foreign('mapel')->references('id_mengajar')->on('Tb_Mengajar');
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
        Schema::dropIfExists('Tb_Keterampilan');
    }
}
