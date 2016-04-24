<?php
include_once('../config/init.php');

$statement = $conn->prepare("SET NAMES utf8");
$statement->execute();

$statement = $conn->prepare("SELECT Users.firstName AS firstName,
									Users.lastName AS lastName,
									Students.rate AS rate,
									Students.interests AS interests,
									Images.url AS url
							FROM Talks, Users , Students, Images
							WHERE Talks.elderID IS NULL 
							AND Images.imageID = Students.imageID
							AND Users.userID = Students.studentID
							AND Talks.studentID = Users.userID");
$statement->execute();
$talks = $statement->fetchAll();

$smarty->assign("talks", $talks);

//print_r($talks)

$smarty->display("../templates/talk_a_bit.tpl");

?>