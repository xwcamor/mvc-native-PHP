<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Menú</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<style>
		/* Custom styles for the menu */
		.navbar {
			background-color: #000000;
		}
		.navbar a {
			color: #00fffc;
			font-weight: bold;
			padding: 10px 15px;
			text-decoration: none;
		}
		.navbar a:hover {
			background-color: #fc00ff;
			color: #ffffff;
		}
		footer {
			background-color: #fffc00;
			text-align: center;
			padding: 10px;
			font-weight: bold;
			color: #000000;
		}
	</style>
</head>
<body class="bg-dark text-white">

	<div class="container my-5">
		<h1 class="text-center mb-4 py-3" style="background-color: #00fffc; color: #000000;">Menú Principal</h1>

		<div class="navbar">
			<a href="<?php echo $GLOBALS['rutaRaiz'] ?>/inicio">Inicio</a>
			<a href="<?php echo $GLOBALS['rutaRaiz'] ?>/producto">Producto</a>
			<a href="<?php echo $GLOBALS['rutaRaiz'] ?>/cliente">Cliente</a>
			<a href="#">Ventas</a>
			<a href="#">Ayuda</a>
		</div>

		<hr class="my-4 border-3" style="border-color: #00fffc;">
	</div>

