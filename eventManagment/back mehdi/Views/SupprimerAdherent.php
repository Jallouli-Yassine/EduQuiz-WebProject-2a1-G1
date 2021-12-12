<?php
include '../Controller/ControlAdherent.php';
$AdherentC= new AdherentC();
$AdherentC->SupprimerAdherent($_GET["Idevent"]);
header('Location:../../../CourseManagment/view/all-events.php');
?>