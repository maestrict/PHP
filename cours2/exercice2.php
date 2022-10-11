<?php


function moyenne($nb1, $nb2, $nb3){
    $resultat = ($nb1 + $nb2 + $nb3)/3;
    return $resultat;
}

$resultat = moyenne(222,4,4);
echo $resultat;

echo "</br>";
echo "<h2>Exercice1</h2>";
echo "</br>";

function helloWorld(){
    return "hello world!";
}
echo helloWorld();

echo "</br>";
echo "<h2>Exercice3</h2>";
echo "</br>";

function jeRetourneMonArgument($arg){
    return $arg;
}
echo jeRetourneMonArgument("ABC");

echo "</br>";
echo "<h2>Exercice3</h2>";
echo "</br>";

function concatenation($arg1, $arg2){
    return $arg1 . " " . $arg2;
}
echo concatenation("arnaud", "Maes");

echo "</br>";
echo "<h2>Exercice4</h2>";
echo "</br>";

function multiplacation($nbr1,$nbr2){
    return $nbr1 * $nbr2;
}
echo multiplacation(2,5);

echo "</br>";
echo "<h2>Exercice5</h2>";
echo "</br>";

function estIlMajeur($age){
    if($age >= 18){
        return true;
    }else{
        return false;
    }
}
$resultat =  estIlMajeur(9);
var_dump($resultat);

echo "</br>";
echo "<h2>Exercice6</h2>";
echo "</br>";


function plusGrand($nombre1, $nombre2){
    if($nombre1>$nombre2){
        return $nombre1;
    }elseif($nombre1<$nombre2){
        return $nombre2;
    }
}
echo plusGrand(20,5);

echo "</br>";
echo "<h2>Exercice7</h2>";
echo "</br>";

function plusPetit($nr1, $nr2,$nr3){
    if($nr1<$nr2 && $nr1<$nr3 ){
        return $nr1;
    }elseif($nr2<$nr1 && $nr2 <$nr3){
        return $nr2;
    }elseif($nr3<$nr2 && $nr3 <$nr1){
        return $nr3;
    }else{
        return "Error";
    }
}

echo plusPetit(3,4,2);

echo "</br>";
echo "<h2>Exercice8</h2>";
echo "</br>";

function plusGrandTab($tab){
    $a=0;

    if(empty($tab)){
        return false;
    }else{
        //echo count($tab);
        for($i=0;$i<=count($tab);$i++){
            //echo "test";m
            if($tab[$i]>$a){
                $a = $tab[$i];
              //  echo "test";
            }
        
        }
        return $a;
    }
}
$tab = [1,3,2,5];
var_dump(plusGrandTab($tab));


?>