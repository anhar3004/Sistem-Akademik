<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Siswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Tb_SIswa', function (Blueprint $table) {
            $table->id('id_siswa');
            $table->foreignId('kelas');
            $table->string('nis');
            $table->string('nama_lengkap');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->string('agama');
            $table->integer('anak_ke');
            $table->string('status');
            $table->text('alamat');
            $table->bigInteger('no_hp');
            $table->date('tanggal_diterima');
            $table->integer('dikelas');
            $table->string('nama_ibu');
            $table->string('pekerjaan_ibu');
            $table->string('nama_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('nama_wali')->nullable();
            $table->string('pekerjaan_wali')->nullable();
            $table->text('alamat_wali')->nullable();
            $table->bigInteger('no_hp_wali')->nullable();
            $table->timestamps();

            $table->foreign('kelas')->references('id_kelas')->on('Tb_Kelas');
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
        Schema::dropIfExists('Tb_SIswa');
    }
}
