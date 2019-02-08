<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DecimalToTricksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tricks', function (Blueprint $table) {
            $table->decimal('amount', 10,2)->nullable()->change();
//            /Substitute 5,2 for your desired precision
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
