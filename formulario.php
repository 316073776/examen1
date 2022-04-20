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
			          	<a class="nav-link active" href="#">Conversor</a>
			        </li>
			        <li class="nav-item">
			          	<a class="nav-link" href="creditos.php">Créditos</a>
			        </li>
		      	</ul>
		  	</div>
		</nav>

		<form method="POST" action="converter.php">
			<div class="row g-2 p-5">

	  			<div class="col-md">
	    			<div class="form-floating">
	      				<input type="number" class="form-control" placeholder="10" id="entrada" name="entrada">
	      				<label for="entrada">Quiero convertir:</label>
	    			</div>
	  			</div>

	  			<div class="col-md">
	    			<div class="form-floating">
	      				<select class="form-select" id="medida" name="medida" >
					        <option value="1">mililitros a onzas fluidas</option>
					        <option value="2">metros a yardas</option>
					        <option value="3">gramos a libras</option>
					        <option value="4">celcius a farenheit</option>
					        <option value="5">kilometros a millas</option>
					        <option value="6">pesos a libras esterlinas</option>
	      				</select>
	      				<label for="medida">Tipo de unidad:</label>
	    			</div>
  				</div>
		
			</div>

			<div class="text-center">
				<input type="submit" class="btn btn-outline-success btn-lg" value="Convertir"></input>
			</div>

		</form>
		
	</body>
</html>

