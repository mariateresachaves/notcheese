<?php /* Smarty version Smarty-3.1.15, created on 2016-04-24 03:47:42
         compiled from "C:\xampp\htdocs\notcheese\templates\registerVolunteer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:568571bec3433e5e0-78721853%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3b55c1481d4d7ba633722530afb48bb48ec3344' => 
    array (
      0 => 'C:\\xampp\\htdocs\\notcheese\\templates\\registerVolunteer.tpl',
      1 => 1461462447,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '568571bec3433e5e0-78721853',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_571bec343d0b02_53370861',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'ERROR_MESSAGES' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571bec343d0b02_53370861')) {function content_571bec343d0b02_53370861($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<body class="bg-light-gray">
<section class="container register">
    <section class="register-form">
       <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/users/registerVolunteer.php" method="post" enctype="multipart/form-data">
            <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
img/logo.png" class="img-responsive" alt="" />

			<input type="text" name="firstname" placeholder="Primeiro Nome" required class="form-control input-lg" />
			<input type="text" name="lastname" placeholder="Último Nome" required class="form-control input-lg" />
            <input type="email" name="email" placeholder="Email" required class="form-control input-lg" />
			<span class="field_error"><?php echo $_smarty_tpl->tpl_vars['ERROR_MESSAGES']->value['email'];?>
<br></span>
			<input type="text" name="phone" placeholder="Telefone" required class="form-control input-lg" />
			<input type="text" name="interest" placeholder="Interesses" required class="form-control input-lg" />
            <input type="password" name="password" placeholder="Password" required class="form-control input-lg" />

			<label>Photo:<br>
				<input type="file" name="photo">
			</label><br>

            <button type="submit" name="go" class="btn btn-lg btn-block btn-primary">Registe-se</button>
        </form>
    </section>
</section>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="javascript/bootstrap.min.js"></script>
</body><?php }} ?>
