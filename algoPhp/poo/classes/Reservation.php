<?php

class Reservation{

////////////////////////////////////////////Attributes///////////////////////////////////////////
    
    private Customer $customer;
    private Room $room;
////////////////////////////
    private DateTime $dateStart;
    private DateTime $dateEnd;

//////////////////////////// Pour compter le nombrre de réservations déclarer une variable initiale à 0   
    public static $count = 0;

////////////////////////////////////////////Constructor///////////////////////////////////////////

    public function __construct(Customer $customer, Room $room, string $dateStart, string $dateEnd){
        $this->Customer = $customer;
        $this->Room = $room;
////////////////////////////        
        $this->dateStart = new DateTime($dateStart);
        $this->dateEnd = new DateTime($dateEnd);
////////////////////////////       
        $customer->addReservation($this);
        $room->addReservation($this);   

///////////////////////////// Pour ajouter une réservation à chaque création d'objet spécifique à cette classe
        Reservation::$count++;
        return true;
    }

////////////////////////////////////////////Getters//////////////////////////////////////////////
    public function getCustomer():Customer
    {
        return $this->customer;
    }
    public function getRoom():Room
    {
        return $this->room;
    }
    public function getDateStart():DateTime
    {
        return $this->dateStart;
    }
    public function getDateEnd():DateTime
    {
        return $this->dateEnd;
    }
    
////////////////////////////////////////////Setters/////////////////////////////////////////////
    public function setCustomer($customer)
    {
        $this->customer = $customer;
        return $this;
    }
    public function setRoom($room)
    {
        $this->room = $room;
        return $this;
    }
    public function setDateStart($dateStart)
    {
        $this->dateStart = $dateStart;
        return $this;
    }
    public function setDateEnd($dateEnd)
    {
        $this->dateEnd = $dateEnd;
        return $this;
    }
    
////////////////////////////////////////////Methods/////////////////////////////////////////////
    public function addRoom(Room $room) {
        $this->room[] = $room;
    }
    public function addCustomer(Customer $customer) {
        $this->customer[] = $customer;
    }

//////////////////////////////CALCULER LE NB DE JOURS ENTRE 2 DATES/////////////////////////////

    public function findNbDays(){
        $dateStart = $this->dateStart;
        $dateEnd = $this->dateEnd;
    
        $difference = date_diff($dateEnd, $dateStart);
        return $difference->d;
    }
   
//////////////////////////////CALCULER LE MONTANT TOTAL DU SEJOUR/////////////////////////////

    public function bill(){
        return $this->findNbDays() * $this->Room->getPrice();
    }

////////////////////////////////////////////////////////////////////////////////////////////////

    public function __toString(){
        return $this->Customer. " à réservé la chambre " . $this->Room.
        " du ".$this->getDateStart()->format("d/m/Y").
        " au " .$this->getDateEnd()->format("d/m/Y"). "<br>
         soit " .$this->findNbDays(). " jours<br>
         <h3>Montant total du séjour: " .$this->bill(). "€</h3>";
    }
    
}

?>