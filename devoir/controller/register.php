<?php
$fp = fopen('infos.csv', 'a');

fputcsv($fp, $_POST);
fclose($fp);

header('Location: ..\view\login.php');


 ?>
