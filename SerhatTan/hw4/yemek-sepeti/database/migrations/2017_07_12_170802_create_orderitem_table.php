<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderitemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderitem', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('orderid');
            $table->integer('foodid');
            $table->float('price');
            $table->integer('quantity');
            $table->timestamps();
        });
        Schema::table('orderitem', function($table) {
            $table->foreign('orderid')->references('id')->on('order');
        });
        Schema::table('orderitem', function($table) {
            $table->foreign('foodid')->references('id')->on('food');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orderitem');
    }
}
