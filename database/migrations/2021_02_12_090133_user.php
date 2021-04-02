<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class User extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('mysql')->create('user', function(Blueprint $table){
            //id, id_user id_videonya, 
            $table -> increments('id_user');
            $table -> string('username');
            $table -> text('password');
            $table -> string('nama');
            $table -> text('alamat');
            $table -> text('no_hp');
        });
        Schema::connection('mysql2')->create('user', function(Blueprint $table){
            //id, id_user id_videonya, 
            $table -> increments('id_user');
            $table -> string('username');
            $table -> text('password');
            $table -> string('nama');
            $table -> text('alamat');
            $table -> text('no_hp');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        
    }
}
