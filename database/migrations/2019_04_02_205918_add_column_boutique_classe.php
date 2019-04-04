<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnBoutiqueClasse extends Migration
{//cela permet de créer un clé secondaire qui relit entre la classe et id dans la table' classes Boutiques'
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('boutiques', function (Blueprint $table) {
            $table->integer('classe')->unsigned();
            $table->foreign('classe')->references('id')->on('boutiques_class');
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
            $table->dropForeign(['classe']);
            $table->dropColumn('classe');
        });
    }
}
