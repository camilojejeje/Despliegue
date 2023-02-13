<!DOCTYPE html>
<html lang="es">
  <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD</title>
  <link rel="stylesheet" type="text/css" href="hoja.css">
</head>

<body>

<?php
  include("conexion.php");
  $conexion=$base->query("SELECT * FROM datos_usuarios");
  $registros=$conexion->fetchAll(PDO::FETCH_OBJ);
?>

<h1>CRUD<span class="subtitulo">Create Read Update Delete</span></h1>

  <table width="50%" border="0" align="center">
    <tr >
      <td class="primera_fila">ID</td>
      <td class="primera_fila">Nombre</td>
      <td class="primera_fila">Apellido</td>
      <td class="primera_fila">Dirección</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
      <td class="sin">&nbsp;</td>
    </tr> 
  
    <?php
      foreach($registros as $persona):
    ?>

		
   	<tr>
      <td><?php echo $persona->ID?> </td>
      <td><?php echo $persona->Nombre?></td>
      <td><?php echo $persona->Apellido?></td>
      <td><?php echo $persona->Calle?></td>
 
      <td class="bot"><a href="borrar.php?id=<?php echo $persona->ID?>"><input type='button' name='del' id='del' value='Borrar'></a></td>

      <td class='bot'><a href="editarInicial.php?id=<?php echo $persona->ID?> & nom=<?php echo $persona->Nombre?> & ape=<?php echo $persona->Apellido?> & dir=<?php echo $persona->Calle?>"><input type='button' name='up' id='up' value='Actualizar'></a></td>
    </tr>  
    
    <?php
      endforeach;
    ?>

	<tr>
	<td></td>
      <form method="get" action="insertar.php">
        <td><input type='text' name='Nom' size='10' class='centrado'></td>
        <td><input type='text' name='Ape' size='10' class='centrado'></td>
        <td><input type='text' name=' Dir' size='10' class='centrado'></td>
        <td class='bot'><input type='submit' name='cr' id='cr' value='Insertar'></td></tr>    
      </form>
  </table>

<p>&nbsp;</p>
</body>
</html>