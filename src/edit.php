<?php
//Incluye fichero con parámetros de conexión a la base de datos
include_once("config.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<title>NISSAN</title>
</head>
<body>
<div>
	<header>
		<h1>NISSAN</h1>
	</header>
	
	<main>				
	<ul>
		<li><a href="index.php" >Inicio</a></li>
		<li><a href="add.html" >Alta</a></li>
	</ul>
	<h2>Modificación coche</h2>


<?php


/*Obtiene el id del registro del empleado a modificar, idempleado, a partir de su URL. Este tipo de datos se accede utilizando el método: GET*/

//Recoge el id del empleado a modificar a través de la clave idempleado del array asociativo $_GET y lo almacena en la variable idempleado
$id = $_GET['id'];

//Con mysqli_real_scape_string protege caracteres especiales en una cadena para ser usada en una sentencia SQL.
$id = $mysqli->real_escape_string($id);


//Se selecciona el registro a modificar: select
$resultado = $mysqli->query("SELECT Modelo, Motor, Anio_fabricacion, Fiabilidad, Precio FROM NISSAN WHERE id = $id");

//Se extrae el registro y lo guarda en el array $fila
//Nota: También se puede utilizar el método fetch_assoc de la siguiente manera: $fila = $resultado->fetch_assoc();
$fila = $resultado->fetch_array();
$Modelo = $fila['Modelo'];
$Motor = $fila['Motor'];
$Anio_fabricacion = $fila['Anio_fabricacion'];
$Fiabilidad = $fila['Fiabilidad'];
$Precio = $fila['Precio'];

//Se cierra la conexión de base de datos
$mysqli->close();
?>

<!--FORMULARIO DE EDICIÓN. Al hacer click en el botón Guardar, llama a la página (form action="edit_action.php"): edit_action.php
-->

	<form action="edit_action.php" method="post">
		<div>
			<label for="Modelo">Modelo</label>
			<input type="text" name="Modelo" id="Modelo" value="<?php echo $Modelo;?>" required>
		</div>

		<div>
			<label for="Motor">Motor</label>
			<input type="text" name="Motor" id="Motor" value="<?php echo $Motor;?>" required>
		</div>

		<div>
			<label for="Anio_fabricacion">Anio_fabricacion</label>
			<input type="text" name="Anio_fabricacion" id="Anio_fabricacion" value="<?php echo $Anio_fabricacion;?>" required>
		</div>

		<div>
			<label for="Fiabilidad">Fiabilidad</label>
			<select name="Fiabilidad" id="Fiabilidad" placeholder="Fiabilidad">
				<option value="<?php echo $Fiabilidad;?>" selected><?php echo $Fiabilidad;?></option>
				<option value="Alta">Alta</option>
				<option value="Media">Media</option>
				<option value="Baja">Baja</option>
			
			</select>
		</div>
		
		<div>
			<label for="Precio">Precio</label>
			<input type="number" name="Precio" id="Precio" value="<?php echo $Precio;?>" required>
		</div>

		<div >
			<input type="hidden" name="id" value=<?php echo $id;?>>
			<input type="submit" name="modifica" value="Guardar">
			<input type="button" value="Cancelar" onclick="location.href='index.php'">
		</div>
	</form>
	</main>	
	<footer>
		Created by Rodrigo Gomez Marin &copy; 2024
  	</footer>
</div>
</body>
</html>

