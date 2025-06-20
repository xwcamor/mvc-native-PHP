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
	//Declarar las variables 
	$descripcionBuscar = "";
	$tabla = array();

	//Mostrar vista
	require_once('views/head.php');
	require_once('views/producto/index.php');
	require_once('views/foot.php');
}

function metodoPOST()
{
	//MODELO
	require_once("models/producto.php");

	//Instanciar un objeto Modelo
	$objProducto = new Producto();

	//Recoger la descripcion a buscar
	$descripcionBuscar = $_POST['txtDescripcionBuscar'];

	//Ejecutar la busqueda
	$tabla = $objProducto->getBuscarPorDescripcion($descripcionBuscar);

	//Mostrar vista
	require_once('views/head.php');
	require_once('views/producto/index.php');
	require_once('views/foot.php');
}

?>