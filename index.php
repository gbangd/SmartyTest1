<?php

	// Llamado a la clase Smarty
	require('setup.php');
	require_once('conexion_bd.php');

	//Creacion del objeto manejador de database
	$database = new Manejo_bd();
	//$database->imprimir();
	//Creacion del objeto smarty
	$smarty= new Smarty_Setup();
	

	if(isset($_GET['modelo']))
	{
		$model = $_GET['modelo'];

		$query="";

		switch ($model) 
		{
			case 'buscar':
				$cedula = $_GET['dato'];
				$query="SELECT *
						FROM empleados
						WHERE cedula= '$cedula'";
				break;

			case 'eliminar':
				$cedula = $_GET['dato2'];
				$query="DELETE FROM empleados
  						WHERE cedula=$cedula";
				break;
			
			default:
				$query="SELECT *
 	  					FROM empleados";
				break;
		}

		$resultConsulta = $database->consulta($query);
		$datos = $database->obtenerDatos($resultConsulta);

		$smarty->assign('name', 'Ned');
		$smarty->assign('datos',$datos);
		$smarty->display('index.tpl');
	}
	else
	{
		$datos = array();
		$smarty->assign('name', 'Ned');
		$smarty->assign('datos',$datos);
		$smarty->display('index.tpl');
	}
	
?>


