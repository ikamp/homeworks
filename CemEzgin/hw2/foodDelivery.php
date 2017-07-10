<?php
Class Users{
    private $id;
    private $name;
    private $email;
    private $pw;
    private $address;
    private $district;

    /**
     * @return mixed
     */
    public function getDistrict()
    {
        return $this->district;
    }

    /**
     * @param mixed $district
     */
    public function setDistrict($district)
    {
        $this->district = $district;
    }

    /**
     * @return mixed
     */
    public function getPw()
    {
        return $this->pw;
    }

    /**
     * @param mixed $pw
     */
    public function setPw($pw)
    {
        $this->pw = $pw;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

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


}
Class Restaurant{
    private $id;
    private $name;
    private $city;
    private $district;
    private $rate;

    public function getRestId(){
        return $this->id;
    }
    public function setRestId($id){
        $this->rest_id=$id;
    }
    public function getRestName(){
        return $this->name;
    }
    public function setRestName($name){
        $this->rest_name=$name;
    }
    public function getRestCity(){
        return $this->city;
    }
    public function setRestCity($city){
        $this->rest_city=$city;
    }
    public function getDistrict(){
        return $this->rdistrict;
    }
    public function setDistrict($district){
        $this->rest_district=$district;
    }
    public function getRate(){
        return $this->rate;
    }
    public function setRate($rate){
        $this->rate=$rate;
    }
}
Class  FoodList{
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


    public function foodSelect(){
        $selectedFood = array($this->id,$this->foodName,$this->price);
        return $selectedFood;
    }

}
Class Basket extends FoodList{
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
    public function basketConfrim(){

    }

}
Class OrderDetail{
    private $totalprice;
    private $paymentMethod;
    private $promoCode;

    /**
     * @return mixed
     */
    public function getPromoCode()
    {
        return $this->promoCode;
    }

    /**
     * @param mixed $promoCode
     */
    public function setPromoCode($promoCode)
    {
        $this->promoCode = $promoCode;
    }

    /**
     * @return mixed
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    /**
     * @param mixed $paymentMethod
     */
    public function setPaymentMethod($paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;
    }

    /**
     * @return mixed
     */
    public function getTotalprice()
    {
        return $this->totalprice;
    }

    /**
     * @param mixed $totalprice
     */
    public function setTotalprice($totalprice)
    {
        $this->totalprice = $totalprice;
    }

    public function giveOrder(){

    }
}