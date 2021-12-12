<?php 
    require_once "jeuxC.php";
    $jeuxC = new jeuxC();
    $jeuxC->supprimerJeux($_POST['nom_jeu']);
    header("Location: ./../../CourseManagment/view/all-games.php");

?>