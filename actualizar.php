<?php

include("conexion.php");

$Id=$_GET["id"];
$Nom=$_GET["nom"];
$Ape=$_GET["ape"];
$Dir=$_GET["dir"];

$base->query("UPDATE datos_usuarios SET Nombre='$Nom', Apellido='$Ape', Calle='$Dir' WHERE ID='$Id'");
header("Location:indexInicial.php");

?>