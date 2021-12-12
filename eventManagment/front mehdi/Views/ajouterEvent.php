<?php

include_once '../Model/Adherent.php';
include_once '../Controller/ControlAdherent.php';
$erreur='';
$adherentC= new AdherentC();
$lienJeux=$adherentC->afficherLienJeux();
if (
    isset($_POST["nameevent"]) &&
    isset($_POST["email"]) &&
    isset($_POST["subject"]) &&
    isset($_POST["date"]) &&
    isset($_POST["time"])&&
    isset($_POST["numberparticipate"])&&
    isset($_POST["liensjeux"])
) {

    if (
        !empty($_POST["nameevent"]) &&
        !empty($_POST["email"]) &&
        !empty($_POST["subject"]) &&
        !empty($_POST["date"]) &&
        !empty($_POST["time"]) &&
        !empty($_POST["numberparticipate"])&&
        !empty($_POST["liensjeux"])
    ) { 

        $A= new Adherent($_POST["nameevent"],$_POST["email"],$_POST["subject"],$_POST["date"],$_POST["time"],$_POST["numberparticipate"],$_POST["image"],$_POST["liensjeux"]);
        $adherentC->ajouterAdherent($A);
        header('Location:AfficherListeAdherents.php');
    }
else {$erreur='Veuillez remplir le formulaire';}   
}
?>