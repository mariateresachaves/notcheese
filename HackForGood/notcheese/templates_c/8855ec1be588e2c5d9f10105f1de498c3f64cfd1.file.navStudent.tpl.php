<?php /* Smarty version Smarty-3.1.15, created on 2016-04-24 08:34:28
         compiled from "C:\xampp\htdocs\notcheese\templates\common\navStudent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14538571c68aa6d6540-27379566%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8855ec1be588e2c5d9f10105f1de498c3f64cfd1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\notcheese\\templates\\common\\navStudent.tpl',
      1 => 1461479666,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14538571c68aa6d6540-27379566',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_571c68aa6f0157_01581111',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571c68aa6f0157_01581111')) {function content_571c68aa6f0157_01581111($_smarty_tpl) {?><!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header page-scroll">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand page-scroll" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/main_page.php">Na Porta ao Lado</a>
			<a class="page-scroll" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/userProfile.php">Perfil</a>
			<a class="page-scroll" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/logout.php">Logout</a>
		</div>
	</div>
</nav>
<?php }} ?>
