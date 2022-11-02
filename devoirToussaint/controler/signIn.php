<?php
session_start();
$_SESSION["user"] = strtolower($_GET["username"]);
$_SESSION["mdp"] = $_GET["password"];

$count = 0;

foreach($_SESSION["tabuser"] as $key => $value){
    if($key == $_SESSION["user"]){
        $count++;
        if($value == $_SESSION["mdp"] ){
            header('Location: ../view/index.php');
        }else{
            $_SESSION["message"] = "Mauvais mot de passe";
            header('Location: ../view/signIn.php');
        }
    }
}
if($count==0){
    $_SESSION["message"] = "Utilisateur inexistant";
    header('Location: ../view/signIn.php');
}
?>