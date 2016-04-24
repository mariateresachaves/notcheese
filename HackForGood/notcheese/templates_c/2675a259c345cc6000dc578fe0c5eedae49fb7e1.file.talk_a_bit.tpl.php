<?php /* Smarty version Smarty-3.1.15, created on 2016-04-24 10:46:53
         compiled from "C:\xampp\htdocs\notcheese\templates\talk_a_bit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27195571c6f54abe991-96433008%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2675a259c345cc6000dc578fe0c5eedae49fb7e1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\notcheese\\templates\\talk_a_bit.tpl',
      1 => 1461487612,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27195571c6f54abe991-96433008',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_571c6f54be2ba4_34552552',
  'variables' => 
  array (
    'USERNAME' => 0,
    'ISELDER' => 0,
    'talks' => 0,
    'talk' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571c6f54be2ba4_34552552')) {function content_571c6f54be2ba4_34552552($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php if ($_smarty_tpl->tpl_vars['USERNAME']->value) {?>
	<?php if ($_smarty_tpl->tpl_vars['ISELDER']->value) {?>
		<?php echo $_smarty_tpl->getSubTemplate ('common/navAuthenticated.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php } else { ?>
		<?php echo $_smarty_tpl->getSubTemplate ('common/navStudent.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php }?>
<?php } else { ?>
  <?php echo $_smarty_tpl->getSubTemplate ('common/navVisitor.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>
<body class="bg-light-gray">
<?php  $_smarty_tpl->tpl_vars['talk'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['talk']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['talks']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['talk']->key => $_smarty_tpl->tpl_vars['talk']->value) {
$_smarty_tpl->tpl_vars['talk']->_loop = true;
?>
<div class="media">
  <div class="media-left">
    <a href="#">
		<img class="media-object" src="<?php echo $_smarty_tpl->tpl_vars['talk']->value['url'];?>
" alt="test">
    </a>
  </div>
  <div class="media-body">
    <h4 class="media-heading"><?php echo $_smarty_tpl->tpl_vars['talk']->value['firstName'];?>
 <?php echo $_smarty_tpl->tpl_vars['talk']->value['lastName'];?>
</h4>
    <p>Classificação: <?php echo $_smarty_tpl->tpl_vars['talk']->value['rate'];?>
</p>
	<p>Interesses: <?php echo $_smarty_tpl->tpl_vars['talk']->value['interests'];?>
</p>
	<input type="submit" class="text_to_speech" value="Click me">
  </div>
</div>
<?php } ?>

<script type="text/javascript">

	function handler() {
		
		alert("hello");
		/*
		$.ajax(
			url: "../api/text_to_speech.php",
			data: "text="
		);
		*/
		
		return false;
	}

	$(document).ready( function() {
		$(".media-body > .text_to_speech").click(handler);
	});

	

</script>
</body><?php }} ?>
