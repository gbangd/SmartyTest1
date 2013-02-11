{* Smarty *}
<!--Carga de archivos de configuracion-->
{config_load file="configs/test.conf"}

<html>
<head>
	<title>{#title#|truncate:25:"..."}</title>
	<link rel="stylesheet" type="text/css" src="templates/usuario.css"/>
	<script type="text/javascript" src="{#jscript#}/jquery.js"></script>
	<script type="text/javascript" src="{#jscript#}/jsTelar.js"></script>
</head>
<body>
	
	