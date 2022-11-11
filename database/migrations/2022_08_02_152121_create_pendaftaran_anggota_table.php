<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftaranAnggotaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftaran_anggota', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_ukm');
            $table->string('nama');
            $table->string('prodi'); 
            $table->string('jurusan'); 
            $table->string('email'); 
            $table->string('no_hp'); 
            $table->text('alasan_bergabung'); 

            $table->timestamps();

            $table->foreign('id_ukm')->references('id')->on('ukm')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendaftaran_anggota');
    }
}
