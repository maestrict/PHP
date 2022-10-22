<form action="#" method="POST">

    <label>AGE</label></br>
    <input type="number" name="firstname">
    </br>
    <input type="submit" value="envoyer">

    <?php 
    
    $age = $_POST[firstname];
    $age = intval($age);
    echo "</br>";
    echo $age;
    echo "</br>";
    if($age >= 18){
        echo "Vous etes majeur";
    }elseif ($age > 0){
        echo "Vous etes mineur";
    }else{
        echo "ERROR";
    }
             
    ?>