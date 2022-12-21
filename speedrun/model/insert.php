<?php


function insertUsert($nom, $prenom, $dateNaiss, $pseudo, $mdp, $email){
  include('connection.php');
    $query = "INSERT INTO user (name, firstname, birthdate, nickName, pswd,email) VALUES(:nom, :prenom, :dateNaiss, :pseudo, :mdp, :email)";
    $query_params = array(':nom'=>$nom,
                          ':prenom'=>$prenom,
                          ':dateNaiss'=>$dateNaiss,
                          ':pseudo'=>$pseudo,
                          ':mdp'=>$mdp,
                          ':email'=>$email);
    try{
        $stmt = $db->prepare($query);
        $result = $stmt->execute($query_params);
    }
    catch(PDOException $ex){
        die("Failed query : " . $ex->getMessage());
    }
}

function insertAdmin($nom, $prenom, $dateNaiss, $pseudo, $mdp, $email){
    include('connection.php');
      $query = "INSERT INTO user (name, firstname, birthdate, nickName, pswd,email,admin) VALUES(:nom, :prenom, :dateNaiss, :pseudo, :mdp, :email, :admin)";
      $query_params = array(':nom'=>$nom,
                            ':prenom'=>$prenom,
                            ':dateNaiss'=>$dateNaiss,
                            ':pseudo'=>$pseudo,
                            ':mdp'=>$mdp,
                            ':email'=>$email,
                            ':admin'=>1);
          $stmt = $db->prepare($query);
          $result = $stmt->execute($query_params);
      try{
        $stmt = $db->prepare($query);
        $result = $stmt->execute($query_params);
        }
      catch(PDOException $ex){
          die("Failed query : " . $ex->getMessage());
      }
  }

  function InsertRun($nom,$IdUser, $temp, $lienVideo, $IdGame){
    include('connection.php');
    include('read.php');
    $idPicture = readLastIdPicture();
    $query = "INSERT INTO Run (name, time, videoLink, idPicture, idUser, idGame) VALUES(:nom, :temp, :lienVIdeo, :idPicture, :idUser :idGame)";
    $query_params = array(':nom'=>$nom,
                          ':temp'=>$temp,
                          ':lienVideo'=>$lienVideo,
                          ':idPicture'=>$idPicture,
                          ':idUser'=>$IdUser,
                          ':idGame'=>$IdGame);
    try{
        $stmt = $db->prepare($query);
        $result = $stmt->execute($query_params);
    }
    catch(PDOException $ex){
        die("Failed query : " . $ex->getMessage());
    }
  }

  function InsertGame($nom, $description){
    include_Once('connection.php');
    include('read.php');
    $idPicture = readLastIdPicture();
    $query = "INSERT INTO Game (name,desciption,idPicture) VALUES(:nom, :description, :idPicture)";
    $query_params = array(':nom'=>$nom,
                          ':description'=>$description,
                          ':idPicture'=>$idPicture);
    try{
        $stmt = $db->prepare($query);
        $result = $stmt->execute($query_params);
    }
    catch(PDOException $ex){
        die("Failed query : " . $ex->getMessage());
    }
  }
    
  function InsertPicture(){

    include('connection.php');
    include('read.php');
    $idPicture = "../ressources/".readLastIdPicture() + 1;
    $query = "INSERT INTO Game (Photo) VALUES(:photo)";
    $query_params = array(':photo'=>$idPicture);
    try{
        $stmt = $db->prepare($query);
        $result = $stmt->execute($query_params);
    }
    catch(PDOException $ex){
        die("Failed query : " . $ex->getMessage());
    }
  }



  


  function InsertStyleGame($nom, $GameName){
    include('connection.php');
    include('read.php');
    
    $query = "INSERT INTO RunStyle (name) VALUES(:nom)";
    $query_params = array(':nom'=>$nom);
    try{
        $stmt = $db->prepare($query);
        $result = $stmt->execute($query_params);
    }
    catch(PDOException $ex){
        die("Failed query : " . $ex->getMessage());
    }
    $idGame = readIdGame($GameName);
    $idStyle = readIdStyle($nom);

    $query = "INSERT INTO GameStyle (idGame, idStyle) VALUES(:idGame, :idStyle)";
    $query_params = array(':idGame'=>$idGame,
                          ':idStyle'=>$idStyle);
    try{
        $stmt = $db->prepare($query);
        $result = $stmt->execute($query_params);
    }
    catch(PDOException $ex){
        die("Failed query : " . $ex->getMessage());
    }
  }



 ?>
