<?php
class Comments {
	private (string)$customerId;
	private (string)$customerName;
	private (Int)$ratingStars;
	private (String)$comment;
	private $date = date("F j, Y, g:i a");
	
	function customerId()
	{
		$this->$customerId = new Customer();
	}
	
	function displayComments()
	{
		return (string)$returnValue;
	}

	function saveComments()
	{
		return (string)$returnValue;
	}

}

?>