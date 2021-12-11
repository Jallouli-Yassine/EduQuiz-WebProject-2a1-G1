<?php
	include '../controlers/usercontroler.php';
    $userC = new UserC();
    $client=$userC->getOneUser($_GET["ID"]);
	$userC->bloquerclient($client,$_GET["ID"]);
	require_once "./../controlers/maildeblock.php";
	header('Location:affichage.php');
?>