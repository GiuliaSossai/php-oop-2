<?php

require_once __DIR__ . "/CreditCard.php";

class User {
    private $name;
    private $lastname;
    private $email;
    private $age;
    private $address;
    private $id;
    private $password;
    private $creditCard;
    private $discount = 0;

    function __construct($_name, $_lastname, $_email, $_password)
    {
        $this->name = $_name;
        $this->lastname = $_lastname;
        $this->email = $_email;
        $this->password = $_password;
    }

    //SETTER
    public function setName($_name){
        $this->name = $_name;
    }

    public function setLastname($_lastname){
        $this->lastname = $_lastname;
    }

    public function setEmail($_email){
        $this->email = $_email;
    }

    public function setAge($_age){
        if(is_int($_age) AND $_age > 18) {
            $this->age = $_age;
            return true;
        }
        return false;   
    }

    public function setDiscount($_discount){
        $this->discount = $_discount;
    }

    public function setCreditCard($_owner, $_code, $_cardId, $_expirationDate, $_cvv){
        try {
            $this->creditCard = new CreditCard($_owner, $_code, $_cardId, $_expirationDate, $_cvv);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }


    //GETTER
    public function getName(){
        return $this->name;
    }

    public function getLastname(){
        return $this->lastname;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getAge(){
        return $this->age;
    }

    public function getDiscount(){
        return $this->discount;
    }

    public function getCreditCard(){
        $this->creditCard = $_creditCard;
    }



    public function checkEmail(){
        if (filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            echo "il tuo indirizzo è valido";
        } else {
            echo "l'indirizzo email che hai inserito non è valido!!!";
        }
    }

    
    
}