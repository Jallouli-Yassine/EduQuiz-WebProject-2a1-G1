<?php
include_once "core/formulaireC.php";
include_once "entites/formulaire.php";
    $C = new formulaireC();
    $C->getNextQuiz($_GET["id"]);
    //header('about.php');      

    
?>