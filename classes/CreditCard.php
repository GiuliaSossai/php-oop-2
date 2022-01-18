<?php

class CreditCard {
    private $cardId;
    private $code;
    private $owner;
    private $expirationDate;
    private $type;

    function __construct($_owner, $_code)
    {
        $this->owner = $_owner;
        $this->code = $_code;
    }

    public function setExpirationDate($_expirationDate){
        $this->expirationDate = $_expirationDate;
    }

    public function getExpirationDate(){
        $this->expirationDate;
    }

    public function checkExpirationDate(){
        if($this->expirationDate >= date("YYYY")){
            echo "carta accettata";
        } else{
            echo "<strong>carta non valida, scaduta!!</strong>";
        }   
    }
}