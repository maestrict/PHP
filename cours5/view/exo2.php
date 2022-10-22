<?php

session_start();

?>

<form action="../controler/exo2.php" method="GET">

    <label>Prénom</label></br>
    <input type="text" name="firstname">
    </br>

    <label>Nom</label></br>
    <input type="text" name="name">
    </br>
    <input type="submit" value="envoyer">
    </br>
    <input type="reset" value="reset">


    <?php 

    if(isset($_SESSION["nom"])){
        echo "vous vous appelez " . $_SESSION["nom"] . " " . $_SESSION["prenom"];
    }
    
    //echo "Vous vous appelez "$_SESSION["prenom"]  . " " $_SESSION["nom"]; 
    
    ?>