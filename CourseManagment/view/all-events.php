<?php 
    session_start();
    // On teste si la variable de session existe et contient une valeur
 
    include '../controllers/ControlAdherent.php';
    $AdherentC=new AdherentC();
    $ListeAdherents=$AdherentC->afficheradherents();
    $ListeAdherents2=$AdherentC->afficheradherents2();


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
  <?php require_once "./sideBar.php" ?>
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
        <?php require_once "./../../CourseManagment/view/header.php" ?>
        <div style="height:100vh; width:95%;  background-color:white; padding:5% 5% 5% 5%"
            class="courses-area container-fluid">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 style="text-align:center;">events list</h2> <br>
                        <table style="border:0px solid grey;text-align:center" class="table">
                            <tr style="border-bottom: 0px solid grey;">
                               
                                <th style="padding: 15px; border-bottom: 1px solid #ddd;text-align:center">event id</th>
                                <th style="padding: 15px; border-bottom: 1px solid #ddd;text-align:center">event name</th>
                                <th style="padding: 15px; border-bottom: 1px solid #ddd;text-align:center">subject</th>
                                <th style="padding: 15px; border-bottom: 1px solid #ddd;text-align:center">date</th>
                                <th style="padding: 15px; border-bottom: 1px solid #ddd;text-align:center">time</th>
                                <th style="padding: 15px; border-bottom: 1px solid #ddd;text-align:center">Number participate</th>
                                <th style="padding: 15px; border-bottom: 1px solid #ddd;text-align:center">#</th>
                                <th style="padding: 15px; border-bottom: 1px solid #ddd;text-align:center">#</th>
                                
                            </tr>
                     
                                                              <?php foreach($ListeAdherents as $event) {?>
                                                      
                            <tr>

                                <td
                                    style="padding: 15px;border-bottom: 1px solid #ddd;border-left: 0px solid #ddd;border-right: 0px solid #ddd">
                                    <?php echo $event['idevent'] ?>
                                </td>
                                <td
                                    style="padding: 15px;border-bottom: 1px solid #ddd;border-left: 0px solid #ddd;border-right: 0px solid #ddd">
                                    <?php echo $event['nameevent'] ?>
                                </td>
                                <td
                                    style="padding: 15px;border-bottom: 1px solid #ddd;border-left: 0px solid #ddd;border-right: 0px solid #ddd">
                                    <?php echo $event['subject'] ?>
                                </td>
                                <td
                                style="padding: 15px;border-bottom: 1px solid #ddd;border-left: 0px solid #ddd;border-right: 0px solid #ddd">
                                    <?php echo $event['date'] ?>
                                </td>
                                <td
                                style="padding: 15px;border-bottom: 1px solid #ddd;border-left: 0px solid #ddd;border-right: 0px solid #ddd">
                                <?php echo $event['time'] ?>
                </td>
                                <td
                                style="padding: 15px;border-bottom: 1px solid #ddd;border-left: 0px solid #ddd;border-right: 0px solid #ddd">
                                <?php echo $event['numberparticipate'] ?>
                </td>
                <td  style="padding: 15px;border-bottom: 1px solid #ddd;border-left: 0px solid #ddd;border-right: 0px solid #ddd">  
                                     <form action='../../eventManagment/back mehdi/Views/ajouteradherent.php' method ='Post'>
                                    <input type="hidden" value=<?php echo $event['idevent'] ;?> name='idevent'>  
                                    <input type="hidden" value=<?php echo $event['nameevent'] ;?> name='nameevent'>  
                                    <input type="hidden" value=<?php echo $event['email'] ;?> name='email'>  
                                    <input type="hidden" value=<?php echo $event['subject'] ;?> name='subject'>  
                                    <input type="hidden" value=<?php echo $event['date'] ;?> name='date'>  
                                    <input type="hidden" value=<?php echo $event['time'] ;?> name='time'>
                                    <input type="hidden" value=<?php echo $event['numberparticipate'] ;?> name='numberparticipate'>  
                                    <input type="hidden" value=<?php echo $event['image'] ;?> name='image'>    
                                    <input type="hidden" value=<?php echo $event['lienJeu'] ;?> name='lienjeu'>    
                                    <input type="submit" class="btn btn-success" name='accept' value='accept'>
                                </form>
            </td>
                                <td
                                    style="padding: 15px;border-bottom: 1px solid #ddd;border-left: 0px solid #ddd;border-right: 0px solid #ddd">
                                    <a  class="btn btn-danger" href="../../eventManagment/back mehdi/Views/SupprimerAdherent.php?Idevent=<?php echo $event['idevent']; ?>">refuse</a>
                      </td>
                      
                        
                            </tr>
                            <?php } ?>
                    
                        </table>
                                                                  <br><br><br>
                        <!-- table 2  -->
                        <table style="border:0px solid grey;text-align:center" class="table">
                            <tr style="border-bottom: 0px solid grey;">
                               
                                <th style="padding: 15px; border-bottom: 1px solid #ddd;text-align:center">event id</th>
                                <th style="padding: 15px; border-bottom: 1px solid #ddd;text-align:center">event name</th>
                                <th style="padding: 15px; border-bottom: 1px solid #ddd;text-align:center">subject</th>
                                <th style="padding: 15px; border-bottom: 1px solid #ddd;text-align:center">date</th>
                                <th style="padding: 15px; border-bottom: 1px solid #ddd;text-align:center">time</th>
                                <th style="padding: 15px; border-bottom: 1px solid #ddd;text-align:center">Number participate</th>
                                
                            </tr>
                     
                                                              <?php foreach($ListeAdherents2 as $event) {?>
                                                      
                            <tr>

                                <td
                                    style="padding: 15px;border-bottom: 1px solid #ddd;border-left: 0px solid #ddd;border-right: 0px solid #ddd">
                                    <?php echo $event['idevent'] ?>
                                </td>
                                <td
                                    style="padding: 15px;border-bottom: 1px solid #ddd;border-left: 0px solid #ddd;border-right: 0px solid #ddd">
                                    <?php echo $event['nameevent'] ?>
                                </td>
                                <td
                                    style="padding: 15px;border-bottom: 1px solid #ddd;border-left: 0px solid #ddd;border-right: 0px solid #ddd">
                                    <?php echo $event['subject'] ?>
                                </td>
                                <td
                                style="padding: 15px;border-bottom: 1px solid #ddd;border-left: 0px solid #ddd;border-right: 0px solid #ddd">
                                    <?php echo $event['date'] ?>
                                </td>
                                <td
                                style="padding: 15px;border-bottom: 1px solid #ddd;border-left: 0px solid #ddd;border-right: 0px solid #ddd">
                                <?php echo $event['time'] ?>
                </td>
                                <td
                                style="padding: 15px;border-bottom: 1px solid #ddd;border-left: 0px solid #ddd;border-right: 0px solid #ddd">
                                <?php echo $event['numberparticipate'] ?>
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

    <script src="./../js/roleUsers.js"></script>
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