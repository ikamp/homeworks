<?php



/*

|--------------------------------------------------------------------------

| Web Routes

|--------------------------------------------------------------------------

|

| Here is where you can register web routes for your application. These

| routes are loaded by the RouteServiceProvider within a group which

| contains the "web" middleware group. Now create something great!

|

*/



class Tire {

	protected $brand = ''; //	public $brand='';

	protected $size = 15; // public $size=15;



	public function setBrand($name)

	{

		$this->brand = $name;

	}



	public function getBrand()

	{

		return $this->brand;

	}

}





interface VehichleInterface{

	public function addTire(Tire $tire);

	public function checkSpeed();



}







abstract class Vehicle implements VehichleInterface {

	protected $tires=[];

	public function addTire(Tire $tire)

	{

		$this-> tires[]=$tire;

	}



	public function tireList()

	{

		return $this->tires;

	}



	public function checkSpeed()

	{

		return true;

	}

}



class Motorcycle extends Vehicle {

	public function addTire(Tire $tire)

	{

		if (count($this->tireList()) >= 2){

			throw new Exception('Cannot have more than 2 tires.');

		}

		parent::addTire($tire);

	}

}





class Car extends Vehicle {

	public function addTire(Tire $tire)

	{

		if ($tire->getBrand()==='lassa'){

			throw new Exception ("Cannot have a lassa tire");

		}

		if (count($this->tireList())>=4){

			throw new Exception ("Cannot have more than 4 tire");	

		}

		parent::addTire($tire);

	}

}





class Van extends Car {



}





class ParkingLot{

	public function acceptVehicle(Vehicle $vehicle)

	{

		if ($vehicle instanceof Van ) {

			throw new Exception('No van plz!');

		}

		echo " I accept you my friend ";

	}

}







Route::get('/', function () {

	$tire = new Tire();

	$tire->setBrand('lassa');

	$motorcycle = new Motorcycle();

	$motorcycle->addTire($tire);

	$motorcycle->addTire($tire);



	$tire1=new Tire();

	$car = new Car();

	$car->addTire($tire1);

	$car->addTire($tire1);

	$car->addTire($tire1);

	$car->addTire($tire1);



	$van = new Van();



	$parkingLot = new ParkingLot();

	$parkingLot->acceptVehicle($motorcycle);

	$parkingLot->acceptVehicle($car);

	$parkingLot->acceptVehicle($van);

	print_r($motorcycle);

	print_r($car);

	// var_dump($motorcycle);

//   return view('welcome');

//	return date('l jS \of F Y h:i:s A');

});

