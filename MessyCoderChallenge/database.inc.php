<?php


    // dit is de GLOBAL Scope van ons geheugenbeheer //
    // Dit moet nog opgelost worden, dit is een security issue //
    $host = "localhost";
    $username = "root"; // default is root
    $password = "root"; //default is leeg of root
    $database = "db_awfulportfolio"; //de naam van de database die je aanmaakt

    // Maak verbinding met de database
    $conn = new mysqli($host, $username, $password, $database); 

    // Controleer de verbinding
    if ($conn->connect_error) { 
        die("Verbinding mislukt: " . $conn->connect_error); 
    } else {
        // echo "Verbinding geslaagd!";
    }
?>

                 
