<?php

//Crear una variable para la ruta raiz
$rutaRaiz = "http://127.0.0.1:80/ejercicio07MVC";

//Recoger la variable enviada al routes
$url = $_GET['url'];
//var_dump($url); //"controlador/accion"

$ruta = explode("/", $url);
//array(2) { [0]=> string(8) "producto" [1]=> string(6) "editar" }

//CONTROLADOR//

if(strlen($ruta[0])>0)
{
	//Recoger el nombre del controlador
	$controlador = $ruta[0];
}
else
{
	//Asignar un valor predeterminado
	$controlador = "inicio";
}

//ACCION//

if(isset($ruta[1]))
{
	//Leer el nombre de la accion
	$accion = $ruta[1];
}
else
{
	//Asignar una accion predeterminada
	$accion = "index";
}

/*
var_dump($controlador);
echo "<br>";
var_dump($accion);
*/

//Definir la Ruta Fisica del Recurso (controlador)
$controladorFile = "controllers/" . $controlador . $accion . ".php";

//Definir la Ruta Fisica del Recurso Predeterminado (controlador)
$controladorFile_Default = "controllers/inicioIndex.php";

if(file_exists($controladorFile))
{
	//Cargar el controlador
	require_once($controladorFile);
}
else
{
	//Cargar el controlador predeterminado
	require_once($controladorFile_Default);
}


?>