<?php
class Restaurant{
	public $name;
	public $location;
	public $contact;
	public function isOpen(){}
	public function getName(){ return $this->name; }
	public function getLocation(){ return $this->location; }
	public function getContact(){ return $this->contact; }
	public function setName($name){ $this->name = $name; }
	public function setLocation($location){ $this->location = $location; }
	public function setContact($contact){ $this->contact = $contact; }
	public function displayMenu(){}
	public function updateMenu(){}
	public function generateBill(){}
}
class User{
	protected $uid;
	protected $fullname;
	protected $contact;
	protected $creditCard;
	public function setContact(){}
	public function getContact(){}
	public function getUid(){}
	
	public function getFullname(){}
	
	public function setFullname(){}
	
	public function getCardNumber(){}
	public function searchRestaurant(){}
	
	public function selectRestaurant(){}
	
	public function newOrder(){}
	public function cancelOrder(){}
	
	public function trackOrder(){}
	
	public function payBill(){}
}
class Menu{
	public $menu;
	public function displayMenu(){}
	public function updateMenu(){}
	public function addItem(){}
	public function deleteItem(){}
	
}
class Item{
	public $itemId;
	public $name;
	public $price;
	public function setItemId(){}
	public function setName(){}
	public function setPrice(){}
	public function getItemId(){}
	
	public function getName(){}
	
	public function getPrice(){}
}
class Order{
	public $orderId;
	public function getStatus(){} // To track the order
	public function updateStatus(){} //restaurant admin can update it
	public function getOrderId(){}
	public function selectItem(){}
	
	public function removeItem(){}
	
	public function updateItem(){}
}
class SelectItem{
	public $itemId;
	public $quantity;
	public function getItem(){}
	public function setItem(){}
	public function getQuantity(){}
	public function setQuantity(){}
}
class Bill{
	public $billNum;
	public $orderId;
	public $amount;
	public function getBillNum(){}
	public function getTotalAmount(){}
	public function displayBill(){}
}
class Payment{
	public $pType;
	public $billNum;
	public function successfullyPaid(){}
	
}
