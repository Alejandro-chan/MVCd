//nuevo.php
<!DOCTYPE html>
<html>
<head>
	<title>Agregar nuevo vehículo</title>
</head>
<body>
	<h2>Agregar nuevo vehículo</h2>
	<form action="guardar.php" method="post">
		<label>Placa:</label>
		<input type="text" name="placa">
		<br><br>
		<label>Marca:</label>
		<input type="text" name="marca">
		<br><br>
		<label>Modelo:</label>
		<input type="text" name="modelo">
		<br><br>
		<label>Año:</label>
		<input type="text" name="año">
		<br><br>
		<label>Color:</label>
		<input type="text" name="color">
		<br><br>
		<input type="submit" value="Guardar">
	</form>
</body>
</html>

<?php
$placa = $_POST['placa'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$año = $_POST['año'];
$color = $_POST['color'];

//Aquí iría el código para insertar los datos en la base de datos

header('Location: index.php');
?>
<td>
	<a href="editar.php?id=<?php echo $dato['id']; ?>">Editar</a>
</td>
<td>
	<a href="eliminar.php?id=<?php echo $dato['id']; ?>">Eliminar</a>
</td>

