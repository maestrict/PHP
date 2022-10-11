<form action="#" method="POST">

    <label>AGE</label></br>
    <input type="number" name="firstname">
    </br>
    <input type="submit" value="envoyer">

    <?php 
    
    $age = $_POST[firstname];
    $age = intval($age);
    echo $age;
    if($age >= 18){
        echo "Vous etes majeure";
    }elseif ($age > 0){
        echo "Vous etes mineure";
    }else{
        echo "ERROR";
    }
            
    
    ?>