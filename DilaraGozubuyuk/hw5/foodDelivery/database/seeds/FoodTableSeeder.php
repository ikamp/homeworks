<?php

use Illuminate\Database\Seeder;

class FoodTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('food')->insert([
            'name' => 'suffle',
            'price' => 10,
            'restaurant' => 1,
            'description' => 'It is very tasty'
        ]);
    }
}
