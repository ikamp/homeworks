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
        Schema::create('orderitem', function (Blueprint $table) {
            $table->increments('id');
            $table->integer("order_id")->unsigned();
            $table->double("price");
            $table->integer("quantity");
            $table->integer("food_id")->unsigned();

            $table->foreign("food_id")->references("id")->on("food");
            $table->foreign("order_id")->references("id")->on("order");


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
