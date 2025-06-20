<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Agregar Producto</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light text-dark">

	<div class="container my-5">
		<h1 class="text-center mb-4 text-white py-3" style="background-color: #06d6a0;">Agregar Producto</h1>

		<div class="mb-3 text-end">
			<a href="<?php echo $GLOBALS['rutaRaiz'] ?>/producto/agregar" class="btn btn-outline-info">Nuevo</a>
		</div>

		<form method="post" class="bg-white p-4 rounded shadow-sm border">
			<div class="mb-3">
				<label class="form-label fw-bold">ID</label>
				<input type="text" name="txtId" class="form-control" readonly value="<?php echo $objProducto->id ?>">
			</div>

			<div class="mb-3">
				<label class="form-label fw-bold">Descripción</label>
				<input type="text" name="txtDescripcion" class="form-control" value="<?php echo $objProducto->descripcion ?>">
			</div>

			<div class="mb-3">
				<label class="form-label fw-bold">Categoría</label>
				<input type="text" name="txtCategoria" class="form-control" value="<?php echo $objProducto->categoria ?>">
			</div>

			<div class="mb-3">
				<label class="form-label fw-bold">Precio S/.</label>
				<input type="text" name="txtPrecio" class="form-control" value="<?php echo $objProducto->precio ?>">
			</div>

			<div class="d-flex justify-content-between">
				<a href="<?php echo $GLOBALS['rutaRaiz'] ?>/producto" class="btn btn-secondary">Retornar</a>
				<input type="submit" class="btn text-white" style="background-color: #06d6a0;" value="Guardar">
			</div>
		</form>

