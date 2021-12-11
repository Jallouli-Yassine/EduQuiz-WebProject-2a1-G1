<?php 
	include '../Controllers/postController.php';
    require_once"./../controllers/postController.php";
    require_once"./../model/modelPost.php";

        if( isset($_POST['Iduser']) 
            && isset($_POST['nameuser']) 
            && isset($_POST['content']) 
            && isset($_POST['title']) 
            && isset($_POST['date']) 
            && isset($_POST['imageurl']) 
            ){

        if( !empty($_POST['Iduser'])&&
            !empty($_POST['nameuser'])&&
            !empty($_POST['content'])&&
            !empty($_POST['title'])&&
            !empty($_POST['date'])&&
            !empty($_POST['imageurl'])
            )
            {
                $postC = new PostC();
                $post = new Post($_POST[''],
                $_POST['Iduser'],
                $_POST['nameuser'],
                $_POST['content'],
                $_POST['title'],
                $_POST['date'],
                $_POST['imageurl'],
                0
            );

                $postC->ajouterPost($post);

                header("Location:./addPost.php");
            }
        }
      

        function redirect($url) {
            ob_start();
            header('Location: '.$url);
            ob_end_flush();
            die();
        }
	$postC=new PostC();
	$listepost=$postC->afficherpost(); 
?>



<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Add Post</title>
    <link rel="icon" href="img/favicon.png">
    <!-- Bootstrap CSS -->
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet" />
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
    <link rel="stylesheet" href="./../../css/addCourse.css">

</head>

<body>
    <!--::header part start::-->
    <header class="main_menu single_page_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a style="width: 135px;" class="navbar-brand logo_1" href="./../../index.html"> <img
                                src="./../../img/EduQuizWhite.png" alt="logo"> </a>
                        <a style="width: 135px;" class="navbar-brand logo_2" href="./../../index.html"> <img
                                src="./../../img/EduQuiz.png" alt="logo"> </a>
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
                                <li class="nav-item">
                                    <a class="nav-link" href="forum.html">Forum</a>
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
                                    <a class="btn_1" href="#">Register now</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->
    <!-- Header part end-->

    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Add new post</h2>
                            <!--<p>Home<span>/</span>Courses</p>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!--::review_part start::-->
    <section class="special_cource padding_top">
        <center>
            <div class="col-lg-8">
                <form class="form-contact contact_form" action="" method="POST" id="contactForm" novalidate="novalidate">
                    <div class="row">

                                    <input  value="50"  type="hidden" name="Idpost" id="Idpost" class="form-control" />
                                    <input  value="50"  type="hidden" name="Iduser" id="Iduser" class="form-control" />
                                    <input  value="2021-06-23"  type="hidden" name="date" id="date" class="form-control" />
                                    <input  value="salma"  type="hidden" name="nameuser" id="nameuser" class="form-control" />


                        <!--div class="col-12">
                            <select style="margin-bottom :3%" class="form-select" name="Categorie" aria-label="Default select example">
                                <option selected>Select Course Categori</option>
                                <option value="programation">programation</option>
                                <option value="photography">photography</option>
                                <option value="design">design</option>
                                <option value="math">math</option>
                                
                            </select-->
                            <!--
                            <div class="btn-group">
                                <input type="radio" class="btn-check" name="options" id="option1" autocomplete="off"
                                    checked />
                                <label class="btn btn-secondary" for="option1">Checked</label>
                                <input type="radio" class="btn-check" name="options" id="option2" autocomplete="off" />
                                <label class="btn btn-secondary" for="option2">Radio</label>
                                <input type="radio" class="btn-check" name="options" id="option3" autocomplete="off" />
                                <label class="btn btn-secondary" for="option3">Radio</label>
                            </div>
                        -->


                            <!--small id="errorCategories"></small>

                        </div-->

                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="form-outline">
                                    <input class="form-control" name="title" id="title" type="text"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter The Title'"
                                        placeholder='Enter The Title'>
                                    <label class="form-label" for="Title">Enter The Title</label>
                                </div>
                                <small id="errorTitle"></small>
                            </div>
                        </div>

                        <!--div class="col-sm-6">
                            <div class="form-group">
                                <div class="form-outline">
                                    <input name="Price" type="number" id="Price" class="form-control" min="0" />
                                    <label class="form-label" for="Price">Enter The Price</label>
                                </div>

                                <div class="error">
                                    <small id="errorPrice"></small>
                                </div>
                            </div>
                        </div-->


                        <div class="col-12">
                            <div class="form-group">
                                <div class="form-outline">
                                    <textarea name="content" class="form-control" id="content" rows="4"></textarea>
                                    <label class="form-label" for="content">Enter The Description</label>
                                </div>
                                <small id="errorDescription"></small>
                            </div>
                        </div>

                        <!--div class="col-6">
                            <div class="form-group">

                                <label class="form-label" for="Video">Pick The Video File</label>
                                <input name="videoUrl" type="file" class="form-control" id="Video" />
                              <small id="errorVideoExt"></small>  
                            </div>

                        </div-->

                        <div class="col-6">
                            <div class="form-group">

                                <label class="form-label" for="Image">Pick Image </label>
                                <input name="imageurl" type="file" class="form-control" id="imageurl" />
                               <small id="errorImageExt"></small> 
                            </div>

                        </div>

                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="add_course button button-contactForm btn_1">add post</button>
                    </div>
                </form>
            </div>
        </center>

    </section>
    <!--::blog_part end::-->

    <!--::review_part start::-->
  <!--::review_part start::-->
    <section class="special_cource padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5">
                    <div class="section_tittle text-center">
                        <h2>Recent posts</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                
                   
                        <?php
				foreach($listepost as $post){
			?>
			<div class="col-sm-6 col-lg-4">
                <div class="single_special_cource">
			
                        <img src="img/special_cource_1.png" class="special_img" alt="">
                        <div class="special_cource_text">
                            <a href="course-details.html" class="btn_4"><?php echo $post['nameuser']; ?></a>
                            <h4> <?php echo $post['date']; ?></h4>
                            <a href="course-details.html">
                                <h3><?php echo $post['title']; ?></h3>
                            </a>
                            <p><?php echo $post['content']; ?></p>
                            <div class="author_info">
                                <div class="author_img">
                                    <img src="img/author/author_1.png" alt="">
                                    
                                </div>
                                <div class="form-group mt-3">
                                <form method="POST" action="post.php?id=<?php echo $post['idpost'] ?>">
                        <button type="submit" class="add_course button button-contactForm btn_1" style="height: 50px">details</button>
                                 </form>
                    </div>

                                
                            </div>
                        </div>
                        </div>
                        </div>
                        <?php
				}
			?>
                   
               
                
                
                
            </div>
        </div>
    </section> 
    <br><br>

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
    <!-- jquery -->
    <script src="./../../js/addCourse.js"></script>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>
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