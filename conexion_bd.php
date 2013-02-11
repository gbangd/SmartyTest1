<?php

/**
* Clase php de coneccion con una base de datos cualquiera
*/

require_once("configs/constants.php");

class Manejo_bd 
{
	private $db_link;
	
	function __construct()
	{
		$this->db_link = $this->conectar();
	}

	function conectar()
	{
		$dblink = mysql_connect (SERVER, USER, PASSW);
        mysql_select_db(DATA_BASE, $dblink);
        return $dblink;	
	}

	function desconectar()
	{
		mysql_close($this->db_link);
	}

	function consulta($consulta='')
	{
		if($consulta != '')
		{
			$resultado = mysql_query($consulta, $this->db_link);
			return $resultado;	
		}
		else
		{
			echo "Consulta vacia";
		}
		
	}
	
    function obtenerDatos($vector_data = array())
    {
    	
    	if($vector_data)
    	{
    		$data = array();
    		    		
    		while($registros = mysql_fetch_array($vector_data))
			{
				$data[] = $registros;
			}
			
			$this->desconectar();
			return $data;	
    	}
    	
    }

    function filas_afectadas()
    {
    	return mysql_affected_rows($this->db_link);
    }
}

?>