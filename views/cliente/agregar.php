<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Agregar Cliente</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-white">

	<div class="container my-5">
		<h1 class="text-center mb-4 py-3" style="background-color: #00fffc; color: #000000;">Agregar Cliente</h1>

		<div class="text-end mb-3">
			<a href="<?php echo $GLOBALS['rutaRaiz'] ?>/cliente/agregar" class="btn fw-bold text-white" style="background-color: #fc00ff;">Nuevo</a>
		</div>

		<form method="post" class="bg-black p-4 rounded shadow-sm border border-3" style="border-color: #00fffc;">
			<div class="mb-3">
				<label class="form-label fw-bold">ID</label>
				<input type="text" name="txtId" class="form-control" readonly value="<?php echo $objCliente->id ?>">
			</div>

			<div class="mb-3">
				<label class="form-label fw-bold">Nombre</label>
				<input type="text" name="txtNombre" class="form-control" value="<?php echo $objCliente->nombre ?>">
			</div>

			<div class="mb-3">
				<label class="form-label fw-bold">RUC</label>
				<input type="text" name="txtNumruc" class="form-control" value="<?php echo $objCliente->numruc ?>">
			</div>

			<div class="mb-3">
				<label class="form-label fw-bold">Dirección</label>
				<input type="text" name="txtDireccion" class="form-control" value="<?php echo $objCliente->direccion ?>">
			</div>

			<div class="mb-4">
				<label class="form-label fw-bold">Teléfono</label>
				<input type="text" name="txtTelefono" class="form-control" value="<?php echo $objCliente->telefono ?>">
			</div>

			<div class="d-flex justify-content-between">
				<a href="<?php echo $GLOBALS['rutaRaiz'] ?>/cliente" class="btn btn-outline-light">Retornar</a>
				<input type="submit" class="btn fw-bold text-white" style="background-color: #fc00ff;" value="Guardar">
			</div>
		</form>

	
