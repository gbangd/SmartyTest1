{* Smarty *}
<!--Carga de archivos de configuracion-->
{config_load file="configs/test.conf"}

<html>
<head>
	<title>{#title#|truncate:25:"..."}</title>
</head>
<body>
	<div> Hello, {$name}! </div>
	<div> 
		<table class="list">
			<caption>Clientes del Telar</caption>
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Cedula</th>
					<th>Telefono</th>
				</tr>
			</thead>
			<tbody>
			{section name=cliente loop=$datos}
				<tr>
					<td>{$datos[cliente].nombre}</td>
					<td>{$datos[cliente].apellido}</td>
					<td>{$datos[cliente].cedula}</td>
					<td>{$datos[cliente].telefono}</td>
				</tr>
			{/section}
			</tbody>
		</table>
	</div>
	<div>
		<br/><br/><br/>
		<h2>Buscar Cliente</h2>
		<form action="index.php" method="get" accept-charset="utf-8">
			<input type="hidden" name="modelo" value="buscar" placeholder="Modelo"/>
			<input type="text" name="dato" placeholder="Cedula"/>
			<input type="submit" name="" value="Aceptar"/>
		</form>	
	</div>
	<div>
		<br/><br/><br/>
		<h2>Listar Clientes</h2>
		<form action="index.php" method="get" accept-charset="utf-8">
			<input type="hidden" name="modelo" value="" placeholder="Modelo"/>
			<input type="submit" name="" value="Aceptar"/>
		</form>	
	</div>
	<div>
		<br/><br/><br/>
		<h2>Eliminar Cliente</h2>
		<form action="index.php" method="get" accept-charset="utf-8">
			<input type="hidden" name="modelo" value="eliminar" placeholder="Modelo"/>
			<input type="text" name="dato2" placeholder="Cedula"/>
			<input type="submit" name="" value="Aceptar"/>
		</form>	
	</div>

	<script type="text/javascript" src="{#jscript#}/jquery.js"></script>
	<script type="text/javascript" src="{#jscript#}/jsTelar.js"></script>
</body>
</html>

