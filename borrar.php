<?php

include("conexion.php");
$Id = $_GET["id"];
$base->query("DELETE FROM datos_usuarios WHERE id='$Id'");
error_log("Errocito" . $Id);
header("Location:indexInicial.php");
?>