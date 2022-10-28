<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnouncementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('announcement', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_ukm');
            $table->string('title');
            $table->text('content');
            $table->text('image');
            $table->bigInteger('total_hit');
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
