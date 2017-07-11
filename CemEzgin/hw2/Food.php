<?php
class Food {  
    private $id;
    private $foodName;
    private $price;

    /**
     * @return mixed
     */
    public function getListId()
    {
        return $this->id;
    }

    /**
     * @param mixed $lid
     */
    public function setListId($id)
    {
        $this->list_id = $id;
    }

    /**
     * @return mixed
     */
    public function getFoodName()
    {
        return $this->foodName;
    }

    /**
     * @param mixed $foodName
     */
    public function setFoodName($foodName)
    {
        $this->foodName = $foodName;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function foodSelect()
    {
        
    }
}
?>