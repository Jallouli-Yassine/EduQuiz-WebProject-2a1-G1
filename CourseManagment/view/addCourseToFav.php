<?php
    session_start();
    require_once "./../controllers/CourseController.php";
    if(isset($_POST['courseID'])){
        $CourseC = new CourseC();
        $courseVerif=$CourseC->verifCourseAdedToFavoriteTable($_POST['courseID'],$_SESSION['user']['ID']) ;
                               
        if($courseVerif==NULL){
        $CourseC->ajouterFav($_POST['courseID'],$_SESSION['user']['ID']);
        header("Location: ./cource.php");
        }else{
            header("Location: ./cource.php");
        }
    }
?>