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


    }
}
