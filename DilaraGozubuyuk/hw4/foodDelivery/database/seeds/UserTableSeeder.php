<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
            'username' => 'dilaragz',
            'email' => 'dilara@hotmail.com',
            'password' => '123456',
            'adress' => 'taksim no:5'
        ]);
    }
}
