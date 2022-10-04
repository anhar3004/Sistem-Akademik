<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PenilaianHarian extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Tb_Penilaian_harian', function (Blueprint $table) {
            $table->id('id_penilaian_harian');
            $table->foreignId('periode');
            $table->integer('semester');
            $table->foreignId('mapel');
            $table->foreignId('kelas');
            $table->foreignId('siswa');
            $table->integer('PH1')->nullable();
            $table->integer('PH2')->nullable();
            $table->integer('PH3')->nullable();
            $table->integer('PH4')->nullable();
            $table->integer('PH5')->nullable();
            $table->integer('PH6')->nullable();
            $table->integer('PH7')->nullable();
            $table->integer('PH8')->nullable();
            $table->float('RPH',3,1)->nullable();
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
        Schema::dropIfExists('Tb_Penilaian_harian');
    }
}
