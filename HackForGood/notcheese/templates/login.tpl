{include file='common/header.tpl'}
<body id="page-top" class="index">
<section class="container login">
    <section class="login-form">
        <form action="{$BASE_URL}actions/users/login.php" method="post" enctype="multipart/form-data">
            <img src="{$BASE_URL}img/logo.png" class="img-responsive" alt="" value="{$FORM_VALUES.email}"/>

            <input type="email" name="email" placeholder="Email" required class="form-control input-lg"  />
            <span class="field_error">{$ERROR_MESSAGES.email}<br></span>
            <input type="password" name="password" placeholder="Password" required class="form-control input-lg" value="{$FORM_VALUES.password}"/>
            <span class="field_error">{$ERROR_MESSAGES.password}<br></span>

            <input type="checkbox" name="remember" value="1" /> Remember me<br />

            <input type="submit" value="Login">
        </form>
        <div class="form-links">
            <a href="#" class="text-primary">Create account</a> or <a href="#" class="text-primary">reset password</a>
        </div>
    </section>
</section>
{include file='common/footer.tpl'}
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="{$BASE_URL}javascript/bootstrap.min.js"></script>

</body>
