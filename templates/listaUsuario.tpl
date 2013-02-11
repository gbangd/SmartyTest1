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