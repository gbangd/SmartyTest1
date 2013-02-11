<?php /* Smarty version Smarty-3.1.8, created on 2013-02-11 02:33:52
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2381651047232b82849-39488062%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '749422d4cfc3eb5677cf499730392b6accd4d1c7' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1360549968,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2381651047232b82849-39488062',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_51047232bfa678_85523341',
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
	<link rel="stylesheet" type="text/css" src="templates/usuario.css"/>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('jscript');?>
/jquery.js"></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->getConfigVariable('jscript');?>
/jsTelar.js"></script>
</head>
<body>
	
	<?php }} ?>