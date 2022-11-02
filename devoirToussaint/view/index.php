<h1>Bienvenue sur mon site</h1>

<?php
session_start();
if(!isset($_SESSION["tabuser"])){
    $_SESSION["tabuser"] = ["maes"=>"password",
                            "pauline"=>"Password",
                             "etienne"=>"P@ssw0rd"
                            ];
}

//if(isset($_SESSION["useree"])){
    echo "Bonjour " .$_SESSION["user"]; 
//}else {
    echo "<a href='signIn.php'>   SignIn   </a>";
    echo "<a href='signUp.php'>   SignUP   </a>";
//}

?>

