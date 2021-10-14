<?php
session_start();
include_once 'connectiodb.php';

$usuario = $_SESSION['usuario'];
$sqli = "SELECT usuario, usuarioid, nombre, apellido, edad, correo, pssw, direccion FROM usuarios WHERE usuario = '$usuario'";
$resultado = mysqli_query($conn, $sqli);
$row= mysqli_fetch_array($resultado);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
  <link rel="stylesheet" type="text/css" href="stats/css/colors.css">
	<title></title>
</head>
<body>
<table class="table">

<tr>
<th>Usuario</td>
<th>Nombre</td>
<th>Apellido</td>
<th>Edad</td>
<th>Correo</td>
<th>Contraseña</td>
<th>Dirección</td>
</tr>
<?php



?>
<tr>
<td><?php echo $row["usuario"]; ?></td>
<td><?php echo $row["nombre"]; ?></td>
<td><?php echo $row["apellido"]; ?></td>
<td><?php echo $row["edad"]; ?></td>
<td><?php echo $row["correo"]; ?></td>
<td><?php echo $row["pssw"]; ?></td>
<td><?php echo $row["direccion"]; ?></td>
</tr>


<?php

?>
</table>
<div align="center">
<button type="button" class="button"><a href="perfilupdate.php?usuarioid=<?php echo $row["usuarioid"]; ?>">Actualizar</a></button>
</div>

</body>
</html>