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

$tableau4 =[
    "cours" => "5WID4",
    "local" => [
                "numero" => 106,
                "heure" => "18th",
                "nbPlace" => 25,
                "typeCours" =>"info" ,
                "etudiants" =>[
                                "etudiant1" => [
                                    "nom" => "Verheyen",
                                    "prenom" => "Raphael",
                                    "age" => 31
                                ],
                                "etudiant2" =>[
                                    "nom" => "Delbar",
                                    "prenom" => "Benjamin",
                                    "age" => 31
                                ],
                                "etudiant3" =>[
                                    "nom" => "Lacroix",
                                    "prenom" => "Alexandre",
                                    "age" => 31
                                ],
                                "etudiant4" =>[
                                    "nom" => "Coucou",
                                    "prenom" => "Hibou",
                                    "age" => 1337
                                ],
                                "etudiant5" =>[
                                    "nom" => "Maes",
                                    "prenom" => "Arnaud",
                                    "age" => 27,
                                ],
                            ]
            ]
];

    $nom = $_POST['name'];
    $prenom = $_POST['firstname'];
    $age = $_POST['age'];
    $sexe = $_POST['sexe'];
    $etat = $_POST['etat'];
    $tableau7 = ["nom" => $nom,
                 "prenom" => $prenom,
                 "age " => $age];

    //echo "Vous vous applez " .$nom. " " .$prenom. " , vous avez " .$age. " ans , vous êtes un(e) " .$sexe. " " .$etat;
    array_push($tableau4["local"]["etudiants"],$tableau7);
    $tableau4["local"]["etudiants"]["etudiant6"]=$tableau4["local"]["etudiants"][0] ;
    unset($tableau4["local"]["etudiants"][0]);

    echo "Intilé du cours : ".$tableau4["cours"];
    echo "<br>";
    echo "Local : ".$tableau4["local"]["numero"];
    echo "<br>";
    echo "Nombre d'eleves : ".$tableau4["local"]["nbPlace"];
    echo "<br>";
    echo "<br>";
    echo "<table style='border : 1px solid black;' >";
    echo "<tr>";
    foreach($tableau4["local"]["etudiants"]["etudiant5"] as $key => $value){
        echo "<th style='border : 1px solid black; padding:2vh'>$key</th>";
    }
    echo "</tr>";
    foreach($tableau4["local"]["etudiants"] as $key => $value){
        echo "<tr>";
        foreach($value as $key2 => $value2){
            echo "<td style='border : 1px solid black; padding:2vh'>$value2</td>";
        }
        echo "</tr>";
    }
    
    ?>