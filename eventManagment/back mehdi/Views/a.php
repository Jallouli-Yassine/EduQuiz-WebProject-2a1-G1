<?php
include_once '../Model/Adherent.php';
include_once '../Model/Adherent.php';
include '../Controller/ControlAdherent.php'; 
$adherentC= new AdherentC();
$A= new Adherent($_POST['nameevent'],$_POST['email'],$_POST['subject'],$_POST['date'],$_POST['time'],$_POST['numberparticipate']);
$adherentC->ModifierAdherent($A,$_POST['idevent']);
header('Location:AfficherListeAdherents.php');
?>