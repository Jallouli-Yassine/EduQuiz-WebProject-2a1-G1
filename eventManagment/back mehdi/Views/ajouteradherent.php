<?php
include_once '../Model/Adherent.php';

include_once '../Controller/ControlAdherent.php';
$erreur='';
$adherentC= new AdherentC();
if (
    isset($_POST["nameevent"]) &&
    isset($_POST["email"]) &&
    isset($_POST["subject"]) &&
    isset($_POST["date"]) &&
    isset($_POST["time"])&&
    isset($_POST["numberparticipate"])&&
    isset($_POST["image"])&&
    isset($_POST["lienjeu"])
) {

    if (
        !empty($_POST["nameevent"]) &&
        !empty($_POST["email"]) &&
        !empty($_POST["subject"]) &&
        !empty($_POST["date"]) &&
        !empty($_POST["time"]) &&
        !empty($_POST["numberparticipate"])&&
        !empty($_POST["image"])&&
        !empty($_POST["lienjeu"])
    ) { 

        $A= new Adherent( $_POST["nameevent"],$_POST["email"],$_POST["subject"],$_POST["date"],$_POST["time"],$_POST["numberparticipate"],$_POST["image"],$_POST['lienjeu']);
        $adherentC->ajouterAdherent2($A);
        $adherentC->SupprimerAdherent($_POST["idevent"]);
        include_once '../ooo/mail.php';
        
        header('Location:../../../CourseManagment/view/all-events.php');
    }
else {$erreur='Veuillez remplir le formulaire';}   
}
?>


