<form action="#" method="POST">

    <label>Prénom</label></br>
    <input type="text" name="firstname">
    </br>

    <label>Nom</label></br>
    <input type="text" name="name">
    </br>
    <input type="submit" value="envoyer">

    <?php var_dump($_POST);
          var_dump($_SESSION);    
    
    ?>

<!--
    1 - Faire un formulaire qui demande d'entrer un age
    et prévenir s'il est majeure ou non
    (tant que rien n'est entrer, ne pas afficher de message)

2 - Faire un formulaire qui demande d'entrer un nom et prenom
    et afficher "Bonjour 'nom Prenom !'"
    (tant que rien n'est entrer, ne pas afficher de message)

3 - Faire un formulaire qui demande d'entrer un nom et prenom
    et verifier qu'il n'y ai pas de chiffres ni accents dans ceux-ci
    (tant que rien n'est entrer, ne pas afficher de message)

4 - Faire un formulaire qui demande d'entrer un nom, prenom et un age
    et verifier que l'utilisateur a bien remplis TOUS les champs.
    Si pas, alors prévenir quel champ(s) est vide.

5 - Faire une formulaire qui demande un nom/prenom/age/sex/etatCivil
    comme dans l'image et afficher l'encodage une fois terminé.

6 - Faire un formulaire pour allimenter l'exercice 1 du cours3.

7 - Faire un formulaire pour allimenter l'exercice 7 du cours3.
-->
