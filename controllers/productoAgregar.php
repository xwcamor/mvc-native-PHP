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

	//Asignar valores a las propiedades
	$objProducto->id=0;
	$objProducto->descripcion="";
	$objProducto->categoria="";
	$objProducto->precio=0;
	
	//Mostrar vista
	require_once('views/head.php');
	require_once('views/producto/agregar.php');
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
	
	if($objProducto->id==0)
	{
		//Ejecutar la insercion y recoger el nuevo id
		$nuevoId = $objProducto->setInsertar($objProducto);
		//Nuevo id asigar al objeto
		$objProducto->id = $nuevoId;
	}

	//Mostrar vista
	require_once('views/head.php');
	require_once('views/producto/agregar.php');
	require_once('views/foot.php');
}

?>