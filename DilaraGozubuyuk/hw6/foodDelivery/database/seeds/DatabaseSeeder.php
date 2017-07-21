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
        DB::table('user')->insert([
            'username' => 'busgum',
            'email' => 'busra@kolayik.com',
            'password' => Hash::make('123456'),
            'address' => 'Musazade Mah. Arhavi/Artvin'
        ]);
        DB::table('restaurant')->insert([
            'name' => 'Dragos Restaurant',
            'district' => 'Dragos',
            'phoneNumber' => '02155587963',
        ]);
        DB::table('restaurant')->insert([
            'name' => 'Çiçek Restaurant',
            'district' => 'Yeniköy',
            'phoneNumber' => '02128637963',
        ]);
        DB::table('restaurant')->insert([
            'name' => 'Çınaraltı Mangal',
            'district' => 'Ataşehir',
            'phoneNumber' => '789652365',
        ]);
        DB::table('restaurant')->insert([
            'name' => 'Arbys',
            'district' => 'Mecidiyeköy',
            'phoneNumber' => '7856325',
        ]);
        DB::table('food')->insert([
            'name' => 'Kebap',
            'price' => 12,
            'restaurantId' => 2,
            'description' => 'mukemmel',
        ]);
        DB::table('order')->insert([
            'userId' => 1,
        ]);
        DB::table('orderItem')->insert([
            'orderId' => 1,
            'foodId' => 1,
            'quantity' => 2,
            'price' => 12,
        ]);
    }
}