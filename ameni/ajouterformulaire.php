<?php
include_once "./core/formulaireC.php";

//echo $_POST['courseID'];

if(
 isset($_POST['Title'])  &&
 isset($_POST['Score']) &&
 isset($_POST['Question'])  &&
 isset($_POST['courseID'])  &&
 isset($_POST['Answer'])  &&
 isset($_POST['Answer2'])  &&
 isset($_POST['Answer3']) &&
 isset($_POST['Answer4']) &&
 isset($_POST['RightAnswerNumber']) &&
 isset($_POST['image']) &&
 isset($_POST['courseID']))
{
$formulaire=new formulaire(
        $_POST['courseID'],        
        $_POST['Title'],
        $_POST['Score'],        
        $_POST['Question'],
        $_POST['Answer'],
        $_POST['Answer2'],
        $_POST['Answer3'],
        $_POST['Answer4'],
        $_POST['RightAnswerNumber'],
        $_POST['image'],
);
       
        $UC=new formulaireC();
        $UC->ajouterformulaire($formulaire);
        

        //echo '<body onLoad="alert(\'Inscrit\')">';
       header("location:./../CourseManagment/view/myCourse.php");
}
else
{
        echo '<body onLoad="alert(\'Erreur\')">';
}
