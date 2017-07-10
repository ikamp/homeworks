<?php

class Basket extends FoodList{

    private $id;
    private $allFood=array();
    
    /**
     * @return array
     */
    public function getAllFood()
    {
        return $this->allFood;
    }

    /**
     * @param array $allFood
     */
    public function setAllFood($allFood)
    {
        $this->allFood = $allFood;
    }
    /**
     * @return mixed
     */
    public function getSelectedFoods()
    {
        return $this->selectedFoods;
    }

    /**
     * @param mixed $selectedFoods
     */
    public function setSelectedFoods($selectedFoods)
    {
        $this->selectedFoods = $selectedFoods;
    }
    private $selectedFoods;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
    public function basketConfrim()
    {

    }
}

?>