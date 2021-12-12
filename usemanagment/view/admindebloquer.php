<?php
	include '../controlers/usercontroler.php';
    $userC = new UserC();
    $client=$userC->getOneUser($_GET["ID"]);
	$userC->debloquerclient($client,$_GET["ID"]);
	header('Location:all-users.php');
?>