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
	$idEliminar = $_GET['idEliminar'];

	//Buscar el cliente que se va editar y recogerlo
	$objCliente = $objCliente->getBuscarPorId($idEliminar);

	//Mostrar vista
	require_once('views/head.php');
	require_once('views/cliente/eliminar.php');
	require_once('views/foot.php');
}

function metodoPOST()
{
	//MODELO
	require_once('models/cliente.php');
	//Instanciar el modelo cliente
	$objCliente = new Cliente();

	//Leer el id a eliminar
	$idEliminar = $_POST['txtId'];

	//Ejecutar la actualizacion
	$objCliente->setEliminar($idEliminar);

	//Mostrar vista
	require_once('views/head.php');

    echo "<div style='text-align: center;'>
            <img src='https://media3.giphy.com/media/v1.Y2lkPTc5MGI3NjExYTJ6MXh4NzVuNTh1MDJ5c2ozc3libThiMnA1Yjh0cDdldWFicWdtZiZlcD12MV9pbnRlcm5hbF9naWZfYnlfaWQmY3Q9Zw/VD4Bt6FyYWcWj0LzDK/giphy.gif' alt='Cargando...' width='400' height='400'>
        </div>";


	require_once('views/foot.php');

	//Redireccionar
	header("refresh:3;url=../cliente");
}

?>