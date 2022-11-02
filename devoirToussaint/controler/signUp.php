<?php

session_start();
if((empty($_GET["name"])) || (empty($_GET["firstname"]))  || (empty($_GET["Email"])) || (empty($_GET["username"])) || (empty($_GET["password"])) || (empty($_GET["passwordC"]))){
    $_SESSION["message"] = "Tout les champs ne sont pas rempli";
    header('Location: ../view/signUp.php');
}else if($_GET["password"]!=$_GET["passwordC"]){
    $_SESSION["message"] = "Les deux mot de passe sont différent !";
    header('Location: ../view/signUp.php');
}

if(strlen($_GET["password"]) >= 8){
    if(preg_match_all("/[A-Z]/",$_GET["password"]) >= 1){
        if(preg_match_all("/[a-z]/",$_GET["password"]) >= 1){
            if(preg_match_all("/[0-9]/",$_GET["password"]) >= 1){
                if(preg_match_all("/[^A-Z,a-z]/",$_GET["password"]) >= 1){
                    echo "mot de pass ok";
                }else{
                    $_SESSION["message"] = "Mot de passe incorrect !";
                    header('Location: ../view/signUp.php');
                }
            }else{
                $_SESSION["message"] = "Mot de passe incorrect !";
                header('Location: ../view/signUp.php');
            }
        }else{
            $_SESSION["message"] = "Mot de passe incorrect !";
            header('Location: ../view/signUp.php');
        }
    }else{
        $_SESSION["message"] = "Mot de passe incorrect !";
        header('Location: ../view/signUp.php');
    }
}else if(strlen($_GET["password"]) < 8){
    $_SESSION["message"] = "Mot de passe trop court!";
    header('Location: ../view/signUp.php');
}



?>