<?php

trait Address {
  public $street;
  public $streetNumber;
  public $zipcode;
  public $town;
  public $country;
  
  public function getFullAddress(){
    return "$this->street, $this->streetNumber, $this->zipcode, $this->town, $this->country";
  }

}
