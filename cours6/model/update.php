<?php

function updateDataProf($id, $nom,$prenom,$age){
  include('connection.php');
    $query = "UPDATE prof SET name='$nom', firstname='$prenom', age=$age WHERE ID= $id";
    //$query_params = ;
    try{
        $stmt = $db->prepare($query);
        $result = $stmt->execute($query_params);
    }
    catch(PDOException $ex){
        die("Failed query : " . $ex->getMessage());
    }
}


 ?>
