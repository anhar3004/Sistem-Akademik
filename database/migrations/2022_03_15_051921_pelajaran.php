<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pelajaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Tb_Pelajaran', function (Blueprint $table) {
            $table->id('id_mapel');
            $table->string('kd_mapel');
            $table->string('nama_mapel');
            $table->string('muatan');
            $table->integer('kkm');
            $table->timestamps();

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
        Schema::dropIfExists('Tb_Pelajaran');
    }
}
