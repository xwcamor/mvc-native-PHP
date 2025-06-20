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

	//Leer el id a editar
	$idEditar = $_GET['idEditar'];

	//Buscar el cliente que se va editar y recogerlo
	$objCliente = $objCliente->getBuscarPorId($idEditar);

	//Mostrar vista
	require_once('views/head.php');
	require_once('views/cliente/editar.php');
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
		
	//Ejecutar la actualizacion
	$objCliente->setActualizar($objCliente);

	//Mostrar vista
	require_once('views/head.php');
	require_once('views/cliente/editar.php');
	require_once('views/foot.php');
}

?>