<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGalleryVideoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gallery_video', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_ukm');
            $table->text('youtube_id');
            $table->string('judul');
            $table->string('deskripsi')->nullable();
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
        Schema::dropIfExists('image_galleri');
    }
}
