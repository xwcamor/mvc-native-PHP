<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Gestión de Productos</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light text-dark">

	<div class="container my-5">
		<h1 class="text-center mb-4 text-white py-3" style="background-color: #1b9aaa;">Gestión de Productos</h1>

		<div class="text-end mb-3">
			<a href="producto/agregar" class="btn btn-success" style="background-color: #06d6a0; border-color: #06d6a0;">Agregar nuevo</a>
		</div>

		<form method="post" class="mb-4">
			<div class="row g-2 align-items-end">
				<div class="col-md-4">
					<label class="form-label fw-bold">Descripción</label>
					<input type="text" name="txtDescripcionBuscar" class="form-control" value="<?php echo $descripcionBuscar ?>">
				</div>
				<div class="col-auto">
					<input type="submit" class="btn btn-primary" style="background-color: #1b9aaa; border-color: #1b9aaa;" value="Buscar">
				</div>
			</div>
		</form>

		<table class="table table-bordered table-hover align-middle">
			<thead class="table-warning text-center">
				<tr>
					<th>CODIGO</th>
					<th>DESCRIPCIÓN</th>
					<th>CATEGORÍA</th>
					<th>PRECIO S/.</th>
					<th colspan="2">ACCIONES</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($tabla as $fila): ?>
				<tr>
					<td><?php echo $fila['id'] ?></td>
					<td><?php echo $fila['descripcion'] ?></td>
					<td><?php echo $fila['categoria'] ?></td>
					<td><?php echo $fila['precio'] ?></td>
					<td><a href="producto/editar?idEditar=<?php echo $fila['id'] ?>" class="btn btn-sm btn-warning" style="background-color: #ffc43d;">Editar</a></td>
					<td><a href="producto/eliminar?idEliminar=<?php echo $fila['id'] ?>" class="btn btn-sm btn-danger" style="background-color: #ef476f; border-color: #ef476f;">Eliminar</a></td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>

		
