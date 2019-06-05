<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuidFoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guid_foods', function (Blueprint $table) {
            $table->increments('id');
            $table->string('restPic');
            $table->string('menuPic');
            $table->string('details'); 
            $table->integer('wilaya_id')->unsigned();
            $table->foreign('wilaya_id')->references('id')->on('wilayas'); 
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
        Schema::dropIfExists('guid_foods');
    }
}
