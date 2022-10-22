<?php
session_start();
//include("../../correctif/CorrectionExosTableaux.php");
echo "jfiufzhfiuazbfuabfaoufbauofboafboafi";
$_SESSION["tabfruit"]=addEtudiant($_SESSION["tabfruit"],$_GET["fruit"]);
var_dump($_SESSION("tabfruit"));
//header('Location: ../view/exo1.php');
?>