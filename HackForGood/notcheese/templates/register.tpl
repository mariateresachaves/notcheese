{include file='common/header.tpl'}
<body class="bg-light-gray">
<section class="container register">
    <section class="register-form">
       <form action="{$BASE_URL}actions/users/register.php" method="post" enctype="multipart/form-data">
            <img src="{$BASE_URL}img/logo.png" class="img-responsive" alt="" />

			<input type="text" name="firstname" placeholder="Primeiro Nome" required class="form-control input-lg" />
			<input type="text" name="lastname" placeholder="Último Nome" required class="form-control input-lg" />
            <input type="email" name="email" placeholder="Email" required class="form-control input-lg" />
			<span class="field_error">{$ERROR_MESSAGES.email}<br></span>
			<input type="text" name="phone" placeholder="Telefone" required class="form-control input-lg" />
            <input type="password" name="password" placeholder="Password" required class="form-control input-lg" />

            <button type="submit" name="go" class="btn btn-lg btn-block btn-primary">Registe-se</button>
        </form>
        <div class="form-links">
            Quer ser um voluntário? <a href="{$BASE_URL}pages/registerVolunteer.php">Clique aqui</a>
        </div>
    </section>
</section>

{include file='common/footer.tpl'}
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="javascript/bootstrap.min.js"></script>
</body>