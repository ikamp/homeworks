<?php

 /**
 * Class Food
 */
 class Food
 {

     private $foodName;
     private $foodPrice;
     private $foodAbout;

      /**
      * @return mixed
      */
     protected function getFoodName()
     {
         return $this->foodName;
     }

     /**
      * @param mixed $foodName
      */
     protected function setFoodName($foodName)
     {
         $this->foodName = $foodName;
     }

     /**
      * @return mixed
      */
     protected function getFoodPrice()
     {
         return $this->foodPrice;
     }

     /**
      * @param mixed $foodPrice
      */
     protected function setFoodPrice($foodPrice)
     {
         $this->foodPrice = $foodPrice;
     }

     /**
      * @return mixed
      */
     protected function getFoodAbout()
     {
         return $this->foodAbout;
     }

     /**
      * @param mixed $foodAbout
      */
     protected function setFoodAbout($foodAbout)
     {
         $this->foodAbout = $foodAbout;
     }





 }