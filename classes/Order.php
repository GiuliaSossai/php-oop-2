<?php

class Order {
    private $id;
    private $userId;
    private $productList;
    private $totalAmount;
    private $shipping;

    function __construct($_id, $_userId)
    {
        $this->id = $_id;
        $this->userId = $_userId;
    }

    public function setId($_id){
        $this->id = $_id; 
    }

    public function setUserId($_userId){
        $this->userId = $_userId;
    }
}