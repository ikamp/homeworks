<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderItem', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('foodId');
            $table->integer('orderId');
            $table->integer('quantity');
            $table->integer('price');
            $table->foreign('orderId')->references('id')->on('order');
            $table->foreign('foodId')->references('id')->on('food');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orderItem');
    }
}
