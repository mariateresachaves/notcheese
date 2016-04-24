<?php /* Smarty version Smarty-3.1.15, created on 2016-04-23 23:05:50
         compiled from "C:\xampp\htdocs\notcheese\templates\common\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6015571be3aed95742-84224376%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27f39eaca9f208a73e25322aed5120379e751193' => 
    array (
      0 => 'C:\\xampp\\htdocs\\notcheese\\templates\\common\\header.tpl',
      1 => 1461442624,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6015571be3aed95742-84224376',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
    'USERNAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_571be3aedffc26_92221374',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571be3aedffc26_92221374')) {function content_571be3aedffc26_92221374($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Na Porta ao Lado</title>

  <!-- Bootstrap Core CSS -->
  <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/css/agency.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>
<?php if ($_smarty_tpl->tpl_vars['USERNAME']->value) {?>
  <?php echo $_smarty_tpl->getSubTemplate ('common/navVisitor.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>
  <?php echo $_smarty_tpl->getSubTemplate ('common/navVisitor.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>


<?php }} ?>
