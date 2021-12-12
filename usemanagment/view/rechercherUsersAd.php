<?php 
    session_start();
    // On teste si la variable de session existe et contient une valeur
    if(empty($_SESSION['e']) || $_SESSION['role']== "user" || $_SESSION['role']== "prof" ){
        // Si inexistante ou nulle, on redirige vers le formulaire de login
        header('Location:./../../usemanagment/view/connexion.php');
    }
    require_once "./../controlers/usercontroler.php";
    $userC = new UserC();
    $listeCourseCherche=$userC->rechercher($_POST['search']); 
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
                        <h2 style="text-align:center;">users list</h2> <br>
                        <form class="mt-5 mb-5" action="./rechercherUsersAd.php" method="POST">
                        <select id="select" style="margin-bottom :3%; width:20%;height:35px" class="form-select"  id="Categorie" name="Categorie" aria-label="Default select example">
                <option  selected>Select role</option>
                <option id="user" value="user">user(s)</option>
                <option id="prof" value="prof">prof(s)</option>
                <option id="admin" value="admin">admin(s)</option>
            </select>
                            <input style="display:inline-block; width:200px;"  class="form-control" type="hidden" id="search" name="search" placeholder="search ...." />
                            <input   class="btn btn-warning" type="submit" value="search">
                        </form>
                        <table style="border:0px solid grey;text-align:center" class="table">
                            <tr style="border-bottom: 0px solid grey;">
                                <th style="padding: 15px; border-bottom: 1px solid #ddd;text-align:center">first name</th>
                                <th style="padding: 15px; border-bottom: 1px solid #ddd;text-align:center">last name</th>
                                <th style="padding: 15px; border-bottom: 1px solid #ddd;text-align:center">email</th>
                                <th style="padding: 15px; border-bottom: 1px solid #ddd;text-align:center">date de naissance</th>
                                <th style="padding: 15px; border-bottom: 1px solid #ddd;text-align:center">role</th>
                                <th style="padding: 15px; border-bottom: 1px solid #ddd;text-align:center">etat</th>
                                <th style="padding: 15px; border-bottom: 1px solid #ddd;text-align:center">#</th>
                                
                            </tr>

                            <?php foreach($listeCourseCherche as $user) {?>
                    
                            <tr>
                                <td
                                style="padding: 15px;border-bottom: 1px solid #ddd;border-left: 0px solid #ddd;border-right: 0px solid #ddd">
                                    <?php echo $user['first_Name'] ?>
                                </td>
                                <td
                                    style="padding: 15px;border-bottom: 1px solid #ddd;border-left: 0px solid #ddd;border-right: 0px solid #ddd">
                                    <?php echo $user['last_Name'] ?>
                                </td>
                                <td
                                    style="padding: 15px;border-bottom: 1px solid #ddd;border-left: 0px solid #ddd;border-right: 0px solid #ddd">
                                    <?php echo $user['email'] ?>
                                </td>
                                <td
                                    style="padding: 15px;border-bottom: 1px solid #ddd;border-left: 0px solid #ddd;border-right: 0px solid #ddd">
                                    <?php echo $user['Date_Naissance'] ?>
                                </td>
                                <td
                                style="padding: 15px;border-bottom: 1px solid #ddd;border-left: 0px solid #ddd;border-right: 0px solid #ddd">
                                    <?php echo $user['role'] ?>
                                </td>
                                <td
                                style="padding: 15px;border-bottom: 1px solid #ddd;border-left: 0px solid #ddd;border-right: 0px solid #ddd">
                <?php if($user['bloqué']==0){ ?>
                  <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="adminblock.php?ID=<?php echo $user['ID']; ?>"><i class="far fa-update-alt me-2"></i>Bloquer</a>
                <?php }else if($user['bloqué']==1){  ?>
                <a class="btn btn-link text-success text-gradient px-3 mb-0" href="admindebloquer.php?ID=<?php echo $user['ID']; ?>"><i class="far fa-update-alt me-2"></i>Débloquer</a>
                <?php } ?>
                </td>
                                <td
                                    style="padding: 15px;border-bottom: 1px solid #ddd;border-left: 0px solid #ddd;border-right: 0px solid #ddd">
                                    
                                    <form action="./supression.php" method="POST">
                        <input class="btn btn-danger" type="submit" value="delete">
                        <input type="hidden" name="ID" value="<?=$user['ID']?>">
                    
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