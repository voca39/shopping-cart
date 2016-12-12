<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
        });
    }

    
    public function down()
    {
        Schema::drop('user');
    }
}
