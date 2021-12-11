<?php 
    require_once "./../controlers/usercontroler.php";
    $userC = new UserC();
    $userC->supprimeruser($_POST['ID']);
    header("Location: ./affichage.php");

?>
