<?php

class Customer {
	private (Int)$customerId;
	private (string)$name;
	private (string)$surName;
	private (string)$email;
	private (string)$password;
	private (string)$city;
	private $birthday = date("F j, Y, g:i a");

	function getRestaurants()
	{
		return (string)$returnValue;
	}

	function getProfileInfo()
	{
		return (string)$returnValue;
	}

	function getOrder()
	{
		return (string)$returnValue;
	}

	function getAddresses()
	{
		return (string)$returnValue;
	}

	function logOut(): void
	{

	}

}

?>