<?php /* Smarty version Smarty-3.1.15, created on 2016-04-24 11:44:14
         compiled from "C:\xampp\htdocs\HackForGood\notcheese\templates\register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31590571c956eaaeb16-90772287%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c99f6eabf8c86a2691e3221c20b5164916c1e1a1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\HackForGood\\notcheese\\templates\\register.tpl',
      1 => 1461488202,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31590571c956eaaeb16-90772287',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
    'ERROR_MESSAGES' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_571c956ead5a60_20618729',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571c956ead5a60_20618729')) {function content_571c956ead5a60_20618729($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<body class="bg-light-gray">
<section class="container register">
    <section class="register-form">
       <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/register.php" method="post" enctype="multipart/form-data">
            <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
img/logo.png" class="img-responsive" alt="" />

			<input type="text" name="firstname" placeholder="Primeiro Nome" required class="form-control input-lg" />
			<input type="text" name="lastname" placeholder="Último Nome" required class="form-control input-lg" />
            <input type="email" name="email" placeholder="Email" required class="form-control input-lg" />
			<span class="field_error"><?php echo $_smarty_tpl->tpl_vars['ERROR_MESSAGES']->value['email'];?>
<br></span>
			<input type="text" name="phone" placeholder="Telefone" required class="form-control input-lg" />
            <input type="password" name="password" placeholder="Password" required class="form-control input-lg" />

            <button type="submit" name="go" class="btn btn-lg btn-block btn-primary">Registe-se</button>
        </form>
        <div class="form-links">
            Quer ser um voluntário? <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/registerVolunteer.php">Clique aqui</a>
        </div>
    </section>
</section>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="javascript/bootstrap.min.js"></script>
</body><?php }} ?>
