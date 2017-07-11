<?php
class Comment {
    /** @customerId string */
    private $customerId;
    /** @customerName string */
    private $customerName;
    /** @ratingStars Integer */
    private $ratingStars;
    /** @comment string */
    private $comment;
    private $date;
    
    private function customerId()
    {
        $this->$customerId = new Customer();
    }
    
    private function displayComments()
    {
        /** @return string */
        return $returnValue;
    }

    private function saveComments()
    {
        /** @return string */
        return $returnValue;
    }

}

?>
