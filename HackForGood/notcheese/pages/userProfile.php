<?php
    include_once('../config/init.php');
    include_once($BASE_DIR .'database/users.php');
	
	$statment=$conn->prepare("select * FROM Users WHERE userID=?");
	$statment->execute(array($_SESSION["email"]));
	$user=$statment->fetch();
	$smarty->assign("user", $user);
	
    $smarty->display('../templates/userProfile.tpl');