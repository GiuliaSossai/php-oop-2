<?php

require_once __DIR__ . "/User.php";

class Gold extends User {
    private $goldCode;

    function __construct($_goldCode, $_name, $_lastname, $_email, $_password)
    {
        parent::__construct($_name, $_lastname, $_email, $_password);
        $this->goldCode = $_goldCode;
        $this->discount = 20; 
    }

    public function setDiscount($_discount){
        $this->discount += $_discount;
    }

    public function setGoldCode($_goldCode){
        $this->goldCode = $_goldCode; 
    }

    public function getGoldCode(){
        $this->goldCode; 
    }

    
}