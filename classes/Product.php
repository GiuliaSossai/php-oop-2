<?php

class Product {
    private $name;
    private $category;
    private $type;
    private $price;
    private $discount;

    function __construct($_name, $_price)
    {
        $this->name = $_name;
        $this->price = $_price;
    }

    //SETTER
    public function setName($_name){
        $this->name = $_name;
    }

    public function setCategory($_category){
        $this->category = $_category;
    }

    public function setType($_type){
        $this->type = $_type;
    }

    public function setPrice($_price){
        $this->price = $_price;
    }

    public function setDiscount($_discount){
        $this->discount = $_discount;
    }
    
    //GETTER
    public function getName(){
        return $this->name;
    }
     
    public function getCategory(){
        return $this->category;
    }
    
    public function getPrice(){
        return $this->price;
    }

    public function getDiscount(){
        $this->discount;
    }

    public function getFinalPrice(){
        $finalPrice = $this->price - (($this->price * $this->discount) / 100);
        return number_format($finalPrice, 2, ",", ".");
    }
}