<?php
     
?>
<!DOCTYPE html>
      <head>
         <meta charset="utf-8">
	     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
         <title><?php echo $data["titulo"]; ?></title>
</head>

<body>
<div class="container">
			<h2><?php echo $data["titulo"]; ?></h2>
			
			<form id="nuevo" name="nuevo" method="POST" action="index.php?c=vehiculos&a=guarda" autocomplete="off">
				<div class="form-group">
					<label for="placa">Placa</label>
					<input type="text" class="form-control" id="placa" name="placa" />
				</div>
				
				<div class="form-group">
					<label for="marca">Marca</label>
					<input type="text" class="form-control" id="marca" name="marca" />
				</div>
				
				<div class="form-group">
					<label for="modelo">Modelo</label>
					<input type="text" class="form-control" id="modelo" name="modelo" />
				</div>
				
				<div class="form-group">
					<label for="anio">Año</label>
					<input type="text" class="form-control" id="anio" name="anio" />
				</div>
				
				<div class="form-group">
					<label for="color">Color</label>
					<input type="text" class="form-control" id="color" name="color" />
				</div>
				
				<button id="guardar" name="guardar" type="submit" class="btn btn-primary">Agregar</button>
				
			</form>
		</div>
	</body>
</html>

