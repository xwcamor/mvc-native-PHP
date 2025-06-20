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
	require_once('models/cliente.php');
	//Instanciar el modelo cliente
	$objCliente = new Cliente();

	//Asignar valores a las propiedades
	$objCliente->id=0;
	$objCliente->nombre="";
	$objCliente->numruc="";
	$objCliente->direccion="";
	$objCliente->telefono="";
	
	//Mostrar vista
	require_once('views/head.php');
	require_once('views/cliente/agregar.php');
	require_once('views/foot.php');
}

function metodoPOST()
{
	//MODELO
	require_once('models/cliente.php');
	//Instanciar el modelo cliente
	$objCliente = new Cliente();

	//Recoger los valores del formulario
	$objCliente->id=$_POST['txtId'];
	$objCliente->nombre=$_POST['txtNombre'];;
	$objCliente->numruc=$_POST['txtNumruc'];;
	$objCliente->direccion=$_POST['txtDireccion'];;
	$objCliente->telefono=$_POST['txtTelefono'];;
	
	if($objCliente->id==0)
	{
		//Ejecutar la insercion y recoger el nuevo id
		$nuevoId = $objCliente->setInsertar($objCliente);
		//Nuevo id asigar al objeto
		$objCliente->id = $nuevoId;
	}

	//Mostrar vista
	require_once('views/head.php');
	require_once('views/cliente/agregar.php');
	require_once('views/foot.php');
}

?>