1) You should change some lines in the following file to connect your database to Laravel.
For that, enter blog/.env file and change the following lines as it is shown:

DB_CONNECTION=psql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=kolayik
DB_USERNAME=localhost
DB_PASSWORD=


2) If two or more people works on the same database it the method to create database -> "Migration". For this run the following:
php artisan make:migration create_person_table --create=persons

This will create file in blog/database/migrations

3) As an example we added tables to the 2017_07_11_122153_create_person_table.php file

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persons', function (Blueprint $table) {
            $table->increments('id');
            $table->string(column: 'id');
            $table->string(column: 'name');
            $table->string(column: 'lastname');
            $table->string(column: 'phone');
            $table->integer(column: 'age');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('persons');
    }
}

4)  'php artisan migrate' must be entered to command line to connect the table to database.

Not: If  ' [PDOException] could not find driver ' error is seen , write the following codes to the command line:

'sudo apt install php7.0-pgsql'

5) The control of table can be done by creating Person.php which the followwing command:

php artisan make:model Person
This will crate Person.php in /blog/app/

6) To open Laravel server write down to the command line:
'php artisan serve --port 8000'

7) To input data to the table, after we created table in the 2nd step, write the following codes to the blog/app/Http/Controllers/HomeController.php file:

public function insert()
	{
		$person = new Person();
		$person->name = "Hakan";
		$person->surname = "Tastan";
		$person->phone = "657382";
		$person->age = 99;
		return $person->save();
		
	}
	
	






