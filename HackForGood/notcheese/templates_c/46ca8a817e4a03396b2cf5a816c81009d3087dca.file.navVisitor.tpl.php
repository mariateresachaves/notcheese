<?php /* Smarty version Smarty-3.1.15, created on 2016-04-23 22:03:41
         compiled from "C:\xampp\htdocs\HackForGood\notcheese\templates\common\navVisitor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12682571bbd26162021-85231826%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46ca8a817e4a03396b2cf5a816c81009d3087dca' => 
    array (
      0 => 'C:\\xampp\\htdocs\\HackForGood\\notcheese\\templates\\common\\navVisitor.tpl',
      1 => 1461441811,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12682571bbd26162021-85231826',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_571bbd26164583_35682553',
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571bbd26164583_35682553')) {function content_571bbd26164583_35682553($_smarty_tpl) {?><!-- Navigation -->
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
pages/register.php">Registo</a>
			<a class="page-scroll" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/login.php">Login</a>
		</div>
	</div>
</nav>
<?php }} ?>
