<?php

    include('templates/head.php');
    if(!isset($_SESSION["idUser"])) {
        include('templates/navVisitor.php'); // will include header_notloggedin.php
        //include('pages/index-visitor.php');
    } else {
        //include('templates/navAuthenticated.php'); // will include header_loggedin.php
        //include('templates/feed.php');

    }

    include('pages/main_page.php');




