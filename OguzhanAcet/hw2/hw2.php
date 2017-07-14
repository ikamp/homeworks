<?php

  class Customer {
    protected $userName;
    protected $customerName;
    protected $address;
    private $email;
    private $password;

  public function setPassword($password)
    $this->password = $password
  }

  public function getPassword() {
    return $this->password;
  }

  public function setEmail($email)
    $this->email = $email
  }

    public function getEmail() {
    return $this->email;
  }

  public function setUserName($name) {
    $this->userName = $name;
  }

  public function getUserName() {
    return $this->userName;
  }

  public function setCostumerName($name) {
    $this->costumerName = $name;
  }

  public function getCostumerName() {
    return $this->costumerName;
  }

  public function register () {
  }

  public function login () {
  }


  class Restaurant {
    protected $id;
    protected $name;
    protected $address;
    protected $phone;
    protected $point;
  }

  public function setId($id)
    $this->id = $id
  }

  public function getId() {
    return $this->id;
  }

  public function setName($name)
    $this->name = $name
  }

  public function getName() {
    return $this->name;
  }

  public function setAddress($address)
    $this->address = $address
  }

  public function getAddress() {
    return $this->address;
  }

  public function setPhone($phone)
    $this->phone = $phone
  }

  public function getPhone() {
    return $this->phone;
  }

  public function setPoint($point)
    $this->point = $point
  }

  public function getPoint() {
    return $this->point;
  }


  class Card {
    protected $userId;
    protected $orderId;
    protected $price;
  }

  public function setUserId($userId)
    $this->userId = $userId
  }

  public function getUserId() {
    return $this->userId;
  }

  public function setOrderId($orderId)
    $this->orderId = $orderId
  }

  public function getOrderId() {
    return $this->orderId;
  }

  public function setPrice($price)
    $this->price = $price
  }

  public function getPrice() {
    return $this->price;
  }


  class Menu {
    protected $menuId;
    protected $name;
    protected $price;
  }

  public function setMenuId($menuId)
    $this->menuId = $menuId
  }

  public function getMenuId() {
    return $this->menuId;
  }

  public function setName($name)
    $this->name = $name
  }

  public function getName() {
    return $this->name;
  }

  public function setPrice($price)
    $this->price = $price
  }

  public function getPrice() {
    return $this->price;
  }

  class Product {
    protected $id;
  }

  public function setId($id)
    $this->id = $id
  }

  public function getId() {
    return $this->id;
  }

  public function addMenu () {
  }


  class Admin {

  }
