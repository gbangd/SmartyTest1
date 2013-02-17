
<?php
	
if(isset($_GET['modelo']))
{
	$modelo = $_GET['modelo'];
	$peticion = $modelo.".php";
	
	require_once($peticion);

	$database = new Manejo_bd();
	$database->imprimir();
}

?>

<html>
<head>
	<title></title>
</head>
<body>
	<div>
		<form action="form.php" method="get" accept-charset="utf-8">
			<input type="text" name="modelo" value="" placeholder="Modelo"/>
			<input type="submit" name="" value="Aceptar"/>
		</form>
	</div>
</body>
</html>