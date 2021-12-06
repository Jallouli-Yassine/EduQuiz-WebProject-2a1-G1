<?php
include_once "./core/formulaireC.php";


if(isset($_POST['Title']) and isset($_POST['Score'])and isset($_POST['Question']) and isset($_POST['Answer']) and isset($_POST['Answer2']) and isset($_POST['Answer3'])and isset($_POST['Answer4'])and isset($_POST['RightAnswerNumber'])and isset($_POST['image']))
{
        $formulaire=new formulaire($_POST['image'] ,$_POST['RightAnswerNumber'],$_POST['Question'] ,$_POST['Answer'] ,$_POST['Answer2'] ,$_POST['Answer3'],$_POST['Answer4'],$_POST['Score'],$_POST['Title']);
       
        $UC=new formulaireC();
        $UC->ajouterformulaire($formulaire);
        

        echo '<body onLoad="alert(\'Inscrit\')">';
        header("location:../EduQuiz/EDu-Quiz B/Quizz-assets.php");
}
else
{
        echo '<body onLoad="alert(\'Erreur\')">';
}
