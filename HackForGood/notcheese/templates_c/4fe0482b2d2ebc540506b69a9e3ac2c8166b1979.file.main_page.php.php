<?php /* Smarty version Smarty-3.1.15, created on 2016-04-23 21:41:53
         compiled from "pages\main_page.php" */ ?>
<?php /*%%SmartyHeaderCode:26766571bc720aef3d8-60532532%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4fe0482b2d2ebc540506b69a9e3ac2c8166b1979' => 
    array (
      0 => 'pages\\main_page.php',
      1 => 1461440511,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26766571bc720aef3d8-60532532',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_571bc720b0c066_78992294',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571bc720b0c066_78992294')) {function content_571bc720b0c066_78992294($_smarty_tpl) {?><<?php ?>?php
    include_once('../config/init.php');
    include_once($BASE_DIR .'database/tweets.php');

    $smarty->display($BASE_DIR .'templates/main.tpl');
?<?php ?>>
<?php }} ?>
