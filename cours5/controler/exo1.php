<?php
session_start();
include ("../../correctif/CorrectionExosTableaux.php");
//var_dump($_SESSION["tabfruit"]);
$_SESSION["tabfruit"]=addTab($_SESSION["tabfruit"],$_GET["fruit"]);
//var_dump($_SESSION["tabfruit"]);
header('Location: ../view/exo1.php');
?>