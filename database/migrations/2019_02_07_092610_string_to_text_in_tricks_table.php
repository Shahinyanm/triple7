<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StringToTextInTricksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tricks', function (Blueprint $table) {
            $table->text('description1')->nullable()->change();
            $table->text('description2')->nullable()->change();
            $table->text('description3')->nullable()->change();
            $table->text('description4')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tricks', function (Blueprint $table) {
            //
        });
    }
}
