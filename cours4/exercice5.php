<form action="#" method="POST">

    <label>Prénom</label></br>
    <input type="text" name="firstname">
    </br>

    <label>Nom</label></br>
    <input type="text" name="name">
    </br>
    <label>Age</label></br>
    <input type="number" name="age">
    </br>
    <label>Sexe : </label></br>
    <input type="radio" id="contactChoice1"
     name="sexe" value="femme">
    <label for="contactChoice1">Femme</label>

    <input type="radio" id="contactChoice2"
     name="sexe" value="homme">
    <label for="contactChoice2">Homme</label>
    </br>
    <select name="etat">
   <nom>images-type</nom>
   <libellé>support actuel de vos images</libellé>
   <option valeur="marie">marié</option>
   <option valeur="celibataire">célibataire</option>
   <option valeur="veuf">veuf</option>
</select>


    </br>
    <input type="submit" value="envoyer">
    </br>
    <input type="reset" value="reset">


    <?php 
    $nom = $_POST['name'];
    $prenom = $_POST['firstname'];
    $age = $_POST['age'];
    $sexe = $_POST['sexe'];
    $etat = $_POST['etat'];

    echo "Vous vous applez " .$nom. " " .$prenom. " , vous avez " .$age. " ans , vous êtes un(e) " .$sexe. " " .$etat;
    
    ?>