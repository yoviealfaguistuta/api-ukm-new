<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgendaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agenda', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_ukm');
            $table->string('title');
            $table->text('content');
            $table->text('image');
            $table->text('lokasi');
            $table->date('tanggal');
            $table->string('waktu');
            $table->timestamps();

            $table->foreign('id_ukm')->references('id')->on('ukm');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news_kategori');
    }
}
