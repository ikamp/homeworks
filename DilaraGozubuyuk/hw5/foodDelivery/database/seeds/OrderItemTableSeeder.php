<?php

use Illuminate\Database\Seeder;

class OrderItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orderItem')->insert([
            'orderId' => 1,
            'foodId' => 1,
            'quantity' => 2,
            'price' => 10
        ]);
    }
}
