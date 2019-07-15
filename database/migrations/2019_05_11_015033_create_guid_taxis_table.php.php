<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuidTaxisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guid_taxis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('wilaya_id')->unsigned();
            $table->foreign('wilaya_id')->references('id')->on('wilayas'); 
            $table->string('NumTel');
            $table->string('image');
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
        Schema::dropIfExists('guid_taxis');
    }
}
