<?php


function insertProf($nom, $prenom, $age){
  include('connection.php');
    $query = "INSERT INTO prof (name, firstname, age) VALUES(:name, :firstname, :age)";
    $query_params = array(':name'=>$nom,
                          ':firstname'=>$prenom,
                          ':age'=>$age);
    try{
        $stmt = $db->prepare($query);
        $result = $stmt->execute($query_params);
    }
    catch(PDOException $ex){
        die("Failed query : " . $ex->getMessage());
    }
}


 ?>
