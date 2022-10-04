<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pengetahuan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Tb_Pengetahuan', function (Blueprint $table) {
            $table->id('id_pengetahuan');
            $table->foreignId('RPH');
            $table->integer('PTS')->nullable();
            $table->integer('PAS')->nullable();
            $table->float('HPA',3,1)->nullable();
            $table->string('predikat',)->nullable();
            $table->timestamps();

            $table->foreign('RPH')->references('id_penilaian_harian')->on('Tb_Penilaian_harian');
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
        Schema::dropIfExists('Tb_Pengetahuan');
    }
}
