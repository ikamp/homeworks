<?php

class Order {
	private (Int)$orderId;
	private (Int)$menuId;
	private (Int)$customerId;
	private (Int)$quantity;

	function updateQuantity(): void
	{

	}

	function deleteItem(): void
	{

	}

	function getCustomerInfo()
	{
		return $this->customerId = new Customer();
	}

	function getMenu()
	{
		return $this->menuId = new Menu();
	}
}

?>