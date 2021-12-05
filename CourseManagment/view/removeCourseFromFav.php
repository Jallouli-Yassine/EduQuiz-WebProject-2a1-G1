<?php
    require_once "./../controllers/CourseController.php";
    if(isset($_POST['courseID'])){
        $CourseC = new CourseC();
        $courseVerif=$CourseC->verifCourseAdedToFavoriteTable($_POST['courseID'],5) ;
                               
        if(!$courseVerif==NULL){
        $CourseC->deleteFromFav($_POST['courseID'],5);
        header("Location: ./cource.php");
        }else{
            header("Location: ./cource.php");
        }
    }
?>