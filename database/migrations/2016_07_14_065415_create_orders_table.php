<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('user_id');
            $table->text('cart');
            $table->text('address');
            $table->string('name');
            $table->string('payment_id');
        });
    }

    
    public function down()
    {
        Schema::drop('orders');
    }
}
