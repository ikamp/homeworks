<?php

class Customer {
	private (Int)$customerId;
	private (string)$name;
	private (string)$surName;
	private (string)$email;
	private (string)$password;
	private (string)$city;
	private $birthday = date("F j, Y, g:i a");

	function getRestaurants() {
		return (string)$returnValue;
	}
	function getProfileInfo() {
		return (string)$returnValue;
	}
	function getOrder() {
		return (string)$returnValue;
	}
	function getAddresses() {
		return (string)$returnValue;
	}
	function logOut(): void {}

}

class Restaurant {
	private (Int)$menuId;
	private (Int)$commentId;
	private (string)$name;
	private (string)$district;
	private (float)$averageRate;
	private (float)$minPrice;

	function displayRestaurants() {
		return (string)$returnValue;
	}
	function getMenu() {
		$this->$menuId = new Menu();
		return (string)$this->$menuId;
	}
	function getComment() {
		return $this->$commentId = new Comments();
	}
}

class Comments {
	private (string)$customerId;
	private (string)$customerName;
	private (Int)$ratingStars;
	private (String)$comment;
	private $date = date("F j, Y, g:i a");
	function customerId() {
		$this->$customerId = new Customer();
	}
	function displayComments() {
		return (string)$returnValue;
	}
	function saveComments() {
		return (string)$returnValue;
	}

}

class Menu {
	private (Int)$amount;
	private (string)$foodTitle;
	private (string)$foodDetail;
	private (string)$foodType;
	private (string)$img;
	private (float)$price;

	function displayMenus() {
		return (string)$returnValue;
	}
	function editAmount(): void {}
	function addOrder((string)$parameter): void {}
	function addFood((string)$parameter): void {}	
}

class Order {
	private (Int)$orderId;
	private (Int)$menuId;
	private (Int)$customerId;
	private (Int)$quantity;
	function updateQuantity(): void {}
	function deleteItem(): void {}
	function getCustomerInfo() {
		return $this->customerId = new Customer();
	}
	function getMenu() {
		return $this->menuId = new Menu();
	}
	
}

class Payment {
	private (Int)$orderId;
	private (string)$paymentType;

	function selectAddress(): void {}
	function deleteItem(): void {}
	function updateQuantity(): void {}
	function paymentType((string)$parameter): void {}
	function confirm(): void {}
	function getOrderId() {
		return $this->$orderId = new Order();
	}
}

class Address extends Customer{
	private (string)$customerId;
	private (string)$addressTitle;
	private (string)$addressDetail;
	private (string)$customerTelNumber;

	function displayAddresses() {
		return (string)$returnValue;
	}
	function editAddress() {
		return (string)$returnValue;
	}
	function addAddress(): void {}

}

?>