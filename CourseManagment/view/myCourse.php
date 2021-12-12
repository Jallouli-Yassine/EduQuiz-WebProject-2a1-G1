<?php 

session_start();
// On teste si la variable de session existe et contient une valeur
if(empty($_SESSION['e']) || $_SESSION['role']== "user" || $_SESSION['role']== "admin" ){
    // Si inexistante ou nulle, on redirige vers le formulaire de login
    header('Location:./../../usemanagment/view/connexion.php');
}
    require_once "./../controllers/CourseController.php";
    $courseC = new CourseC();
    $myCourses= $courseC->getProfCourses(($_SESSION['user']['ID']));
 

	
    //$listeCourse=$courseC->afficherCourses();

    //$listeCourse=$courseC->afficherCourses();

?>

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>All Courses | Kiaalap - Kiaalap Admin Template</title>
    <meta name="description" content="">

    
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon
		============================================ -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
        <link rel="shortcut icon" type="image/x-icon" href="./../../EDu-Quiz B/img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="./../../EDu-Quiz B/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="./../../EDu-Quiz B/css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="./../../EDu-Quiz B/css/owl.carousel.css">
    <link rel="stylesheet" href="./../../EDu-Quiz B/css/owl.theme.css">
    <link rel="stylesheet" href="./../../EDu-Quiz B/css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="./../../EDu-Quiz B/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="./../../EDu-Quiz B/css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="./../../EDu-Quiz B/css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="./../../EDu-Quiz B/css/main.css">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="./../../EDu-Quiz B/css/educate-custon-icon.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="./../../EDu-Quiz B/css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="./../../EDu-Quiz B/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="./../../EDu-Quiz B/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="./../../EDu-Quiz B/css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="./../../EDu-Quiz B/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="./../../EDu-Quiz B/css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="./../../EDu-Quiz B/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="./../../EDu-Quiz B/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    <!-- Start Left menu area -->
    <?php require_once "./sideBar.php";?>
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <?php require_once "header.php" ?>
        <div style="height:100vh; width:95%;  background-color:white; padding:10% 10% 10% 10%" class="courses-area container-fluid">
            <div class="container-fluid">
                <div class="row">


                <a href="./../../eventManagment/front mehdi/Views/accueil.php" style="float : right;margin-right:50px;" class="btn btn-info" value="events">events</a>
 
                    <div class="col-lg-12">
                        <h2 style="text-align:center;padding:0 0 2% 0">MY COURSES</h2>
                        <table  style="border:0px solid grey;text-align:center" class="table">
                            <tr style="border-bottom: 0px solid grey;">
                                <th style="padding: 15px; border-bottom: 1px solid #ddd;text-align:center" >course PIC</th>
                                <th style="padding: 15px; border-bottom: 1px solid #ddd;text-align:center" >courseID</th>
                                <th style="padding: 15px; border-bottom: 1px solid #ddd;text-align:center" >ProfID</th>
                                <th style="padding: 15px; border-bottom: 1px solid #ddd;text-align:center" >Title</th>
                                <th style="padding: 15px; border-bottom: 1px solid #ddd;text-align:center" >state</th>
                                <th style="padding: 15px; border-bottom: 1px solid #ddd;text-align:center" >#</th>
                                <th style="padding: 15px; border-bottom: 1px solid #ddd;text-align:center" >#</th>
                            </tr>
                            <?php if( !empty($myCourses) ){ ?>
                            <?php foreach($myCourses as $course) { ?>
                               

                            <tr>
                                <td   style="padding: 15px;border-bottom: 1px solid #ddd;border-left: 0px solid #ddd;border-right: 0px solid #ddd">
                                <?php 
                            
                            $courseID=$course['courseID'];
                            include "./../connect.php";
                            $sql = "SELECT * FROM courses WHERE picture_url= $courseID.";
                            $res = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($res) > 0) {
                                while ($picture = mysqli_fetch_assoc($res)) { 
                            ?>

                                    <!--
                                        oncontextmenu="return false;"
                                    -->

                                    <img  style="height:50px;border-radius:100%" src="uploads/coursesPictures/<?=$picture['picture_url']?>" alt="">


                            <?php 
                            }
                            }else {
                                echo "<h1>no picture yet</h1>";
                            }
                            ?>
                                </td>
                                <td   style="padding: 15px;border-bottom: 1px solid #ddd;border-left: 0px solid #ddd;border-right: 0px solid #ddd">
                                    <?php echo $course["courseID"] ?>
                                </td>
                                <td  style="padding: 15px;border-bottom: 1px solid #ddd;border-left: 0px solid #ddd;border-right: 0px solid #ddd">
                                    <?php echo $course['profID'] ?>
                                </td>
                                <td  style="padding: 15px;border-bottom: 1px solid #ddd;border-left: 0px solid #ddd;border-right: 0px solid #ddd">
                                    <?php echo $course['title'] ?>
                                </td>
                                <td  style="padding: 15px;border-bottom: 1px solid #ddd;border-left: 0px solid #ddd;border-right: 0px solid #ddd">
                                <?php if($course['etat']==0) { ?>
                                    <div   style="padding:5px;width:100%;margin-bottom:0" class="alert alert-warning" role="alert">
                                    pending
                                    </div>
                                    <?php }else if($course['etat']==1){ ?>

                                    <div   style="padding:5px;width:100%;margin-bottom:0" class="alert alert-success" role="alert">
                                    accepted
                                    </div>
                                        <?php }else{ ?>
                                            <div   style="padding:5px;width:100%;margin-bottom:0" class="alert alert-danger" role="alert">
                                    declined
                                    </div>
                                            <?php } ?>
                                </td>
                                <td style="width:400px; padding: 15px;border-bottom: 1px solid #ddd;border-left: 0px solid #ddd;border-right: 0px solid #ddd">
                                    <form  action="./update-course.php" method="POST">
                                        <input style="float : right;margin-right:50px;" class="btn btn-warning" type="submit" value="update">
                                    
                                        <input type="hidden" name="courseID" value="<?=$course['courseID']?>">
                                    </form>
                                    <?php if($course['video_url']=="") { ?>
                                    <form  action="./upload-video.php" method="POST">
                                        <input style="float : right;margin-right:70px;" class="btn btn-danger" type="submit" value="must upload files">
                                        <input type="hidden" name="courseID" value="<?=$course['courseID']?>">
                                    </form>
                                    <?php } ?>
                            
                  
                          
                                </td>
                                <td style="width:400px; padding: 15px;border-bottom: 1px solid #ddd;border-left: 0px solid #ddd;border-right: 0px solid #ddd">
                                <form  action="./add-question-quiz.php" method="POST">
                                        <input  class="btn btn-danger" type="submit" value="add Question">
                                        <input type="hidden" name="idCourse" value="<?=$course['courseID']?>">
                                    </form>
                                </td>
                            </tr>
                            <?php } ?>
                            <?php } ?>
                        </table>
                    </div>

                </div>

            </div>
        </div>
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2018. All rights reserved. Template by <a
                                    href="https://colorlib.com/wp/templates/">Colorlib</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jquery
		============================================ -->
    <script src="./../../EDu-Quiz B/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="./../../EDu-Quiz B/js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="./../../EDu-Quiz B/js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="./../../EDu-Quiz B/js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="./../../EDu-Quiz B/js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="./../../EDu-Quiz B/js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="./../../EDu-Quiz B/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="./../../EDu-Quiz B/js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="./../../EDu-Quiz B/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="./../../EDu-Quiz B/js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="./../../EDu-Quiz B/js/metisMenu/metisMenu.min.js"></script>
    <script src="./../../EDu-Quiz B/js/metisMenu/metisMenu-active.js"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="./../../EDu-Quiz B/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="./../../EDu-Quiz B/js/sparkline/jquery.charts-sparkline.js"></script>
    <script src="./../../EDu-Quiz B/js/sparkline/sparkline-active.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="./../../EDu-Quiz B/js/calendar/moment.min.js"></script>
    <script src="./../../EDu-Quiz B/js/calendar/fullcalendar.min.js"></script>
    <script src="./../../EDu-Quiz B/js/calendar/fullcalendar-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="./../../EDu-Quiz B/js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="./../../EDu-Quiz B/js/main.js"></script>
    <!-- tawk chat JS
		============================================ -->
    <script src="./../../EDu-Quiz B/js/tawk-chat.js"></script>
</body>

</html>