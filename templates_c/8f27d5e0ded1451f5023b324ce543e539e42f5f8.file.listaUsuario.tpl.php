<?php /* Smarty version Smarty-3.1.8, created on 2013-02-11 02:51:40
         compiled from ".\templates\listaUsuario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:283875115101eb6c5c7-16235761%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f27d5e0ded1451f5023b324ce543e539e42f5f8' => 
    array (
      0 => '.\\templates\\listaUsuario.tpl',
      1 => 1360550943,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '283875115101eb6c5c7-16235761',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5115101ec81692_44594284',
  'variables' => 
  array (
    'datos' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5115101ec81692_44594284')) {function content_5115101ec81692_44594284($_smarty_tpl) {?><div> 
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
</div><?php }} ?>