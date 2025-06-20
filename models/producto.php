<?php
//Incluir el archivo externo Conexion.php
require_once("conexion.php");

//Declarar la clase de la entidad
class Producto
{
	//Propiedades
	public $id;
	public $descripcion;
	public $categoria;
	public $precio;

	//Metodos (CRUD)
	public function getBuscarPorId($idBuscar)
	{
		//Conectar a la BD y recoger el objeto de conexion
		$cnx = Conexion::getConectarMySql();

		//Preparar la sentencia: la instruccion SQL con parametros
		$snt = $cnx->prepare("SELECT * FROM producto WHERE id=:idBuscar");

		//Pasar los valores a los parametros SQL
		$snt->bindValue(":idBuscar",$idBuscar);

		//Ejecutar la instruccion SQL
		$snt->execute();

		//Recoger las filas resultantes (TODAS)
		$fila = $snt->fetch();

		//Asignar los valores de la fila al objeto producto
		$this->id = $fila['id'];
		$this->descripcion = $fila['descripcion'];
		$this->categoria = $fila['categoria'];
		$this->precio = $fila['precio'];

		//Retornar el objeto producto
		return $this;
	}
	public function getBuscarPorDescripcion($descripcionBuscar)
	{
		//Conectar a la BD y recoger el objeto de conexion
		$cnx = Conexion::getConectarMySql();

		//Preparar la sentencia: la instruccion SQL con parametros
		$snt = $cnx->prepare("SELECT * FROM producto WHERE descripcion LIKE CONCAT('%',:desBuscar,'%');");

		//Pasar los valores a los parametros SQL
		$snt->bindValue(":desBuscar",$descripcionBuscar);

		//Ejecutar la instruccion SQL
		$snt->execute();

		//Recoger las filas resultantes (TODAS)
		$tabla = $snt->fetchAll();

		//Retornar el valor resultante
		return $tabla;

	}
	public function setInsertar($objProducto)
	{
		//Conectar a la BD y recoger el objeto de conexion
		$cnx = Conexion::getConectarMySql();

		//Preparar la sentencia: la instruccion SQL con parametros
		$snt = $cnx->prepare("insert into producto (descripcion, categoria, precio) values (:descripcion, :categoria, :precio);");

		//Pasar los valores a los parametros SQL
		$snt->bindValue(":descripcion",$objProducto->descripcion);
		$snt->bindValue(":categoria",$objProducto->categoria);
		$snt->bindValue(":precio",$objProducto->precio);

		//Ejecutar la instruccion SQL
		$snt->execute();

		//-- RECUPERAR EL NUEVO ID

		//Preparar la sentencia: la instruccion SQL
		$snt = $cnx->prepare("SELECT MAX(id) AS nuevoId FROM producto;");
		//Ejecutar la instruccion SQL
		$snt->execute();
		//Recoger la fila resultante (1 SOLA)
		$fila = $snt->fetch();
		//Leer el nuevo id de la fila
		$nuevoId = $fila['nuevoId'];
		//Retornar el nuevo id
		return $nuevoId;
	
	}
	public function setActualizar($objProducto)
	{
		//Conectar a la BD y recoger el objeto de conexion
		$cnx = Conexion::getConectarMySql();

		//Preparar la sentencia: la instruccion SQL con parametros
		$snt = $cnx->prepare("update producto set descripcion=:descripcion, categoria=:categoria, precio=:precio where id=:id");

		//Pasar los valores a los parametros SQL
		$snt->bindValue(":id",$objProducto->id);
		$snt->bindValue(":descripcion",$objProducto->descripcion);
		$snt->bindValue(":categoria",$objProducto->categoria);
		$snt->bindValue(":precio",$objProducto->precio);

		//Ejecutar la instruccion SQL
		$snt->execute();
	}
	public function setEliminar($idEliminar)
	{
		//Conectar a la BD y recoger el objeto de conexion
		$cnx = Conexion::getConectarMySql();

		//Preparar la sentencia: la instruccion SQL con parametros
		$snt = $cnx->prepare("delete from producto where id=:id");

		//Pasar los valores a los parametros SQL
		$snt->bindValue(":id",$idEliminar);

		//Ejecutar la instruccion SQL
		$snt->execute();
	}

}

?>