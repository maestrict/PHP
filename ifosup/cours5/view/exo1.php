
<?php
session_start();
$tabFruit = ["pomme", "banane", "cerise"];
$_SESSION["tabfruit"] = $tabFruit;
?>

<form action="../controler/exo1.php" method="GET">

    <label>Fruit</label></br>
    <input type="text" name="fruit">
    </br>

    <input type="submit" value="envoyer">

<?php 

    if(isset($_SESSION)){
        echo "</br>";
        echo "Liste des fruits";
        echo "</br>";
        $count = 1;
        foreach($tabFruit as $value){
            echo "Fruit numéro " .$count. " : " .$value;
            echo "</br>";
            $count++;
        }
    }



?>