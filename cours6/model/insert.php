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

function insertUser($nom, $prenom, $birthdate,$email, $login, $pass){
    include('connection.php');
      $query = "INSERT INTO user (name, firstname, birthdate, email, login, pass) VALUES(:name, :firstname, :birthdate, :email, :login, :pass)";
      $query_params = array(':name'=>$nom,
                            ':firstname'=>$prenom,
                            ':birthdate' =>$birthdate,
                            ':email'=>$email,
                            ':login'=>$login,
                            ':pass'=>$pass);
      try{
          $stmt = $db->prepare($query);
          $result = $stmt->execute($query_params);
      }
      catch(PDOException $ex){
          die("Failed query : " . $ex->getMessage());
      }
  }


 ?>
