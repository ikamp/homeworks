<?php



interface DBConnection
{
    public function connect();
}

abstract class Connection  implements DBConnection
{
    public function connect()
    {

    }
}

class Login
{
    public function checkLogin(Customer $customer)
    {

    }
}

class UpdatePassword
{
    public function updatePassword(Customer $customer)
    {

    }
}

class Customer
{
    private $email;
    private $name;
    private $surname;
    private $county;
    private $orders;

    public function getEmail()
    {
        return $this->email;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getOrders()
    {
        return $this->orders;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function getCounty()
    {
        return $this->county;
    }

    public function setCounty($county)
    {
        $this->county = $county;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setOrders($orders)
    {
        $this->orders = $orders;
    }

    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

    public function register()
    {

    }

    public function update()
    {

    }

}

class County
{

    private $name;
    private $licensePlate;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getLicensePlate()
    {
        return $this->licensePlate;
    }

    public function setLicensePlate($licensePlate)
    {
        $this->licensePlate = $licensePlate;
    }

    public function addAdress()
    {

    }
}

class Adresses
{
   private $adress;

   public function getAdress()
    {
        return $this->adress;
    }

    public function setAdress($adress)
    {
        $this->adress = $adress;
    }

}

class User
{
    private $username;
    private $password;

    public function getPassword()
    {
        return $this->password;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

}
class Restaurants
{
    private $workinghours;
    private $deliverytime;
    private $county;
    private $comments;
    private $products;

    public function setCounty($county)
    {
        $this->county = $county;
    }

    public function getCounty()
    {
        return $this->county;
    }

    public function getComments()
    {
        return $this->comments;
    }

    public function getDeliverytime()
    {
        return $this->deliverytime;
    }

    public function getProducts()
    {
        return $this->products;
    }

    public function getWorkinghours()
    {
        return $this->workinghours;
    }

    public function setComments($comments)
    {
        $this->comments = $comments;
    }

    public function setDeliverytime($deliverytime)
    {
        $this->deliverytime = $deliverytime;
    }

    public function setProducts($products)
    {
        $this->products = $products;
    }

    public function setWorkinghours($workinghours)
    {
        $this->workinghours = $workinghours;
    }

    public function register()
    {

    }

    public function update()
    {

    }

    public function addComment()
    {

    }

}

class Comment
{
    private $username;
    private $content;

    public function getComment()
    {

    }

}

class Product
{
    private $productname;
    private $price;
    private $stock;

    public function addProduct()
    {

    }

    public function updateStock()
    {

    }

    public function updatePrice()
    {
        
    }
}

class Basket
{
    private $customer;
    private $product;
    protected $date;
    private $order;

    public function checkBasket()
    {

    }

    public function viewBasketDetails()
    {

    }

    public function totalPrice()
    {

    }

    public function addOrder()
    {

    }
}

class Order
{
    private $ordername;
    private $date;
    private $customername;
    private $productname;
    private $totalprice;

    public function createOrder(Basket $basket)
    {

    }

    public function createPayment()
    {

    }
}

class Payment
{
    private $paymetid;
    private $ordername;
    private $paymentdate;

    public function pay()
    {

    }

}

Route::get('/', function () {

});









