<?php
require_once '../Model/Adherent.php';
require '../Controller/ControlAdherent.php';
$AdherentC= new Adherent();
$A = new Adherent( $_POST['idevent']);
        $AdherentC->ModifierAdherent($A);
        header('Location:AfficherListeAdherents.php');
?>

