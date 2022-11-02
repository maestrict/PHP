<?php

session_start();
if(isset($_SESSION["message"])){
    echo $_SESSION["message"]; 
}

?>

<form action="../controler/signIn.php" method="GET">

    <label>UserName</label></br>
    <input type="text" name="username">
    </br>

    <label>Password</label></br>
    <input type="password" name="password">
    </br>
    <input type="submit" value="envoyer">
    </br>
    <input type="reset" value="reset">
