<?php

class Restaurant {
	private (Int)$menuId;
	private (Int)$commentId;
	private (string)$name;
	private (string)$district;
	private (float)$averageRate;
	private (float)$minPrice;

	function displayRestaurants()
	{
		return (string)$returnValue;
	}

	function getMenu()
	{
		$this->$menuId = new Menu();
		return (string)$this->$menuId;
	}

	function getComment()
	{
		return $this->$commentId = new Comments();
	}
}

?>