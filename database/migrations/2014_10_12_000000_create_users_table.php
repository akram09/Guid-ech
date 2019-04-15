<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() /* fonction pour creer la migration avc table users */
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');   /* champ id */
            $table->string('name');     /* champ name */
            $table->string('email', 250);   /* champ email*/
            $table->timestamp('email_verified_at')->nullable();     
            $table->string('password');   /* champ password */
            $table->string('country');    /* champ country */
            $table->string('city');      /* champ city */
            $table->text('address');    /* champ address */
            $table->string('avatar')->default('default.jpg'); // user avatar with default photo 
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
