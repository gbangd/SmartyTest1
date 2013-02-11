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
			<input type="hidden" name="modelo" value="listar" placeholder="Modelo"/>
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

</div>
	
	{config_load file="configs/test.conf"}
	<script type="text/javascript" src="{#jscript#}/jquery.js"></script>
	<script type="text/javascript" src="{#jscript#}/jsTelar.js"></script>
</body>
</html>

