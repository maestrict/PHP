<?php


function readIdGame($GameName){
  include('connection.php');
  $query = "SELECT idGame FROM Game WHERE ID= :gameName";
  $query_params = array(':gameName'=>$GameName);
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




function readTop10($IDGame){
    include('connection.php');
    $query = "SELECT TOP 10 * FROM Run ORDER BY time WHERE idGame = :game";
    $query_params = array(':game'=>$IDGame);
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


function readLastIdPicture(){
    include_Once('connection.php');
    $query = "SELECT MAX(id) FROM Picture ORDER BY id";
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

  function readIdStyle($StyleName){
    include_Once('connection.php');
    $query = "SELECT id FROM RunStyle WHERE Name= :styleName ";
    $query_params = array(':styleName'=>$StyleName);
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

  function ReadAllRunNoValidation(){
    include_Once('connection.php');
    $query = "SELECT * FROM Run WHERE validation = :validation ";
    $query_params = array(':validation'=>NULL);
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

  function readMyRuns($idUser){
    include_Once('connection.php');
    $query = "SELECT * FROM Run WHERE idUser = :idUser ";
    $query_params = array(':idUser'=>$idUser);
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
