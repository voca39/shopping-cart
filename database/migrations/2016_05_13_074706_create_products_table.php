<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
   
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('imagePath');
            $table->string('title');
            $table->text('description');
            $table->float('price');
        });
    }

  
    public function down()
    {
        Schema::drop('products');
    }
}
