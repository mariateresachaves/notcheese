<?php /* Smarty version Smarty-3.1.15, created on 2016-04-24 07:26:29
         compiled from "C:\xampp\htdocs\notcheese\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1917571c590538dbc2-88329804%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c0cb4bb8eb7d191852cc4bd9a34f3b916caad979' => 
    array (
      0 => 'C:\\xampp\\htdocs\\notcheese\\templates\\login.tpl',
      1 => 1461463410,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1917571c590538dbc2-88329804',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
    'FORM_VALUES' => 0,
    'ERROR_MESSAGES' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_571c59054360e3_00801564',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571c59054360e3_00801564')) {function content_571c59054360e3_00801564($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<body id="page-top" class="index">
<section class="container login">
    <section class="login-form">
        <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/login.php" method="post" enctype="multipart/form-data">
            <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
img/logo.png" class="img-responsive" alt="" value="<?php echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['email'];?>
"/>

            <input type="email" name="email" placeholder="Email" required class="form-control input-lg"  />
            <span class="field_error"><?php echo $_smarty_tpl->tpl_vars['ERROR_MESSAGES']->value['email'];?>
<br></span>
            <input type="password" name="password" placeholder="Password" required class="form-control input-lg" value="<?php echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['password'];?>
"/>
            <span class="field_error"><?php echo $_smarty_tpl->tpl_vars['ERROR_MESSAGES']->value['password'];?>
<br></span>

            <input type="checkbox" name="remember" value="1" /> Remember me<br />

            <input type="submit" value="Login">
        </form>
        <div class="form-links">
            <a href="#" class="text-primary">Create account</a> or <a href="#" class="text-primary">reset password</a>
        </div>
    </section>
</section>
<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/bootstrap.min.js"></script>

</body>
<?php }} ?>
