<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('user')->insert([
            'username' => 'yalcintatar',
            'email' => 'yalcintatar41@gmail.com',
            'password' => bcrypt('abc987'),
            'address' => 'Kocaeli'
        ]);
        DB::table('restaurant')->insert([


            [
                'name' => 'Burger King',
                'district' => 'Cihangir',
                'phoneNumber' => '0212-875-65-42'],


            ['name' => 'Mcdonalds',
                'district' => 'Kağıthane',
                'phoneNumber' => '0212-564-87-42'],


            ['name' => 'Dominos Pizza',
                'district' => 'Beyoğlu',
                'phoneNumber' => '0212-444-33-22']


        ]);
        DB::table('food')->insert([
            [
                'name' => 'BolMalzemos Pizza',
                'price' => 18,
                'restaurantId' => 3,
                'description' => 'with beacon'
            ],
            [
                'name' => 'Peynirli Pizza',
                'price' => 18,
                'restaurantId' => 3,
                'description' => 'with cheese'
            ],
            [
                'name' => 'Sucuklu Pizza',
                'price' => 18,
                'restaurantId' => 3,
                'description' => 'Kayseri sucuk'
            ],
            [
                'name' => 'Mc Burger',
                'price' => 18,
                'restaurantId' => 2,
                'description' => 'ketchup'
            ],
            [
                'name' => 'Big Mag',
                'price' => 18,
                'restaurantId' => 2,
                'description' => 'ketchup'
            ],
            [
                'name' => 'Double King Chicken',
                'price' => 18,
                'restaurantId' => 1,
                'description' => 'with Ketchup'
            ],
            [
                'name' => 'Big King',
                'price' => 18,
                'restaurantId' => 1,
                'description' => 'with BBQ'
            ]]);
        DB::table('order')->insert([
            [
                'userId' => 1,
                'date' => '2017-06-13 16:56:38'
            ],
            [
                'userId' => 1,
                'date' => '2017-06-13 16:57:39'
            ]]);
        DB::table('orderitem')->insert([
            [
                'orderId' => 1,
                'foodId' => 3,
                'quantity' => 1,
                'price' => 5
            ],
            [
                'orderId' => 2,
                'foodId' => 4,
                'quantity' => 1,
                'price' => 5
            ],
            [
                'orderId' => 2,
                'foodId' => 2,
                'quantity' => 1,
                'price' => 5
            ]]);
    }
}
