<?php

class CreditCard {
    private $cardId;
    private $code;
    private $owner;
    private $expirationDate;
    private $cvv;

    function __construct($_owner, $_code, $_cardId, $_expirationDate, $_cvv)
    {
        $this->owner = $_owner;
        $this->code = $_code;
        $this->cardId = $this->checkCardId($_cardId);
        $this->cvv = $this->checkCvv($_cvv);
        $this->expirationDate = $this->checkExpirationDate($_expirationDate);
    }

    public function setExpirationDate($_expirationDate){
        $this->expirationDate = $_expirationDate;
    }

    public function getExpirationDate(){
        $this->expirationDate;
    }

    public function checkExpirationDate(){
        if($this->expirationDate <= date("YYYY")){
            echo "carta accettata";
        } else{
            echo "<strong>carta non valida, scaduta!!</strong>";
        }   
    }

    private function checkCvv($cvv){
        if(!is_int($cvv) || strlen($cvv) != 3){
            throw new Exception("il cvv della carta non è valido");
        }
        return $cvv;
    }

    private function checkCardId($cardId){
        //controllo se id è un numero e se è lungo 12
        //se non lo è, blocco l'inserimento del dato
        if(!is_int($cardId) || strlen($cardId) != 12){
            throw new Exception("il numero della carta non è valido");
        }
        return $cardId;
    }


}