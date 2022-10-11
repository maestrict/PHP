<form action="#" method="POST">

    <label>Prénom</label></br>
    <input type="text" name="firstname">
    </br>

    <label>Nom</label></br>
    <input type="text" name="name">
    </br>
    <input type="submit" value="envoyer">
    </br>
    <input type="reset" value="reset">


    <?php 
    
    $nom = $_POST[name];
    $prenom = $_POST[firstname];
    
    echo "Vous vous appelez ".$prenom  . " " .$nom; 
    
    ?>