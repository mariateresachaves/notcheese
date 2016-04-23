<?php
    include_once('../config/init.php');
    include_once($BASE_DIR .'database/users.php');
    if(!isset($_SESSION["idUser"])) {
        include($BASE_DIR .'templates/common/navVisitor.tpl'); // will include header_notloggedin.php
    } else {
        include($BASE_DIR .'templates/common/navVisitor.tpl'); // will include header_loggedin.php

    }
    $smarty->display('../templates/register.tpl');

