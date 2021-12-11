<?php
// On prolonge la session
session_start();
// On teste si la variable de session existe et contient une valeur
if(empty($_SESSION['e'])){
    // Si inexistante ou nulle, on redirige vers le formulaire de login
    header('Location: connexion.php');
}
?>
<?php 
    require_once "./../controlers/usercontroler.php";
    $userC = new UserC();
    $listeUsers = $userC->afficherUser();
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Etrain</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./../../css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="./../../css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="./../../css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="./../../css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="./../../css/flaticon.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="./../../css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="./../../css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="./../../css/style.css">
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu single_page_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a style="width: 135px;" class="navbar-brand logo_1" href="index.html"> <img
                                src="../../img/EduQuizWhite.png" alt="logo"> </a>
                        <a style="width: 135px;" class="navbar-brand logo_2" href="index.html"> <img
                                src="../../img/EduQuiz.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item ">
                                    <a class="nav-link" href="index.html">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="about.html">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="cource.html">Courses</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="cource.html">Events</a>
                                </li>
                                <!--
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="blog.html" id="navbarDropdown"
                                        role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Pages
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="single-blog.html">Single blog</a>
                                        <a class="dropdown-item" href="elements.html">Elements</a>
                                    </div>
                                </li>
                                -->

                                <li class="d-none d-lg-block">
                                    
                                <form action="./deconnexion.php" method="post">
                     <input class="btn btn-danger mt-5" type="submit" value="Déconnexion">
                     </form>                                   </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
   
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!--::review_part start::-->
    <section class="special_cource padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                    
                    <h2>User List</h2> 

                    </div>
                </div>
            </div>

            <form class="mt-5 mb-5" action="./rechercher.php" method="POST">
            <select id="select" style="margin-bottom :3%; width:20%" class="form-select"  id="Categorie" name="Categorie" aria-label="Default select example">
                <option  selected>Select role</option>
                <option id="user" value="user">user(s)</option>
                <option id="prof" value="prof">prof(s)</option>
                <option id="admin" value="admin">admin(s)</option>
            </select>
                            <input style="display:inline-block; width:200px;"  class="form-control" type="hidden" id="search" name="search" placeholder="search ...." />
                            <input   class="btn btn-outline-warning" type="submit" value="search">
                        </form>
            <div class="row">
                <div class="col-lg-12">
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Birth Date</th>
                    <th>Email</th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                <?php foreach($listeUsers as $user) { ?>
                <tr>
                 <td>
                     <?php echo $user['ID'] ?>
                 </td>   
                 <td>
                     <?php echo $user['first_Name'] ?>
                 </td>   
                 <td>
                     <?php echo $user['last_Name'] ?>
                 </td>   
                 <td>
                     <?php echo $user['Date_Naissance'] ?>
                 </td>   
                 <td>
                     <?php echo $user['email'] ?>
                 </td>   
                 <td>
                 <form action="./supression.php" method="POST">
                        <input class="btn btn-danger" type="submit" value="delete">
                        <input type="hidden" name="ID" value="<?=$user['ID']?>">
                    </form>
                 </td>
                 <td>
                    <form action="./modifieruser.php" method="POST">
                        <input class="btn btn-warning" type="submit" value="update">
                        <input type="hidden" name="ID" value="<?=$user['ID']?>">
                    </form>
                </td>
                 <td>
                     <?php if($user['bloqué']==0){ ?>
                 <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="adminblock.php?ID=<?php echo $user['ID']; ?>"><i class="far fa-update-alt me-2"></i>Bloquer</a>
                <?php }else if($user['bloqué']==1){  ?>
                    <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="admindebloquer.php?ID=<?php echo $user['ID']; ?>"><i class="far fa-update-alt me-2"></i>Débloquer</a>
                    <?php } }?>
                </td>
               </tr>
         
                

            </table>
                </div>
            </div>
        </div>
    </section>
    

    <!-- footer part start-->
    <footer class="footer-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-6 col-md-4 col-xl-3">
                    <div class="single-footer-widget footer_1">
                        <a href="index.html"> <img src="img/logo.png" alt=""> </a>
                        <p>But when shot real her. Chamber her one visite removal six
                            sending himself boys scot exquisite existend an </p>
                        <p>But when shot real her hamber her </p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="single-footer-widget footer_2">
                        <h4>Newsletter</h4>
                        <p>Stay updated with our latest trends Seed heaven so said place winged over given forth fruit.
                        </p>
                        <form action="#">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder='Enter email address'
                                        onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Enter email address'">
                                    <div class="input-group-append">
                                        <button class="btn btn_1" type="button"><i class="ti-angle-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="social_icon">
                            <a href="#"> <i class="ti-facebook"></i> </a>
                            <a href="#"> <i class="ti-twitter-alt"></i> </a>
                            <a href="#"> <i class="ti-instagram"></i> </a>
                            <a href="#"> <i class="ti-skype"></i> </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-md-4">
                    <div class="single-footer-widget footer_2">
                        <h4>Contact us</h4>
                        <div class="contact_info">
                            <p><span> Address :</span> Hath of it fly signs bear be one blessed after </p>
                            <p><span> Phone :</span> +2 36 265 (8060)</p>
                            <p><span> Email : </span>info@colorlib.com </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="copyright_part_text text-center">
                        <div class="row">
                            <div class="col-lg-12">
                                <p class="footer-text m-0">
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright &copy;
                                    <script>document.write(new Date().getFullYear());</script> All rights reserved |
                                    This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a
                                        href="https://colorlib.com" target="_blank">Colorlib</a>.Downloaded from <a
                                        href="https://themeslab.org/" target="_blank">Themeslab</a>
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer part end-->

    <!-- jquery plugins here-->
    <!-- jquery -->

    <!-- popper js -->
    <script src="./../../js/roleUsers.js"></script>
    <script src="./../../js/popper.min.js"></script>

    <!-- bootstrap js -->
    <script src="./../../js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="./../../js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="./../../js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="./../../js/masonry.pkgd.js"></script>
    <!-- particles js -->
    <script src="./../../js/owl.carousel.min.js"></script>
    <script src="./../../js/jquery.nice-select.min.js"></script>
    <!-- swiper js -->
    <script src="./../../js/slick.min.js"></script>
    <script src="./../../js/jquery.counterup.min.js"></script>
    <script src="./../../js/waypoints.min.js"></script>
    <!-- custom js -->
    <script src="./../../js/custom.js"></script>
</body>

</html>