<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnBoutiqueWilaya extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('boutiques', function (Blueprint $table) {
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
        Schema::table('boutiques', function (Blueprint $table) {
            $table->dropForeign(['wilaya_id']);
         $table->dropColumn('wilaya_id');
        });
    }
}
