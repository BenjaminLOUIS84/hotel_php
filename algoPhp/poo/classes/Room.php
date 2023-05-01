<?php

class Room{


    ////////////////////////////////////////////Attributes///////////////////////////////////////////

    private int $number;
    private int $price;
    private bool $wifi;
    private bool $etat;
////////////////////////////
    private array $reservations;
    private Hostel $hostel;//Pour lier le l'Hôtel aux chambres

//////////////////////////// Pour compter le nombrre de chambres déclarer une variable initiale à 0   
    public static $count = 0;

////////////////////////////////////////////Constructor///////////////////////////////////////////

    public function __construct(int $number, int $price, bool $wifi, bool $etat, Hostel $hostel){
        $this->number = $number;
        $this->price = $price;
        $this->wifi = $wifi;
        $this->etat = $etat;
        $this->hostel = $hostel; //L'Hôtel est initialisé

        $hostel->addRoom($this); //Fournir toute l'instance en cours des chambres

/////////////////////////////
        $this->reservations = [];

///////////////////////////// Pour ajouter une chambre à chaque création d'objet spécifique à cette classe
        Room::$count++;
        return true;
    }
////////////////////////////////////////////Getter///////////////////////////////////////////
    public function getNumber():int
    {
        return $this->number;
    }
    public function getPrice():int
    {
        return $this->price;
    }
    public function getWifi():bool
    {
        return $this->wifi;
    }
    public function getEtat():bool
    {
        return $this->etat;
    }
////////////////////////////////////////////Setter///////////////////////////////////////////
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }
    public function setWifi($wifi)
    {
        $this->wifi = $wifi;
        return $this;
    }
    public function setEtat($etat)
    {
        $this->etat = $etat;
        return $this;
    }
////////////////////////////////////////////Methods///////////////////////////////////////////
    public function addReservation(Reservation $reservations) {
        $this->reservations[] = $reservations;
    }

    public function afficherWifi(){/////////////////////Conditions pour matérialiser la disponibilité du Wifi et des chambres
        if($this->getWifi() == true){
            return "Avec";
        }else{
            return "Sans";
        }
    }

    public function afficherEtat(){
        if($this->getEtat() == true){
            return "Disponible";
        }else{
            return "Réservée";
        }  
    }
    public function getAllRooms(){//////////////////////Méthode pour afficher dans un tableau les caractéristiques de chaque chambres

        echo "<table border = 1>";

            return "<tr><th>CHAMBRE</th><td>" .$this->getNumber(). "</td><th>PRIX</th><td>" .$this->getPrice(). 
            " €</td><th>WIFI</th><td>" .$this->afficherWifi(). "</td><th>ETAT</th><td>" .$this->afficherEtat()."</td></tr>";

        echo "</table>";

     }
    
    public function __toString(){
        return $this->getNumber(); 
    }

}
?>
