<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->delete();
        App\User::create([
            "name"     => "Anakin Skywalker",
            "email"    => "test@test.com",
            "password" => Hash::make("1"),
        ]);

        factory(App\Restaurant::class, 50)->create()->each(function ($restaurant) {
            $restaurant->foods()->saveMany(factory(App\Food::class, 20)->make());
        });
        return;

//        $restaurants = [
//            [
//                "name" => "Burger King",
//                "address" => "Katip Çelebi Mh., İstiklal Cad. No:1, 34433 Beyoğlu/İstanbul",
//                "phoneNumber" => "444 5 464",
//                "district" => "Beyoğlu",
//                "foods" => [
//                    ["name" => "Whopper Menu", "price" => 17.50],
//                    ["name" => "Chicken Burger", "price" => 15.50],
//                    ["name" => "Big King Extra", "price" => 19.00],
//                    ["name" => "Double Kofte Burger", "price" => 11.25],
//                ]
//            ], [
//                "name" => "Kasap Döner",
//                "address" => "Tomtom Mahallesi, İstiklal Cd. No:215, 34433 Beyoğlu/İstanbul",
//                "phoneNumber" => "0212 293 40 70",
//                "district" => "Beyoğlu",
//                "foods" => [
//                    ["name" => "Tombik Döner", "price" => 26.50],
//                    ["name" => "Tavuk Doner", "price" => 15.50],
//                    ["name" => "Firin Sutlac", "price" => 11.00],
//                    ["name" => "Ayran", "price" => 5.25],
//                ]
//            ]
//        ];
//
//        DB::table('restaurant')->delete();
//
//        foreach ($restaurants as $restaurant) {
//            $foods = $restaurant["foods"];
//            unset($restaurant["foods"]);
//            App\Restaurant::create($restaurant);
//
//            foreach ($foods as $food) {
//                App\Food::create($food);
//            }
//        }

    }
}
