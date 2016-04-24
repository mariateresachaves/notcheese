<?php /* Smarty version Smarty-3.1.15, created on 2016-04-24 11:39:38
         compiled from "C:\xampp\htdocs\HackForGood\notcheese\templates\common\navVisitor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28875571c945adeaaa5-37904064%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46ca8a817e4a03396b2cf5a816c81009d3087dca' => 
    array (
      0 => 'C:\\xampp\\htdocs\\HackForGood\\notcheese\\templates\\common\\navVisitor.tpl',
      1 => 1461489903,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28875571c945adeaaa5-37904064',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_571c945adf4881_09540186',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571c945adf4881_09540186')) {function content_571c945adf4881_09540186($_smarty_tpl) {?><!-- Navigation -->
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
pages/main_page.php">
				<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
img/logos/NaCasaAoLado_v04.png" alt="Na Porta ao Lado Logo" width="45" height="45">
				<div class="navbar-name">
					<h3 class="yellow-logo">Na Porta</h3>
					<h3 class="page-scroll grey-logo">ao Lado</h3>
				</div>

			</a>
		</div>
		<div class="navbar-right">
			<a class="page-scroll btn header register-btn" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/register.php"><i class="material-icons">person_add</i><strong>Registo</strong></a>
			<a class="page-scroll btn header login-btn" href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/login.php"><i class="material-icons">lock</i><strong><strong>Entrar</strong></a>
		</div>
	</div>

</nav>
<?php }} ?>
