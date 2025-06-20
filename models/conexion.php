<?php
class Conexion
{
	public static function getConectarMySql()
	{
		/*
			PDO: Objetos de Datos de PHP
		*/
		//Parametros de conexion
		$cadena = "mysql:host=127.0.0.1; dbname=BD506";
		$usuario = "root";
		$clave = "";

		//Instanciar un objeto PDO
		$objPDO = new PDO($cadena,$usuario,$clave);

		//Retornar el objeto PDO
		return $objPDO;

	}

}

?>