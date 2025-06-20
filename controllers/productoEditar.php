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
	$idEditar = $_GET['idEditar'];

	//Buscar el producto que se va editar y recogerlo
	$objProducto = $objProducto->getBuscarPorId($idEditar);

	//Mostrar vista
	require_once('views/head.php');
	require_once('views/producto/editar.php');
	require_once('views/foot.php');
}

function metodoPOST()
{
	//MODELO
	require_once('models/producto.php');
	//Instanciar el modelo producto
	$objProducto = new Producto();

	//Recoger los valores del formulario
	$objProducto->id=$_POST['txtId'];
	$objProducto->descripcion=$_POST['txtDescripcion'];;
	$objProducto->categoria=$_POST['txtCategoria'];;
	$objProducto->precio=$_POST['txtPrecio'];;
		
	//Ejecutar la actualizacion
	$objProducto->setActualizar($objProducto);

	//Mostrar vista
	require_once('views/head.php');
	require_once('views/producto/editar.php');
	require_once('views/foot.php');
}

?>