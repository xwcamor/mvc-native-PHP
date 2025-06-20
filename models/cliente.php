<?php
//Incluir el archivo externo Conexion.php
require_once("conexion.php");

//Declarar la clase de la entidad
class Cliente
{
	//Propiedades
	public $id;
	public $nombre;
	public $numruc;
	public $direccion;
	public $telefono;

	//Metodos (CRUD)
	public function getBuscarPorId($idBuscar)
	{
		//Conectar a la BD y recoger el objeto de conexion
		$cnx = Conexion::getConectarMySql();

		//Preparar la sentencia: la instruccion SQL con parametros
		$snt = $cnx->prepare("SELECT * FROM cliente WHERE id=:idBuscar");

		//Pasar los valores a los parametros SQL
		$snt->bindValue(":idBuscar",$idBuscar);

		//Ejecutar la instruccion SQL
		$snt->execute();

		//Recoger las filas resultantes (TODAS)
		$fila = $snt->fetch();

		//Asignar los valores de la fila al objeto cliente
		$this->id = $fila['id'];
		$this->nombre = $fila['nombre'];
		$this->numruc = $fila['numruc'];
		$this->direccion = $fila['direccion'];
		$this->telefono = $fila['telefono'];


		//Retornar el objeto cliente
		return $this;
	}
	public function getBuscarPorDescripcion($descripcionBuscar)
	{
		//Conectar a la BD y recoger el objeto de conexion
		$cnx = Conexion::getConectarMySql();

		//Preparar la sentencia: la instruccion SQL con parametros
		$snt = $cnx->prepare("SELECT * FROM cliente WHERE nombre LIKE CONCAT('%',:desBuscar,'%');");

		//Pasar los valores a los parametros SQL
		$snt->bindValue(":desBuscar",$descripcionBuscar);

		//Ejecutar la instruccion SQL
		$snt->execute();

		//Recoger las filas resultantes (TODAS)
		$tabla = $snt->fetchAll();

		//Retornar el valor resultante
		return $tabla;

	}
	public function setInsertar($objCliente)
	{
		//Conectar a la BD y recoger el objeto de conexion
		$cnx = Conexion::getConectarMySql();

		//Preparar la sentencia: la instruccion SQL con parametros
		$snt = $cnx->prepare("insert into cliente (nombre, numruc, direccion, telefono) values (:nombre, :numruc, :direccion, :telefono);");

		//Pasar los valores a los parametros SQL
		$snt->bindValue(":nombre",$objCliente->nombre);
		$snt->bindValue(":numruc",$objCliente->numruc);
		$snt->bindValue(":direccion",$objCliente->direccion);
		$snt->bindValue(":telefono",$objCliente->telefono);

		//Ejecutar la instruccion SQL
		$snt->execute();

		//-- RECUPERAR EL NUEVO ID

		//Preparar la sentencia: la instruccion SQL
		$snt = $cnx->prepare("SELECT MAX(id) AS nuevoId FROM cliente;");
		//Ejecutar la instruccion SQL
		$snt->execute();
		//Recoger la fila resultante (1 SOLA)
		$fila = $snt->fetch();
		//Leer el nuevo id de la fila
		$nuevoId = $fila['nuevoId'];
		//Retornar el nuevo id
		return $nuevoId;
	
	}
	public function setActualizar($objCliente)
	{
		//Conectar a la BD y recoger el objeto de conexion
		$cnx = Conexion::getConectarMySql();

		//Preparar la sentencia: la instruccion SQL con parametros
		$snt = $cnx->prepare("update cliente set nombre=:nombre, numruc=:numruc, direccion=:direccion, telefono=:telefono where id=:id");

		//Pasar los valores a los parametros SQL
		$snt->bindValue(":id",$objCliente->id);
		$snt->bindValue(":nombre",$objCliente->nombre);
		$snt->bindValue(":numruc",$objCliente->numruc);
		$snt->bindValue(":direccion",$objCliente->direccion);
		$snt->bindValue(":telefono",$objCliente->telefono);

		//Ejecutar la instruccion SQL
		$snt->execute();
	}
	public function setEliminar($idEliminar)
	{
		//Conectar a la BD y recoger el objeto de conexion
		$cnx = Conexion::getConectarMySql();

		//Preparar la sentencia: la instruccion SQL con parametros
		$snt = $cnx->prepare("delete from cliente where id=:id");

		//Pasar los valores a los parametros SQL
		$snt->bindValue(":id",$idEliminar);

		//Ejecutar la instruccion SQL
		$snt->execute();
	}

}

?>