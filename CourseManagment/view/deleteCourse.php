<?php 
    require_once "./../controllers/CourseController.php";
    if(isset($_POST['courseIDD'])){
        $CourseC = new CourseC();
        $CourseC->deleteCourse($_POST['courseIDD']);
        header("Location: ./all-courses.php");
    }


?>