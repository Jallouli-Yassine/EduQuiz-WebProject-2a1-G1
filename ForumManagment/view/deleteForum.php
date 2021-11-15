<?php
	include '../Controller/PostC.php';
	$postC=new PostC();
	$postC->supprimerpost($_GET["post"]);
	header('Location:displayForum.php');
?>