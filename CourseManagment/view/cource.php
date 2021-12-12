
<?php 
    session_start();
    // On teste si la variable de session existe et contient une valeur
    if(empty($_SESSION['e'])|| $_SESSION['role']!= "user"){
        // Si inexistante ou nulle, on redirige vers le formulaire de login
        header('Location:./../../usemanagment/view/connexion.php');
    }
    require_once "./../controllers/CourseController.php";
    $courseC = new CourseC();
    $listeCourse=$courseC->getTrueCourses(1);
    //$listeCourse=$courseC->afficherCourses();

    //echo($_SESSION['user']['ID']);
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
    <link rel="stylesheet" href="./../../css/filtreCourse.css">

</head>

<body>
<?php require_once "./userHeader.php" ?>
    <!-- Header part end-->
    <!-- Header part end-->

    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Our Courses</h2>
                            <p>Home<span>/</span>Courses</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!--::review_part start::-->
    
    <section style="margin-bottom : 10%" class="special_cource padding_top">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <h2>All Courses</h2>
                    </div>
                </div>
            </div>
            <center>
    
              
                        <div class="btn-group btn-group-lg mb-5" role="group" aria-label="Basic example">
                            <button type="button" onclick="filtre('course')" name="prog"
                                class="btn btn-primary">all</button>
                            <button type="button" onclick="filtre('programation')" name="prog"
                                class="btn btn-primary">programation</button>
                            <button type="button" onclick="filtre('math')" name="math"
                                class="btn btn-primary">math</button>
                            <button type="button" onclick="filtre('design')" name="design"
                                class="btn btn-primary">design</button>
                            <button type="button" onclick="filtre('photography')" name="design"
                                class="btn btn-primary">photography</button>
                        </div>

                        <form class="mt-5 mb-5" action="./rechercher.php" method="GET">
                            <input style="display:inline-block; width:200px;"  class="form-control" type="text" name="search" placeholder="search ...." />
                            <input   class="btn btn-outline-warning" type="submit" value="search">
                        </form>
            </center>
            <!-- Large -->

            <!-- BEGIN NEW -->

            <!-- END NEW -->

            <div style="height:200vh;" class="row">
                <?php foreach ($listeCourse as $course) {   ?>
                <div style="height:100px" class="col-lg-4 course <?php echo $course['categorie']?>">
                    <div style="margin-bottom: 5%; height: 650px !important;" class="single_special_cource">
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

                        <img style="height:70%" src="uploads/coursesPictures/<?=$picture['picture_url']?>" alt="">

                        <?php 
                            }
                            }else {
                                echo "<h1>no picture yet</h1>";
                            }
                            ?>

                        <div class="special_cource_text">
                            <div class="row">

                                <div class="col-8">
                                    <form action="./course-details.php" method="post">
                                        <button href="course-details.php" class="btn_4">
                                            <?php echo $course['categorie'] ?>
                                        </button>
                                        <input type="hidden" value="<?php echo $course['courseID'] ?>" name="courseID"
                                            id="">
                                        <input type="hidden" value="<?php echo $course['profID'] ?>" name="profID"
                                            id="">
                                        <input type="hidden" value="<?php echo $course['vidExt'] ?>" name="vidExt"
                                            id="">
                                    </form>
                                </div>

                                <div class="col-4">
                                    <h4 style="padding-bottom:50px">
                                        <?php echo $course['price'] ." DT" ?>
                                    </h4>
                                </div>
                            </div>

                            <a href="./../../course-details.php">
                                <h3>
                                    <?php echo $course['title'] ?>
                                </h3>
                            </a>

                            <p>
                                <?php echo $course['Descrip'] ?>
                            </p>
                            <?php 
                                $courseVerif=$courseC->verifCourseAdedToFavoriteTable($course['courseID'],$_SESSION['user']['ID']);
                               
                                if($courseVerif==NULL){ ?>
                            <form action="./addCourseToFav.php" method="post">
                            <input type="hidden" value="<?php echo $course['courseID'] ?>" name="courseID" id="">
                                <button style="margin-left:77%" class="btn btn-light">
                                     <ion-icon  size="large" name="heart-outline"></ion-icon>
                                </button>
                            </form>
                          
                            <?php }else{ ?>
                                <form action="./removeCourseFromFav.php" method="post">
                                   <input type="hidden" value="<?php echo $course['courseID'] ?>" name="courseID" id="">
                                <button style="margin-left:77%" class="btn btn-danger">
                                     <ion-icon  size="large" name="heart-dislike-outline"></ion-icon>
                                </button>
                            </form>
                          
                                <?php } ?>

                            <div class="author_info">
                                <div class="author_img">
                                    <img src="./../../img/author/author_1.png" alt="">
                                    <div class="author_info_text">
               
                                           <br>
                                           <?php
                                            if (isset($_POST['profID'])){
                                                $prof = $courseC->getOneProf($_POST['profID']);
                                        ?>
                                        <h5><a href="#"><?php echo $prof['first_Name'] ?></a></h5>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="author_rating">
                                    <div class="rating">
                                        <a href="#"><img src="./../../img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="./../../img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="./../../img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="./../../img/icon/color_star.svg" alt=""></a>
                                        <a href="#"><img src="./../../img/icon/star.svg" alt=""></a>
                                    </div>
                                    <p>3.8 Ratings</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <?php } ?>
            </div>

         
        </div>
    </section>
    <!--::blog_part end::-->

    <!--::review_part start::-->
    <section class="testimonial_part section_padding">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <p>tesimonials</p>
                        <h2>Happy Students</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="textimonial_iner owl-carousel">
                        <div class="testimonial_slider">
                            <div class="row">
                                <div class="col-lg-8 col-xl-4 col-sm-8 align-self-center">
                                    <div class="testimonial_slider_text">
                                        <p>Behold place was a multiply creeping creature his domin to thiren open void
                                            hath herb divided divide creepeth living shall i call beginning
                                            third sea itself set</p>
                                        <h4>Michel Hashale</h4>
                                        <h5> Sr. Web designer</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-2 col-sm-4">
                                    <div class="testimonial_slider_img">
                                        <img src="./../../img/testimonial_img_1.png" alt="#">
                                    </div>
                                </div>
                                <div class="col-xl-4 d-none d-xl-block">
                                    <div class="testimonial_slider_text">
                                        <p>Behold place was a multiply creeping creature his domin to thiren open void
                                            hath herb divided divide creepeth living shall i call beginning
                                            third sea itself set</p>
                                        <h4>Michel Hashale</h4>
                                        <h5> Sr. Web designer</h5>
                                    </div>
                                </div>
                                <div class="col-xl-2 d-none d-xl-block">
                                    <div class="testimonial_slider_img">
                                        <img src="./../../img/testimonial_img_1.png" alt="#">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial_slider">
                            <div class="row">
                                <div class="col-lg-8 col-xl-4 col-sm-8 align-self-center">
                                    <div class="testimonial_slider_text">
                                        <p>Behold place was a multiply creeping creature his domin to thiren open void
                                            hath herb divided divide creepeth living shall i call beginning
                                            third sea itself set</p>
                                        <h4>Michel Hashale</h4>
                                        <h5> Sr. Web designer</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-2 col-sm-4">
                                    <div class="testimonial_slider_img">
                                        <img src="./../../img/testimonial_img_1.png" alt="#">
                                    </div>
                                </div>
                                <div class="col-xl-4 d-none d-xl-block">
                                    <div class="testimonial_slider_text">
                                        <p>Behold place was a multiply creeping creature his domin to thiren open void
                                            hath herb divided divide creepeth living shall i call beginning
                                            third sea itself set</p>
                                        <h4>Michel Hashale</h4>
                                        <h5> Sr. Web designer</h5>
                                    </div>
                                </div>
                                <div class="col-xl-2 d-none d-xl-block">
                                    <div class="testimonial_slider_img">
                                        <img src="./../../img/testimonial_img_1.png" alt="#">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial_slider">
                            <div class="row">
                                <div class="col-lg-8 col-xl-4 col-sm-8 align-self-center">
                                    <div class="testimonial_slider_text">
                                        <p>Behold place was a multiply creeping creature his domin to thiren open void
                                            hath herb divided divide creepeth living shall i call beginning
                                            third sea itself set</p>
                                        <h4>Michel Hashale</h4>
                                        <h5> Sr. Web designer</h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-xl-2 col-sm-4">
                                    <div class="testimonial_slider_img">
                                        <img src="./../../img/testimonial_img_1.png" alt="#">
                                    </div>
                                </div>
                                <div class="col-xl-4 d-none d-xl-block">
                                    <div class="testimonial_slider_text">
                                        <p>Behold place was a multiply creeping creature his domin to thiren open void
                                            hath herb divided divide creepeth living shall i call beginning
                                            third sea itself set</p>
                                        <h4>Michel Hashale</h4>
                                        <h5> Sr. Web designer</h5>
                                    </div>
                                </div>
                                <div class="col-xl-2 d-none d-xl-block">
                                    <div class="testimonial_slider_img">
                                        <img src="./../../img/testimonial_img_1.png" alt="#">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--::blog_part end::-->

    <!-- footer part start-->
    <footer class="footer-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-6 col-md-4 col-xl-3">
                    <div class="single-footer-widget footer_1">
                        <a style="width: 135px;" class="navbar-brand logo_2" href="index.html"> <img
                                src="./../../img/EduQuiz.png" alt="logo"> </a>
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
                                    <script>document.write(new Date().getFullYear());</script> All rights reserved
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
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="./../../js/filtreCourse.js"></script>
    <script src="./../../js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
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