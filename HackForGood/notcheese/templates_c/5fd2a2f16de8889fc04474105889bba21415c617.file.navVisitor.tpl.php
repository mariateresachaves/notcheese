<?php /* Smarty version Smarty-3.1.15, created on 2016-04-24 07:26:26
         compiled from "C:\xampp\htdocs\notcheese\templates\common\navVisitor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1398571c59029b78f5-05710100%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5fd2a2f16de8889fc04474105889bba21415c617' => 
    array (
      0 => 'C:\\xampp\\htdocs\\notcheese\\templates\\common\\navVisitor.tpl',
      1 => 1461442624,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1398571c59029b78f5-05710100',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_571c59029e1cd5_29648006',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571c59029e1cd5_29648006')) {function content_571c59029e1cd5_29648006($_smarty_tpl) {?><!-- Navigation -->
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
