<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateboutiquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boutiques', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Details');
            $table->string('Bimages');
            $table->integer('wilaya_id')->unsigned();
            $table->foreign('wilaya_id')->references('id')->on('wilayas'); 
            $table->integer('classe')->unsigned();
            $table->foreign('classe')->references('id')->on('boutiques_class');
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
        Schema::dropIfExists('boutiques');
    }
}
