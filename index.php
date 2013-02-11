<?php

	// Llamado a la clase Smarty
	require('setup.php');
	// Llamado a la clase Empleado
	require('empleados.php');
	//Creacion del objeto smarty
	$smarty= new Smarty_Setup();
	//Creacion del objeto empleado
	$employee = new Empleado();
	$datos = array();

	$smarty->assign('name', 'Ned');
	$smarty->display('index.tpl');	

	if(isset($_GET['modelo']))
	{
		$model = $_GET['modelo'];

		switch ($model) 
		{
			case 'buscar':
				$cedula = $_GET['dato'];
				$datos = $employee->buscar_empleado($cedula);
				$smarty->assign('datos',$datos);
				$smarty->display('listaUsuario.tpl');				
				break;

			case 'eliminar':
				$cedula = $_GET['dato2'];
				$msj = $employee->eliminar_empleado($cedula);
				$smarty->assign('mensaje', $msj);
				$smarty->display('eliminado.tpl');
				break;

			case 'listar':
				$datos = $employee->listar_empleados();
				$smarty->assign('datos',$datos);
				$smarty->display('listaUsuario.tpl');		
				break;

			default:
				break;
		}
	}
	else
	{
		$smarty->display('index.tpl');
		$smarty->display('listaUsuario.tpl');		
	}
	
	$smarty->display('footer.tpl');
?>


