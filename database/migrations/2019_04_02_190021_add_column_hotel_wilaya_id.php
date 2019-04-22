<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnHotelWilayaId extends Migration 
{

    //cela permet de créer un clé secondaire qui relit entre wilaya_id et id dans la table wilaya
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hotels', function (Blueprint $table) {
            $table->integer('wilaya_id')->unsigned()->after('id');
            $table->foreign('wilaya_id')->references('id')->on('wilayas');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hotels', function (Blueprint $table) {
         $table->dropForeign(['wilaya_id']);
         $table->dropColumn('wilaya_id');
        });
    }
}
