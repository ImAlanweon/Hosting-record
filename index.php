<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script>
		$(document).ready(function() {
			$("#hombres, #mujeres").on("input", function() {
				var hombres = parseInt($("#hombres").val()) || 0;
				var mujeres = parseInt($("#mujeres").val()) || 0;
				var total = hombres + mujeres;
				$("#total").val(total);
			});
		});
	</script>
     <title>Registro de hospedaje</title>
</head>
<body>
<?php include('header.php'); ?>
<div class="container mt-5 ">
    <h1>Registro de hospedaje</h1>
    <form method="post" action="procesarRegistro.php">
      <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" class="form-control" id="nombre" name="nombre" required>
      </div>
      <div class="form-group">
        <label for="direccion">Direccion:</label>
        <input type="text" class="form-control" id="direccion" name="direccion" required>
      </div>
      <div class="form-group">
        <label for="genero">Género:</label>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="genero" id="hombre" value="hombre" required>
          <label class="form-check-label" for="hombre">Hombre</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="genero" id="mujer" value="mujer">
          <label class="form-check-label" for="mujer">Mujer</label>
        </div>
      </div>
      <div class="form-group">
        <label for="edad">Edad:</label>
        <input type="number" class="form-control" id="edad" name="edad" min="18" max="99" required>
      </div>
      <div class="form-group">
        <label for="zona">Zona:</label>
        <select class="form-control" id="zona" name="zona" required>
          <option value="1">Zona 1</option>
          <option value="2">Zona 2</option>
          <option value="3">Zona 3</option>
          <option value="4">Zona 4</option>
        </select>
      </div>
      <div class="form-group">
        <label for="hombres">Hombres:</label>
        <input type="number" class="form-control" id="hombres" name="hombres">

        <label for="mujeres">Mujeres:</label>
        <input type="number" class="form-control" id="mujeres" name="mujeres">

        <label for="total">Total:</label>
        <input type="number" class="form-control" id="total" name="total" readonly>
      </div>
      
      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    </div>
    

</body>
</html>