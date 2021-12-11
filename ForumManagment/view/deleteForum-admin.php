<?php
	include '../Controllers/postController.php';
	$postC=new PostC();

$postC->supprimerpost($_POST["postid"]);
require_once "./../Controllers/mail.php";
header('Location:all-posts.php');
?>