<?php

class User {
    private $name;
    private $lastname;
    private $email;
    private $age;
    private $address;
    private $id;
    private $password;
    private $creditCard;

    function __construct($_name, $_lastname, $_email, $_password)
    {
        $this->name = $_name;
        $this->lastname = $_lastname;
        $this->email = $_email;
        $this->password = $_password;
    }
}