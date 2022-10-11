<?php

echo "<h1>exercice1</h1>";
echo "</br>";
$var1 = 8;
$var2 = 7;
$var3 = 3;
$var4 = 6;
$var5 = 8;
echo $result = ($var1 + $var2 + $var3 + $var4 + $var5)/5;



echo "</br>";
echo "<h1>exercice2</h1>";
echo "</br>";

$exvar1 = 2;
$exvar2 = 7;
echo "Variable 1" . $exvar1 . "  Variables 2" . $exvar2;
echo "</br>";

echo "<h1>exercice3</h1>";
echo "</br>";

for( $i=1; $i<=50; $i++){
    if($i%2==0){
        echo $i;
        echo "   ";
    }
};
echo "</br>";

echo "<h1>exercice4</h1>";
echo "</br>";

for( $i=1; $i<=60; $i++){
    if($i%3==0){
        echo $i;
        echo "   ";
    }
};
echo "</br>";

echo "<h1>exercice5</h1>";
echo "</br>";

for( $i=1; $i<=50; $i++){
    if($i%5==0){
        echo $i;
        echo "   ";
    }
};
echo "</br>";

echo "<h1>exercice6</h1>";
echo "</br>";

$i = 1300;
while ($i <= 1399):
    echo $i ."  ";
    $i++;
endwhile;

echo "</br>";

echo "<h1>exercice7</h1>";
echo "</br>";

$age = 4;
if($age >= 18){
    echo "La personne est majeur car elle a " . $age . " ans";
}else{
    echo "La personne est mineure car elle a " . $age . " ans";
};


echo "</br>";

echo "<h1>exercice8</h1>";
echo "</br>";

$sexe = "homMe";
$sexe = strtolower($sexe);
if($sexe == "femme"){
    echo "Sylvain se sent " . $sexe;
}elseif($sexe =="homme"){
    echo "Sylvie se sent " . $sexe;
}else{
    echo "Apprend à écrire tocart";
};


echo "</br>";

echo "<h1>exercice9</h1>";
echo "</br>";

$heure = 12;

if( $heure >= 0 && $heure <= 8 ){
    echo "c'est la nuit";
}elseif($heure > 8 && $heure < 12){
    echo "c'est le matin";
}elseif($heure >= 12 && $heure <= 18) {
    echo "c'est l'aprem";
}elseif($heure > 18 && $heure <= 24){
    echo "c'est le soir";
}else{
    echo "tu sais pas lire l'heure";
}


?>
