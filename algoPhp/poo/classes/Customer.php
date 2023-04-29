<?php

class Customer{

////////////////////////////////////////////Attributes///////////////////////////////////////////

    private string $name;
    private string $firstName;
    private int $bill;
////////////////////////////
    private array $reservations;

////////////////////////////////////////////Constructor///////////////////////////////////////////

    public function __construct(string $name, string $firstName, int $bill){
        $this->name = $name;
        $this->firstName = $firstName;
        $this->bill = $bill;
////////////////////////////    
        $this->reservations = [];
    }
////////////////////////////////////////////Getter///////////////////////////////////////////
    public function getName():string
    {
        return $this->name;
    }
    public function getFirstName():string
    {
        return $this->firstName;
    }
    public function getBill():int
    {
        return $this->bill;
    }
    
////////////////////////////////////////////Setter///////////////////////////////////////////
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }
    public function setBill($bill)
    {
        $this->bill = $bill;
        return $this;
    }
    
////////////////////////////////////////////Methods///////////////////////////////////////////
    public function addReservation(Reservation $reservations) {
        $this->reservations[] = $reservations;
    }

    public function payBill(){
        return "Le montant du séjour de ". $this->getFirstName(). " " .$this->getName(). " s'élève à : " .$this->getBill(). "€";
    }

    public function __toString(){
        return $this->getFirstName(). " " .$this->getName(); 
    }


}

?>