<?php /* Smarty version Smarty-3.1.8, created on 2013-02-11 02:15:04
         compiled from ".\templates\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:43205115101eca7ff1-33770739%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1be7ff7fdee636597edd726ee98dfef4bfd55d1f' => 
    array (
      0 => '.\\templates\\footer.tpl',
      1 => 1360548245,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '43205115101eca7ff1-33770739',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5115101ecc9ae9_28182840',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5115101ecc9ae9_28182840')) {function content_5115101ecc9ae9_28182840($_smarty_tpl) {?><div>
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

	<script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('jscript');?>
/jquery.js"></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('jscript');?>
/jsTelar.js"></script>
</body>
</html>

<?php }} ?>