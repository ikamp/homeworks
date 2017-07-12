<?php
//bir tane barista var,kahve mak�nas� var,bardak var,Barista d��ar�dan bardak al�yor,bunu kahve mak�nas�na vriyor,kahve mak�nas� kahve koyup baristaya geri d�n�yor.
//Barda��n i�inde kahvemiktar� tutan bir de�i�ken var.
//kahvemak�nas�da KahvYap(Bardak)var.Bardak kabul ediyor.0 ile 100 aras�nda rand bir say� olusturup.Barda��n i�ine kahve koyuyuor.
//Baristaya makemecoffe diyecegiz.
//encapsulation
//Barista > adapter pattern
/*
 * ClassName
 * methodName
 * variableName
*/
class Barista
{
    public function makeCoffee(Cup $cup, $machine)
    {
        return $machine->fill($cup);
    }
}
class Cup
{
    protected $coffeeAmount;
    public $name;
    public function getAmount()
    {
        return $this->coffeeAmount;
    }
    public function setAmount($amount)
    {
        $this->coffeeAmount = $amount;
    }
}
class TurkishCoffeeMachine extends CoffeeMachine
{
    public function fill(Cup $cup)
    {
        if($cup->getAmount() === 0)
        {
            throw new Exception('Empty cut not accepted.');
        }
        return parent::fill($cup);
    }
}
class CoffeeMachine extends Cup
{
    public function fill(Cup $cup)
    {
        $cup->setAmount(rand(0,100));
        return $cup;
    }
}
$barista = new Barista();
$machine = new TurkishCoffeeMachine();
$cup = new Cup();
$cup->name = "X";
var_dump($barista->makeCoffee($cup, $machine));
$cup1 = new Cup();
$cup1->name = "Y";
var_dump($barista->makeCoffee($cup1, $machine));
/*
$class = new StdClass();
$class->color = "red";
$class->size = 12.8;
function callMe($class)
{
    echo $class->color;
}
callMe($class);
*/
/* Example
const color = "color";
class Apple
{
    public function __construct()
    {
        echo "hello world";
    }
    public $color = "red";
    public function hello()
    {
        return $this->color . " is a color";
    }
}
$apple = new Apple();
//$apple->color = "green";
$apple->{color} = "green";
var_dump($apple->hello());*/
?>