<?php
  if (($open = fopen("infos.csv", "r")) !== FALSE){
    while (($data = fgetcsv($open, 1000, ",")) !== FALSE){
      $array[] = $data;
    }
    fclose($open);
  }
  foreach ($array as $users) {
    if($_POST['login']==$users[3]&&$_POST['pass']==$users['4']){
      header('Location: ..\view\welcome.php?login=ok');
    }
  }
?>
