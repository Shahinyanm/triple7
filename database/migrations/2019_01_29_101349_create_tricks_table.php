<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTricksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tricks', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description1');
            $table->string('description2');
            $table->string('description3');
            $table->string('description4');
            $table->string('link');
            $table->boolean('activated');
            $table->float('amount');

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
        Schema::dropIfExists('tricks');
    }
}
