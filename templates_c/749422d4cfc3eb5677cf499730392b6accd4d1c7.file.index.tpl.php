<?php /* Smarty version Smarty-3.1.8, created on 2013-01-31 02:11:12
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2381651047232b82849-39488062%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '749422d4cfc3eb5677cf499730392b6accd4d1c7' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1359598060,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2381651047232b82849-39488062',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51047232bfa678_85523341',
  'variables' => 
  array (
    'name' => 0,
    'datos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51047232bfa678_85523341')) {function content_51047232bfa678_85523341($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'C:\\wamp\\www\\Smarty\\libs\\plugins\\modifier.truncate.php';
?>
<!--Carga de archivos de configuracion-->
<?php  $_config = new Smarty_Internal_Config("configs/test.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars(null, 'local'); ?>

<html>
<head>
	<title><?php echo smarty_modifier_truncate($_smarty_tpl->getConfigVariable('title'),25,"...");?>
</title>
</head>
<body>
	<div> Hello, <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
! </div>
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
			<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['cliente'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['cliente']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['cliente']['name'] = 'cliente';
$_smarty_tpl->tpl_vars['smarty']->value['section']['cliente']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['datos']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['cliente']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['cliente']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cliente']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cliente']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['cliente']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cliente']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['cliente']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['cliente']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['cliente']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cliente']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['cliente']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['cliente']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['cliente']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['cliente']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['cliente']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cliente']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['cliente']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['cliente']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['cliente']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['cliente']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['cliente']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['cliente']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['cliente']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cliente']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cliente']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cliente']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['cliente']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cliente']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['cliente']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['cliente']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['cliente']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['cliente']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['cliente']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['cliente']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['cliente']['total']);
?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['datos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['cliente']['index']]['nombre'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['datos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['cliente']['index']]['apellido'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['datos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['cliente']['index']]['cedula'];?>
</td>
					<td><?php echo $_smarty_tpl->tpl_vars['datos']->value[$_smarty_tpl->getVariable('smarty')->value['section']['cliente']['index']]['telefono'];?>
</td>
				</tr>
			<?php endfor; endif; ?>
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

	<script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('jscript');?>
/jquery.js"></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('jscript');?>
/jsTelar.js"></script>
</body>
</html>

<?php }} ?>