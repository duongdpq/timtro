<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMotelImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motel_images', function (Blueprint $table) {
          $table->increments('id');
            $table->string('image');
            $table->integer('motel_id')->unsigned();
            $table->foreign('motel_id')->references('id')->on('motels')->onDelete('cascade');
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
        Schema::drop('motel_images');
    }
}
