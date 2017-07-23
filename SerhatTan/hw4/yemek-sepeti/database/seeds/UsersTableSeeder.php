<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('users')->insert([
    		'username' => "Mehmet",
    		'email' => "mehmet@gmail.com",
    		'address' => "deneme adresimiz mehmet@gmail.co",
    		'password' => bcrypt('1234')
    		]);
    	DB::table('users')->insert([
    		'username' => "Ahmet",
    		'email' => "ahmet@gmail.com",
    		'address' => "deneme adresimiz ahmet@gmail.com",
    		'password' => bcrypt('1234')
    		]);
    	DB::table('users')->insert([
    		'username' => "Erbil",
    		'email' => "erbil@gmail.com",
    		'address' => "deneme adresimiz erbil@gmail.com",
    		'password' => bcrypt('1234')
    		]);
    	DB::table('users')->insert([
    		'username' => "Burak",
    		'email' => "dangerburak@gmail.com",
    		'address' => "deneme adresimiz dangerburak@gma",
    		'password' => bcrypt('1234')
    		]);
    }
}
