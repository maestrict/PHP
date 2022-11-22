<?php

function deleteDataProf($id){
  include('connection.php');
    $query = "DELETE FROM prof WHERE ID= $id";
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
