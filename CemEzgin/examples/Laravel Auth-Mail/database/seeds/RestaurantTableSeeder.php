<?php

use Illuminate\Database\Seeder;

class RestaurantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('restaurant')->insert([
            'name' => str_random(10),
            'description' => str_random(10).'@gmail.com',
            'address' => str_random(10) . 'address',
            'phone' => str_random(10)
        ]);
    }
}
