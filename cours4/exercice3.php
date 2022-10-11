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
    //var_dump($_POST);
    $nom = $_POST['name'];
    $prenom = $_POST['firstname'];
    //echo $nom. " " .$prenom;
    if(preg_match_All('/[^A-Z,a-z]/', $nom)){
        echo "il y a un problème dans le nom";
    }elseif(preg_match('/[^A-Z,a-z]/',$prenom)){
        echo "Il y a un problème dans le prénom";
    }else{
        echo "Tout est ok " .$prenom. " " .$nom;
    };

    
    ?>