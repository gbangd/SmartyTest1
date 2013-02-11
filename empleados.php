<?php
	
/**
* 
*/
require_once('conexion_bd.php');

class Empleado 
{
	
	private $database;

	function __construct()
	{
		$this->database = new Manejo_bd();
	}

	function buscar_empleado($cedula_empleado)
	{
		$query="SELECT *
				FROM empleados
				WHERE cedula= '$cedula_empleado'";

		$resultConsulta = $this->database->consulta($query);
		$datos = $this->database->obtenerDatos($resultConsulta);

		return $datos;
	}

	function listar_empleados()
	{
		$query="SELECT *
	  			FROM empleados";

	  	$resultConsulta = $this->database->consulta($query);
		$datos = $this->database->obtenerDatos($resultConsulta);

		return $datos;
	}

	function eliminar_empleado($cedula_empleado)
	{
		$query="DELETE FROM empleados
  				WHERE cedula=$cedula_empleado";

  		$resultConsulta = $this->database->consulta($query);

  		if($this->database->filas_afectadas() !=0)
  		{
  			return "El empleado ha sido eliminado";
  		}
  		else
  		{
  			return "Error";
  		}
  			
  	}
}


?>