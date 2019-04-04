<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnRestauClass extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('restaurants_class', function (Blueprint $table) {
            $table->integer('classe')->unsigned();
            $table->foreign('classe')->references('id')->on('restaurants_class');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('restaurants_class', function (Blueprint $table) {
            $table->dropForeign(['classe']);
            $table->dropColumn('classe');
        });
    }
}
