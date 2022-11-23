<?php


function recupAllInfoAdmin(){
  include('connection.php');
  $query = "SELECT * FROM test.user";
  $query_params = array();
  try
  {
      $stmt = $db->prepare($query);
      $result = $stmt->execute($query_params);
  }
  catch(PDOException $ex){
      die("Failed query : " . $ex->getMessage());
  }
  $result = $stmt->fetchall();
  return (!empty($result)) ? $result: 'NULL';
}

 
 ?>
