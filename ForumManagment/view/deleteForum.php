<?php
	include '../Controllers/postController.php';
	$postC=new PostC();

$postC->supprimerpost($_GET["idpost"]);
header('Location:addPost.php');
?>