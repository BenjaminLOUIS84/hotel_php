<?php

class Hostel{

////////////////////////////////////////////Attributes///////////////////////////////////////////

    private string $name;
    private string $adress;
    private string $cp;
    private string $city;

    private array $room;

////////////////////////////////////////////Constructor///////////////////////////////////////////

    public function __construct(string $name, string $adress, string $cp, string $city){
        $this->name = $name;
        $this->adress = $adress;
        $this->cp = $cp;
        $this->city = $city;

        $this->room = [];
    }
    
////////////////////////////////////////////Getter///////////////////////////////////////////
    public function getName():string
    {
        return $this->name;
    }
    public function getAdress():string
    {
        return $this->adress;
    }
    public function getCp():string
    {
        return $this->cp;
    }
    public function getCity():string
    {
        return $this->city;
    }
////////////////////////////////////////////Setter///////////////////////////////////////////
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    public function setAdress($adress)
    {
        $this->adress = $adress;
        return $this;
    }
    public function setCp($cp)
    {
        $this->cp = $cp;
        return $this;
    }
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }
////////////////////////////////////////////Methods///////////////////////////////////////////
    public function addRoom(Room $room) {
        $this->room[] = $room;
    }

    public function coordonnees(){////////////////////////////////////////////Méthode pour inscrire le nom et les coordonnées de l'hôtel
        return "<h3>".$this->getName()."</h3>"
        .$this->getAdress(). " " .$this->getCp(). " " .$this->getCity();
    }

    public function displayRooms(){////////////////////////////////////////////////Méthode pour afficher toutes les chambres de l'hôtel
     
        $room = "Statuts des chambres de " .$this->getName(). " :<br>";
    
        foreach ($this->room as $count){
          $room = $room. $count->getAllRooms();               
        }
        return $room;  
    }

    public function totalRoom(){/////////////////////////////////////////////Méthode pour comptabiliser le nombre de chambres
        return "Nombre de chambres: ".Room::$count."<br>";
    }
    public function totalResa(){/////////////////////////////////////////////Méthode pour comptabiliser le nombre de chambres réservées
        return "Nombre de chambres réservées: ".Reservation::$count."<br>";
    }
    public function roomRest(){//////////////////////////////////////////////Méthode pour comptabiliser le nombre de chambres restante
        return "Nombre de chambres restantes: ".(Room::$count - Reservation::$count)."<br>";
    }

}

?>