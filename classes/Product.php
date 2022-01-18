<?php

class Product {
    private $name;
    private $category;
    private $type;
    private $barCode;

    function __construct($_name, $_barCode)
    {
        $this->name = $_name;
        $this->barCode = $_barCode;
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

    public function setBarCode($_barCode){
        $this->barCode = $_barCode;
    }
    
    //GETTER
    public function getName(){
        return $this->name;
    }
     
    public function getCategory(){
        return $this->category;
    }
    
    public function getBarCode(){
        return $this->barCode;
    }
}