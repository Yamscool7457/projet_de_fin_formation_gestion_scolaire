<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "gestion_scolaire";
    //Créer une connexion
    $conn = $con = mysqli_connect($servername, $username, $password, $database);
    // Vérifier la connexion
    if (!$conn) {
    die("Vous n'êtes pas connecté à la base de donnée: " . mysqli_connect_error());
    }
    mysqli_select_db ($conn,$database) or die(mysqli_connect_error());


    /*connexion à la base de données
    $con = mysqli_connect("localhost","root","","gestion_scolaire");
    if(!$con){
    echo "Vous n'êtes pas connecté à la base de donnée";
    }*/
?>