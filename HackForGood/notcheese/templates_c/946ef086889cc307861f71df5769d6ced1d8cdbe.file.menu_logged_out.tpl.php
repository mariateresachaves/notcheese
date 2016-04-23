<?php /* Smarty version Smarty-3.1.15, created on 2016-04-23 20:11:30
         compiled from "C:\xampp\htdocs\HackForGood\notcheese\templates\common\menu_logged_out.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27202571bbad24be8a3-34930649%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '946ef086889cc307861f71df5769d6ced1d8cdbe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\HackForGood\\notcheese\\templates\\common\\menu_logged_out.tpl',
      1 => 1461350519,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27202571bbad24be8a3-34930649',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_571bbad24c55d4_68884248',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571bbad24c55d4_68884248')) {function content_571bbad24c55d4_68884248($_smarty_tpl) {?><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/users/register.php">Register</a>
<form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/login.php" method="post">
  <input type="text" placeholder="username" name="username">
  <input type="password" placeholder="password" name="password">
  <input type="submit" value=">">
</form>
<?php }} ?>
