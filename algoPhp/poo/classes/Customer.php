<?php

class Customer{

////////////////////////////////////////////Attributes///////////////////////////////////////////

    private string $name;
    private string $firstName;
    
////////////////////////////
    private array $reservations;

////////////////////////////////////////////Constructor///////////////////////////////////////////

    public function __construct(string $name, string $firstName){
        $this->name = $name;
        $this->firstName = $firstName;
        
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
    
////////////////////////////////////////////Methods///////////////////////////////////////////
    public function addReservation(Reservation $reservations) {
        $this->reservations[] = $reservations;
    }

    public function __toString(){
        return $this->getFirstName(). " " .$this->getName(); 
    }


}

?>