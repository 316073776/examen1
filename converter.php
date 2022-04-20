<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<title>Conversor</title>
	</head>

	<body>
		<h1 class="text-center mt-5">CONVERSOR</h1>

		<nav class="navbar navbar-expand navbar-dark bg-secondary">
		  	<div class="container-fluid justify-content-md-center">
		      	<ul class="navbar-nav">
			        <li class="nav-item">
			        	<a class="nav-link" href="index.html">Inicio</a>
			        </li>
			        <li class="nav-item">
			          	<a class="nav-link active" href="formulario.php">Conversor</a>
			        </li>
			        <li class="nav-item">
			          	<a class="nav-link" href="creditos.php">Créditos</a>
			        </li>
		      	</ul>
		  	</div>
		</nav>

		<div class="m-5 text-center">

<?php  
$tipoConversion = $_POST['medida'];
$entrada = $_POST['entrada'];

if ( empty($entrada) ) {
	
	echo "
	<h3>Por favor ingrese un valor de entrada para poder convertir</h3>
	";

	$textoBoton = "Regresar al conversor";

} else {

	if ( $tipoConversion != 4 && $entrada < 0 ) {
		echo "
			<h3>Por favor ingrese un valor positivo para este tipo de conversión</h3>
		";
		$textoBoton = "Regresar al conversor";
	} else {
	
		switch ( $tipoConversion ) {
			case 1:
				$resultado = $entrada / 29.574;
				$unidad = "mililitros";
				$unidadNueva = "onzas líquidas estadounidenses";
				break;
			
			case 2:
				$resultado = $entrada * 1.094;
				$unidad = "metros";
				$unidadNueva = "yardas";
				break;

			case 3:
				$resultado = $entrada / 454;
				$unidad = "gramos";
				$unidadNueva = "libras";
				break;

			case 4:
				$resultado = $entrada * (9/5) + 32;
				$unidad = "º celcius";
				$unidadNueva = "º farenheit";
				break;
			
			case 5:
				$resultado = $entrada / 1.609;
				$unidad = "kilometros";
				$unidadNueva = "millas";
				break;

			case 6:
				$resultado = $entrada * .038;
				$unidad = "pesos";
				$unidadNueva = "libras esterlinas";
				break;

			default:
				break;
		}

		echo "<h3>".$entrada." ".$unidad." equivalen a <b>".round($resultado,3)." ".$unidadNueva."</b></h3>";

		$textoBoton = "Convertir otro valor";
	}
}

?>

		</div>

		<div class="text-center">
			<a class="btn btn-outline-success btn-lg" href="formulario.php"><?php echo $textoBoton?></a>
		</div>
		
	</body>
</html>
