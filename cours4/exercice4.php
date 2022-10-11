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
    <input type="submit" value="envoyer">
    </br>
    <input type="reset" value="reset">


    <?php 
    //var_dump($_POST);
    $nom = $_POST['name'];
    $prenom = $_POST['firstname'];
    $age = $_POST['age'];
    $count = 0;
    if(empty($nom)){
        echo "Le champs nom est vide";
        $count++;
    }
    if(empty($prenom)){
        echo "Le champs prénom est vide";
        $count++;
    }
    if(empty($age)){
        echo "Le champs age est vide";
        $count++;
    }

    if($count==0){
        echo $nom;
    }
    
    ?>