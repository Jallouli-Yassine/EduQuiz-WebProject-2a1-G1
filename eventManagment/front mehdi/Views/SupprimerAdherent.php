<?php
include '../Controller/ControlAdherent.php';
$AdherentC= new AdherentC();
$AdherentC->SupprimerAdherent($_GET["Idevent"]);
header('Location:AfficherListeAdherents.php');
?>