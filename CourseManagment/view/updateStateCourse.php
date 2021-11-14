 <?php 
      require_once "./../controllers/CourseController.php";
  if(isset($_POST['courseIDp']))
  {
      /*
      $course=null;
      $courseC = new CourseC();
      $course = $courseC->returnCourse($_POST['courseIDp']);
      $courseC->activeStateCourse($course);
     */
    
    $courseC = new CourseC();
    $courseC->activeStateCourse($_POST['courseIDp']);
    header("Location:./all-courses");
  }

 ?>
