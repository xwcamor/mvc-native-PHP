<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Gestión de Clientes</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-white">

	<div class="container my-5">
		<h1 class="text-center mb-4 py-3" style="background-color: #fc00ff;">Gestión de Clientes</h1>

		<div class="text-end mb-3">
			<a href="cliente/agregar" class="btn text-dark fw-bold" style="background-color: #00fffc;">Agregar nuevo</a>
		</div>

		<form method="post" class="mb-4">
			<div class="row g-2 align-items-end">
				<div class="col-md-4">
					<label class="form-label fw-bold">Descripción</label>
					<input type="text" name="txtDescripcionBuscar" class="form-control" value="<?php echo $descripcionBuscar ?>">
				</div>
				<div class="col-auto">
					<input type="submit" class="btn fw-bold" style="background-color: #00fffc; color: #000000;" value="Buscar">
				</div>
			</div>
		</form>

		<table class="table table-bordered table-hover align-middle text-white">
    <thead style="background-color: #fffc00; color: #000000;" class="text-center">
        <tr>
            <th class="text-center">CODIGO</th>
            <th class="text-center">NOMBRE</th>
            <th class="text-center">RUC</th>
            <th class="text-center">DIRECCIÓN</th>
            <th class="text-center">TELÉFONO</th>
            <th colspan="2" class="text-center">ACCIONES</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($tabla as $fila): ?>
        <tr class="text-center">
            <td><?php echo $fila['id'] ?></td>
            <td><?php echo $fila['nombre'] ?></td>
            <td><?php echo $fila['numruc'] ?></td>
            <td><?php echo $fila['direccion'] ?></td>
            <td><?php echo $fila['telefono'] ?></td>
            <td>
                <a href="cliente/editar?idEditar=<?php echo $fila['id'] ?>" class="btn btn-sm fw-bold" style="background-color: #fffc00; color: #000000;">Editar</a>
            </td>
            <td>
                <a href="cliente/eliminar?idEliminar=<?php echo $fila['id'] ?>" class="btn btn-sm text-white fw-bold" style="background-color: #fc00ff;">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>


