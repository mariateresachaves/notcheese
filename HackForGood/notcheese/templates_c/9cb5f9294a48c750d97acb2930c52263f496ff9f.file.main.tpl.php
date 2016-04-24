<?php /* Smarty version Smarty-3.1.15, created on 2016-04-24 08:33:14
         compiled from "C:\xampp\htdocs\notcheese\templates\main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12817571c5370dc4929-65934018%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9cb5f9294a48c750d97acb2930c52263f496ff9f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\notcheese\\templates\\main.tpl',
      1 => 1461479587,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12817571c5370dc4929-65934018',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_571c5370f00a56_93115690',
  'variables' => 
  array (
    'USERNAME' => 0,
    'ISELDER' => 0,
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571c5370f00a56_93115690')) {function content_571c5370f00a56_93115690($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php if ($_smarty_tpl->tpl_vars['USERNAME']->value) {?>
	<?php if ($_smarty_tpl->tpl_vars['ISELDER']->value) {?>
		<?php echo $_smarty_tpl->getSubTemplate ('common/navAuthenticated.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php } else { ?>
		<?php echo $_smarty_tpl->getSubTemplate ('common/navStudent.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php }?>
<?php } else { ?>
  <?php echo $_smarty_tpl->getSubTemplate ('common/navVisitor.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>
<body id="page-top" class="index">

<!-- Header -->
<header>
    <div class="container">
        <div class="intro-text">
            <div class="intro-lead-in">Na Porta ao Lado!</div>
            <div class="intro-heading">Subtitulo</div>
        </div>
    </div>
</header>

<!-- Portfolio Grid Section -->
<section id="portfolio" class="bg-light-gray">
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Seleccione o que pretende</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
img/portfolio/roundicons.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>À Conversa</h4>
                        <p class="text-muted">Quer conversar com um voluntário?</p>
                </div>
            </div>
        </div>



        <div class="row">
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
img/portfolio/roundicons.png" class="img-responsive" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>À Conversa</h4>
                    <p class="text-muted">Quer conversar com um voluntário?</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
img/portfolio/startup-framework.png" class="img-responsive" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Formação</h4>
                    <p class="text-muted">Porque nunca é demasiado tarde para aprender...</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
img/portfolio/treehouse.png" class="img-responsive" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Toma lá, Dá cá</h4>
                    <p class="text-muted">Um escravo à sua disposição</p>
                </div>
            </div>

        </div>
    </div>
</section>

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<!-- jQuery -->
<script src="javascript/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="javascript/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="javascript/classie.js"></script>
<script src="javascript/cbpAnimatedHeader.js"></script>

<!-- Contact Form JavaScript -->
<script src="javascript/jqBootstrapValidation.js"></script>
<script src="javascript/contact_me.js"></script>

<!-- Custom Theme JavaScript -->
<script src="javascript/agency.js"></script>

</body>

</html><?php }} ?>
