<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
            'username' => 'erenakpinar',
            'email' => 'ea@erenakpinar.com',
            'password' => bcrypt('1'),
            'address' => 'test adres'
        ]);
        DB::table('restaurant')->insert([
            [
                'name' => 'Burger King',
                'district' => 'Beyoğlu',
                'phoneNumber' => '0000-000-00-00'
            ],
            [
                'name' => 'Mcdonalds',
                'district' => 'Kağıthane',
                'phoneNumber' => '0000-000-00-01'
            ],
            [
                'name' => 'Bambi Cafe',
                'district' => 'Taksim',
                'phoneNumber' => '0000-000-00-02'
            ]
        ]);
        DB::table('food')->insert([
            [
                'name' => 'Döner',
                'price' => 5,
                'restaurantId' => 1,
                'description' => 'Test'
            ],
            [
                'name' => 'Su',
                'price' => 1,
                'restaurantId' => 1,
                'description' => 'Test1'
            ],
            [
                'name' => 'Et Döner',
                'price' => 10,
                'restaurantId' => 2,
                'description' => 'Test2'
            ],
            [
                'name' => 'Ayran',
                'price' => 2,
                'restaurantId' => 2,
                'description' => 'Test3'
            ],
            [
                'name' => 'Pizza',
                'price' => 15,
                'restaurantId' => 3,
                'description' => 'Test4'
            ],
            [
                'name' => 'Hamburger',
                'price' => 15,
                'restaurantId' => 3,
                'description' => 'Test5'
            ]

        ]);
        DB::table('order')->insert([
            [
                'userId' => 1,
                'date' => '2017-06-13 16:56:38'
            ],
            [
                'userId' => 1,
                'date' => '2017-06-13 16:56:39'
            ]
        ]);
        DB::table('orderitem')->insert([
            [
                'orderId' => 1,
                'foodId' => 1,
                'quantity' => 1,
                'price' => 5
            ],
            [
                'orderId' => 1,
                'foodId' => 2,
                'quantity' => 1,
                'price' => 1
            ],
            [
                'orderId' => 2,
                'foodId' => 3,
                'quantity' => 1,
                'price' => 10
            ],
            [
                'orderId' => 2,
                'foodId' => 4,
                'quantity' => 2,
                'price' => 4
            ]
        ]);
    }
}
