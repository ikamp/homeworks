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
      DB::table('user')->insert(
      [
        'username' => 'oguzhanacet',
        'email' => 'oguz@acet.me',
        'password' => bcrypt('1'),
        'address' => 'Beyoglu'
      ]);

      DB::table('restaurant')->insert([
      [
        'name' => 'Nusret Steakhouse',
        'district' => 'Etiler',
        'phoneNumber' => '0000-000-00-00'
      ],
      [
        'name' => 'Günaydın Steakhouse',
        'district' => 'Etiler',
        'phoneNumber' => '0000-000-00-01'
      ],
      [
        'name' => 'Virginia Angus Steakhouse',
        'district' => 'Etiler',
        'phoneNumber' => '0000-000-00-02'
      ]]);

      DB::table('food')->insert([
      [
        'name' => 'Lokum Burger',
        'price' => 150,
        'description' => 'Bu şehrin en lezzetli Burgeri.',
        'restaurantId' => 1
      ],
      [
        'name' => 'Günaydın Kuzu Biftek',
        'price' => 500,
        'description' => 'Lezzete Günaydın Diyin.',
        'restaurantId' => 2
      ],
      [
        'name' => 'Virginia Burger',
        'price' => 50,
        'description' => 'Bizimki daha leziz bizimkini deneyin.',
        'restaurantId' => 3
      ]]);

      DB::table('order')->insert([
      [
        'userId' => 1,
        'date' => '2017-10-10 17:17:17'
      ],
      [
        'userId' => 1,
        'date' => '2012-12-12 17:18:19'
      ]]);

      DB::table('orderitem')->insert([
      [
        'orderId' => 1,
        'foodId' => 1,
        'price' => 150,
        'quantity' => 1
      ],
      [
        'orderId' => 2,
        'foodId' => 2,
        'price' => 500,
        'quantity' => 1
      ],
      [
        'orderId' => 2,
        'foodId' => 3,
        'price' => 50,
        'quantity' => 1
      ]]);
    }
  }
