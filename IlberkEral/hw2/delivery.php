<?php

class Customer {
    public $customerID;
    public $username;
    public $name;
    public $surname;
    public $phone;

    //Customer profilini set eder.
    public function setProfile($customerID, $username, $name, $surname, $phone)
    {
        $this->customerID = $customerID;
        $this->surname = $surname;
        $this->name = $name;
        $this->username = $username;
        $this->phone = $phone;
    }

    //Customer adresini set eder.
    public function setAddress(CustomerAddress $addressID, CustomerAddress $city, CustomerAddress $address)
    {
        $this->addressID = $addressID;
        $this->city = $city;
        $this->address = $address;
    }
}
class  CustomerAddress {
    public $addressID;
    public $city;
    public $address;

    //Customer adres gönderilir-alınır.
    public function getAddressID()
    {
        return $this-> $addressID;
    }
}

class Restaurant {
    public $restID;
    public $restAddress;
    public $restPhone;

    //Restaurant menü-ürün ekler.
    public function addMenu(RestMenu $menuID, RestMenu $menuItem, RestMenu $itemPrice)
    {
        $this->menuID = $menuID;
        $this->menuItem = $menuItem;
        $this->itemPrice = $itemPrice;
    }
}

class RestMenu {
    public $menuID;
    public $menuItem;
    public $itemPrice;

    //Restaurant menüsündeki item price
    public function getItemPrice()
    {
        return $this->itemPrice;
    }

    //Restaurant menüsündeki item
    public function getMenuItem()
    {
        return $this->menuItem;
    }

}

class Order {
    public $orderID;
    public $orderItem;
    public $totalPrice;
    public $paymentMethod;

    public function setTotalPrice($totalPrice)
    {
     $totalPrice = getItemPrice();
     return $this->totalPrice;
    }

    public function setOrderItem($oderItem)
    {
        $orderItem = getMenuItem();
        return $this->orderItem;
    }
}



