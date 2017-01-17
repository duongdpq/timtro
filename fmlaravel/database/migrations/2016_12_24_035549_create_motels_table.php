<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motels', function (Blueprint $table) {
           $table->increments('id');
            $table->string('name');
            $table->integer('number_room');
            $table->integer('area');
            $table->integer('price');
            $table->integer('price_water');
            $table->integer('price_electric');
            $table->string('image');
            $table->longText('description');
            $table->text('address');
            $table->string('phone');
            $table->string('lat');
            $table->string('lng');
            $table->tinyInteger('mezzanine');
            $table->tinyInteger('internet');
            $table->tinyInteger('status');
            $table->integer('ward_id')->unsigned();
            $table->foreign('ward_id')->references('id')->on('wards')->onDelete('cascade');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->integer('admin_id')->unsigned();
            $table->foreign('admin_id')->references('id')->on('admins')->onDelete('cascade');
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
        Schema::drop('motels');
    }
}
