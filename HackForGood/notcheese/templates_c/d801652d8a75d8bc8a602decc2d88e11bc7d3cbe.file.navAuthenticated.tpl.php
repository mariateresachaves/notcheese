<?php /* Smarty version Smarty-3.1.15, created on 2016-04-24 07:28:56
         compiled from "C:\xampp\htdocs\notcheese\templates\common\navAuthenticated.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14049571c597c23dba0-97735207%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd801652d8a75d8bc8a602decc2d88e11bc7d3cbe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\notcheese\\templates\\common\\navAuthenticated.tpl',
      1 => 1461475734,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14049571c597c23dba0-97735207',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_571c597c2d3ac1_89076638',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571c597c2d3ac1_89076638')) {function content_571c597c2d3ac1_89076638($_smarty_tpl) {?><!-- Navigation -->
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
actions/users/logout.php">Logout</a>
		</div>
	</div>
</nav>
<?php }} ?>
