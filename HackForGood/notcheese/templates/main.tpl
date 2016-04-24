{include file='common/header.tpl'}
{if $USERNAME}
    {if $ISELDER}
        {include file='common/navAuthenticated.tpl'}
    {else}
        {include file='common/navStudent.tpl'}
    {/if}
{else}
    {include file='common/navVisitor.tpl'}
{/if}

<body id="page-top" class="index">

<!-- Header -->
<header>
    <div class="container">
        <div class="intro-text">
            <div class="intro-lead-in"></div>
            <div class="intro-heading">Na Porta ao Lado</div>
        </div>
    </div>
</header>
<!-- Portfolio Grid Section -->
<section id="portfolio" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-2 portfolio-item day_topic">
                <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="{$BASE_URL}img/portfolio/topico_dia.jpg" class="img-responsive" alt="">
                    </a>
            </div>
            <div class="col-md-10">
                <div id="day-topic">
                    <h4>Tópico do Dia</h4>
                    <p class="text-muted">Como os computadores influenciam a minha vida?</p>
                    <div class="navbar-right">
                        <a class="page-scroll btn play-btn" href="{$BASE_URL}pages/register.php"><i class="material-icons md-36">play_circle_outline</i></a>
                    </div>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="{$BASE_URL}img/portfolio/conversa.jpg" class="img-responsive" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>À Conversa</h4>
                    <p class="text-muted">Porque nunca é demasiado tarde para aprender...</p>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 portfolio-item">
                <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="{$BASE_URL}img/portfolio/tree.jpg" class="img-responsive" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>O Saber Não Ocupa Lugar</h4>
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
                    <img src="{$BASE_URL}img/portfolio/tarefas.jpg" class="img-responsive" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>Toma lá, Dá cá</h4>
                    <p class="text-muted">Um escravo à sua disposição</p>
                </div>
            </div>

        </div>
    </div>
</section>

{include file='common/footer.tpl'}

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

</html>