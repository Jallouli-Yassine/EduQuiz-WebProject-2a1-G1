<?PHP
include_once "C:/xampp/htdocs/EduQuiz/core/formulaireC.php";

    $UC=new formulaireC();
    $UC->supprimerformulaire($_POST["id"]);
    header("location:../EduQuiz/EDu-Quiz B/Quizz-assets.php");

?>