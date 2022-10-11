<form action="#" method="POST">

    <label>Fruit</label></br>
    <input type="text" name="fruit">
    </br>

    <input type="submit" value="envoyer">

    <?php 
    
    $tabFruit = ["pomme", "banane", "cerise"];
    $newFruit = $_POST["fruit"];
    echo $newFruit;
    function ajouteAuTableau($tab,$valeur){
        array_push($tab,$valeur);
        return $tab;
    
    }
    $tabFruit = ajouteAuTableau($tabFruit,$newFruit);
    echo "</br>";
    echo "Liste des fruits";
    echo "</br>";
    $count = 1;
    foreach($tabFruit as $value){
        echo "Fruit numéro " .$count. " : " .$value;
        echo "</br>";
        $count++;
    }
    
    
    ?>