<?php

session_start();
if(isset($_SESSION["message"])){
    echo $_SESSION["message"]; 
}

?>

<form action="../controler/signUp.php" method="GET">

    <label>Nom</label></br>
    <input type="text" name="name">
    </br>
    <label>Prénom</label></br>
    <input type="text" name="firstname">
    </br>
    <label>Date de naissance</label></br>
    <input type="date" name="BirthDate">
    </br>
    <label>Email</label></br>
    <input type="text" name="Email">
    </br>
    <label>UserName</label></br>
    <input type="text" name="username">
    </br>

    <label>Password</label></br>
    <input type="password" name="password">
    </br>
    <label>Confirm Password</label></br>
    <input type="password" name="passwordC">
    </br>
    <input type="submit" value="envoyer">
    </br>
    <input type="reset" value="reset">
