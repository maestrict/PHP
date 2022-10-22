<?php 
    session_start();
    include ("../../correctif/CorrectionExosTableaux.php");
    $_SESSION["nom"] = $_GET["name"];
    $_SESSION["prenom"] = $_GET["firstname"];
    //echo $_SESSION["nom"];
    header('Location: ../view/exo2.php');

?>