<?php 

    session_start();

    // On teste si la variable de session existe et contient une valeur
    if(empty($_SESSION['e']) || $_SESSION['role']== "user" || $_SESSION['role']== "prof" ){
        // Si inexistante ou nulle, on redirige vers le formulaire de login
        header('Location:./../../usemanagment/view/connexion.php');
    }

    require_once "./../controllers/CourseController.php";
    $courseC = new CourseC();
    $coursActivé=$courseC->getTrueCourses(1);
    $listeDesactivé=$courseC->getFalseCourses(0);
    $listeDeclined=$courseC->getDeclinedCourses(-1);

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
        <div style="height:100vh; width:95%;  background-color:white; padding:5% 5% 5% 5%"
            class="courses-area container-fluid">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-lg-12">
                        <h2 style="text-align:center;">pending courses</h2>
                        <table style="border:0px solid grey;text-align:center" class="table">
                            <tr style="border-bottom: 0px solid grey;">
                                <th style="padding: 15px; border-bottom: 1px solid #ddd;text-align:center">course PIC</th>
                                <th style="padding: 15px; border-bottom: 1px solid #ddd;text-align:center">courseID</th>
                                <th style="padding: 15px; border-bottom: 1px solid #ddd;text-align:center">ProfID</th>
                                <th style="padding: 15px; border-bottom: 1px solid #ddd;text-align:center">Title</th>
                                <th style="padding: 15px; border-bottom: 1px solid #ddd;text-align:center">state</th>
                                <th style="padding: 15px; border-bottom: 1px solid #ddd;text-align:center">#</th>

                            </tr>

                            <?php foreach($listeDesactivé as $Fcourse) {?>
                            <?php if( $Fcourse['video_url']!="") { ?>
                            <tr>
                                <td
                                    style="padding: 15px;border-bottom: 1px solid #ddd;border-left: 0px solid #ddd;border-right: 0px solid #ddd">
                                    <?php 
                            
                            $courseID=$Fcourse['courseID'];
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
                                <td
                                    style="padding: 15px;border-bottom: 1px solid #ddd;border-left: 0px solid #ddd;border-right: 0px solid #ddd">
                                    <?php echo $Fcourse['courseID'] ?>
                                </td>
                                <td
                                    style="padding: 15px;border-bottom: 1px solid #ddd;border-left: 0px solid #ddd;border-right: 0px solid #ddd">
                                    <?php echo $Fcourse['profID'] ?>
                                </td>
                                <td
                                    style="padding: 15px;border-bottom: 1px solid #ddd;border-left: 0px solid #ddd;border-right: 0px solid #ddd">
                                    <?php echo $Fcourse['title'] ?>
                                </td>
                                <td
                                    style="padding: 15px;border-bottom: 1px solid #ddd;border-left: 0px solid #ddd;border-right: 0px solid #ddd">
                                    <div style="padding:5px;width:100%;margin-bottom:0" class="alert alert-warning"
                                        role="alert">
                                        pending
                                    </div>
                                </td>
                                <td
                                    style="padding: 15px;border-bottom: 1px solid #ddd;border-left: 0px solid #ddd;border-right: 0px solid #ddd">
                                    <form action="./updateStateCourse.php" method="POST">
                                        <input style="float : left;margin-right:5%;margin-left:5%" class="btn btn-info"
                                            type="submit" value="ACTIVATE COURSE">
                                        <input name="courseIDp" type="hidden"
                                            value="<?php echo $Fcourse['courseID'] ?>">
                                    </form>
                                    
                                    
                                    <form action="./decline-course.php" method="post">
                                        <input style="float : left;margin-right:5%;margin-left:5% margin-right:10px"
                                            class="btn btn-danger" type="submit" value="Decline">
                                        <input name="courseIDD" type="hidden"
                                            value="<?php echo $Fcourse['courseID'] ?>">
                                    </form>


                                </td>
                            </tr>
                            <?php } ?>
                            <?php } ?>
                        </table>
                    </div>
                    <div class="col-lg-12">
                        <h2 style="text-align:center;">active courses</h2>
                        <table style="border:0px solid grey;text-align:center" class="table">
                            <tr style="border-bottom: 0px solid grey;">
                                <th style="padding: 15px; border-bottom: 1px solid #ddd;text-align:center">course PIC</th>
                                <th style="padding: 15px; border-bottom: 1px solid #ddd;text-align:center">courseID</th>
                                <th style="padding: 15px; border-bottom: 1px solid #ddd;text-align:center">ProfID</th>
                                <th style="padding: 15px; border-bottom: 1px solid #ddd;text-align:center">Title</th>
                                <th style="padding: 15px; border-bottom: 1px solid #ddd;text-align:center">state</th>

                            </tr>

                            <?php foreach($coursActivé as $Tcourse) {?>
                            <tr>
                                <td
                                    style="padding: 15px;border-bottom: 1px solid #ddd;border-left: 0px solid #ddd;border-right: 0px solid #ddd">
                                    <?php 
                            
                            $courseID=$Tcourse['courseID'];
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
                                <td
                                    style="padding: 15px;border-bottom: 1px solid #ddd;border-left: 0px solid #ddd;border-right: 0px solid #ddd">
                                    <?php echo $Tcourse['courseID'] ?>
                                </td>
                                <td
                                    style="padding: 15px;border-bottom: 1px solid #ddd;border-left: 0px solid #ddd;border-right: 0px solid #ddd">
                                    <?php echo $Tcourse['profID'] ?>
                                </td>
                                <td
                                    style="padding: 15px;border-bottom: 1px solid #ddd;border-left: 0px solid #ddd;border-right: 0px solid #ddd">
                                    <?php echo $Tcourse['title'] ?>
                                </td>
                                <td
                                    style="padding: 15px;border-bottom: 1px solid #ddd;border-left: 0px solid #ddd;border-right: 0px solid #ddd">
                                    <div style="padding:5px;width:100%;margin-bottom:0" class="alert alert-success"
                                        role="alert">
                                        accepted
                                    </div>
                                </td>

                            </tr>
                            <?php } ?>
                        </table>
                    </div>
                    <div class="col-lg-12">
                        <h2 style="text-align:center;">declined courses</h2>
                        <table style="border:0px solid grey;text-align:center" class="table">
                            <tr style="border-bottom: 0px solid grey;">
                                <th style="padding: 15px; border-bottom: 1px solid #ddd;text-align:center">course PIC</th>
                                <th style="padding: 15px; border-bottom: 1px solid #ddd;text-align:center">courseID</th>
                                <th style="padding: 15px; border-bottom: 1px solid #ddd;text-align:center">ProfID</th>
                                <th style="padding: 15px; border-bottom: 1px solid #ddd;text-align:center">Title</th>
                                <th style="padding: 15px; border-bottom: 1px solid #ddd;text-align:center">state</th>

                            </tr>

                            <?php foreach($listeDeclined as $Dcourse) {?>
                            <tr>
                                <td
                                    style="padding: 15px;border-bottom: 1px solid #ddd;border-left: 0px solid #ddd;border-right: 0px solid #ddd">
                                    <?php 
                            
                            $courseID=$Dcourse['courseID'];
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
                                <td
                                    style="padding: 15px;border-bottom: 1px solid #ddd;border-left: 0px solid #ddd;border-right: 0px solid #ddd">
                                    <?php echo $Dcourse['courseID'] ?>
                                </td>
                                <td
                                    style="padding: 15px;border-bottom: 1px solid #ddd;border-left: 0px solid #ddd;border-right: 0px solid #ddd">
                                    <?php echo $Dcourse['profID'] ?>
                                </td>
                                <td
                                    style="padding: 15px;border-bottom: 1px solid #ddd;border-left: 0px solid #ddd;border-right: 0px solid #ddd">
                                    <?php echo $Dcourse['title'] ?>
                                </td>
                                <td
                                    style="padding: 15px;border-bottom: 1px solid #ddd;border-left: 0px solid #ddd;border-right: 0px solid #ddd">
                                    <div style="padding:5px;width:100%;margin-bottom:0" class="alert alert-danger"
                                        role="alert">
                                        declined
                                    </div>
                                </td>

                            </tr>
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