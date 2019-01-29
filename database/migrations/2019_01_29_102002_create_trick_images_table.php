<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrickImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trick_images', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('trick_id')->unsigned()->index()->nullable();
            $table->string('src');

            $table->foreign('trick_id')->references('id')->on('tricks')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('trick_images');
    }
}
