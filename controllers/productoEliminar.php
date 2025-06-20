<?php
//Controlar el tipo de solicitud: GET / POST
switch ($_SERVER['REQUEST_METHOD']) 
{
	case 'GET':
		metodoGET();
		break;
	case 'POST':
		metodoPOST();
		break;
}

//Declarar funciones para GET / POST

function metodoGET()
{
	//MODELO
	require_once('models/producto.php');
	//Instanciar el modelo producto
	$objProducto = new Producto();

	//Leer el id a editar
	$idEliminar = $_GET['idEliminar'];

	//Buscar el producto que se va editar y recogerlo
	$objProducto = $objProducto->getBuscarPorId($idEliminar);

	//Mostrar vista
	require_once('views/head.php');
	require_once('views/producto/eliminar.php');
	require_once('views/foot.php');
}

function metodoPOST()
{
	//MODELO
	require_once('models/producto.php');
	//Instanciar el modelo producto
	$objProducto = new Producto();

	//Leer el id a eliminar
	$idEliminar = $_POST['txtId'];

	//Ejecutar la actualizacion
	$objProducto->setEliminar($idEliminar);

	//Mostrar vista
	require_once('views/head.php');
	
	echo "<h1>Eliminando...</h1>";

	require_once('views/foot.php');

	//Redireccionar
	header("refresh:1;url=../producto");
}

?>