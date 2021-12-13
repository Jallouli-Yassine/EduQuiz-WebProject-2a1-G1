<?PHP
include_once "./core/formulaireC.php";

    $UC=new formulaireC();
    $UC->supprimerformulaire($_POST["id"]);
    header("location:../CourseManagment/view/myCourse.php");

?>