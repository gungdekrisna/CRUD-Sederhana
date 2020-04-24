<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Matakuliahs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matakuliahs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode_matakuliah');
            $table->string('nama_matakuliah');
            $table->integer('sks');
            $table->integer('semester');
            $table->integer('id_kurikulum')->unsigned();
            $table->integer('id_dosen')->unsigned();
            $table->integer('id_prodi')->unsigned();
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
        //
    }
}
