<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta charset="utf-8">  <link rel="stylesheet" href="style.css">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXERCICE CINEMA</title>
</head>

<body>

<h1>HOTEL</h1>
<p>A partir de ces captures d’écran, <br>
réaliser l’application en POO permettant la gestion de réservations de chambres par des clients dans différents hôtels:</p>
<h2>RESULTAT</h2>

<?php
    /////////////////////////////////////////////////////LINK PAGES//////////////////////////////////////////////////////////
    spl_autoload_register(function ($class_name){
        require 'classes/'. $class_name .'.php';
    });
    /////////////////////////////////////////////////////OBJECTS/////////////////////////////////////////////////////////////  

    $hostel1 = new Hostel("Hilton****Strasbourg","10 route de la Gare","67000","STRASBOURG");
    ///////////////////////////////////////ROOMS
    $room1 = new Room(1, 120, false, true);
    $room2 = new Room(2, 120, false, true);
    $room3 = new Room(3, 120, false, false);
    $room4 = new Room(4, 120, false, false);
    $room16 = new Room(16, 300, true, true);
    $room17 = new Room(17, 300, true, false);
    $room18 = new Room(18, 300, true, true);
    $room19 = new Room(19, 300, true, true);

    ///////////////////////////////////////CUSTOMERS
    $customer1 = new Customer("GIBELLO","Virgile", 300);
    $customer2 = new Customer("MURMANN", "Mickaël",2400);

    ///////////////////////////////////////RESERVATIONS
    $reservation1 = new Reservation($customer1, $room17, "2021-01-01", "2021-01-02");
    $reservation2 = new Reservation($customer2, $room3, "2021-03-11", "2021-03-15");
    $reservation3 = new Reservation($customer2, $room4, "2021-04-01", "2021-04-17");

    /////////////////////////////////////////////////////DISPLAY/////////////////////////////////////////////////////////////
    echo $hostel1->coordonnees();
    echo "<br>";
    echo "<br>";
    echo $hostel1->totalRoom();
    echo $hostel1->totalResa();
    echo $hostel1->roomRest();
    echo "<br>";
    
    ///////////////////////////////////////   
    echo "<h3>RESERVATIONS</h3>";
    echo "<br>";
    echo $reservation1;
    echo $customer1->payBill();
    echo "<br>";
    echo "*********************************************************************";
    echo "<br>";
    echo $reservation2;
    echo $reservation3;
    echo $customer2->payBill();
    echo "<br>";
    echo "_____________________________________________________________________";
    
    ///////////////////////////////////////
    echo "<br>";
    echo $hostel1->statut();
    echo "<br>";
    echo $room1->getInfos();
    echo "<br>";
    echo $room2->getInfos();
    echo "<br>";
    echo $room3->getInfos();
    echo "<br>";
    echo $room4->getInfos();
    echo "<br>";
    echo $room16->getInfos();
    echo "<br>";
    echo $room17->getInfos();
    echo "<br>";
    echo $room18->getInfos();
    echo "<br>";
    echo $room19->getInfos();
    echo "<br>";

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
?>

</body>
</html>