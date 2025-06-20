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
	//Mostrar vista
	require_once('views/head.php');
	require_once('views/inicio/index.php');
	require_once('views/foot.php');
}

function metodoPOST()
{
	
}

?>

