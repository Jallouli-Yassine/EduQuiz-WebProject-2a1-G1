<?php 
    session_start();
// COMMENT
	include '../Controllers/commentController.php';
    require_once"./../controllers/commentController.php";
    require_once"./../model/modelComment.php";
    include '../Controllers/postController.php';
    require_once"./../Controllers/postController.php";
    require_once"./../model/modelPost.php";

        if( isset($_POST['Iduser']) 
            && isset($_POST['nameuser']) 
            && isset($_POST['content']) 
            && isset($_POST['date']) 
            && isset($_POST['Idpost']) 
            ){

        if( !empty($_POST['Iduser'])&&
            !empty($_POST['nameuser'])&&
            !empty($_POST['content'])&&
            !empty($_POST['date'])&&
            !empty($_POST['Idpost'])
            )
            {
                $commentC = new CommentC();
                $comment = new Comment($_POST[''],
                $_POST['Iduser'],
                $_POST['nameuser'],
                $_POST['content'],
                $_POST['date'],
                $_POST['Idpost'],
                0
            );

                $commentC->ajouterComment($comment);

                header('Location:./addPost.php');
            }
        }
      

        function redirect($url) {
            ob_start();
            header('Location: '.$url);
            ob_end_flush();
            die();
        }

	$commentC=new CommentC();
	$listepost=$commentC->affichercommentOF1post($_POST['idpostTOcomment']); 
      

    
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
                            <h2>Add new Comment</h2>
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

                                   
                                    <input  value="<?php echo $_SESSION['user']['ID'] ?>"  type="hidden" name="Iduser" id="Iduser" class="form-control" />
                                    <input value="<?php $date = date('d-m-y h:i:s');echo $date;?>"  type="hidden" name="date" id="date" class="form-control" />
                                    <input  value="<?php echo $_POST['idpostTOcomment'] ?>"  type="hidden" name="Idpost" id="Idpost" class="form-control" />
                                   


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
                                    <input value="<?php echo $_SESSION['user']['first_Name'] ?>" class="form-control" name="nameuser" id="nameuser" type="text"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter The Title'"
                                        placeholder='Enter The Title'>
                                    <label class="form-label" for="nameuser">Enter The Name</label>
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
                                    <label class="form-label" for="content">Enter Comment Description</label>
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



                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="add_course button button-contactForm btn_1">add Comment</button>
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
                        <h2>Recent Comments</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                
                   
                        <?php
				foreach($listepost as $comment){
			?>
			<div class="col-sm-6 col-lg-4">
                <div class="single_special_cource">
			
                        <img src="img/special_cource_1.png" class="special_img" alt="">
                        <div class="special_cource_text">
                            <a href="course-details.html" class="btn_4"><?php echo $comment['nameuser']; ?></a>
                            <h4> <?php echo $comment['date']; ?></h4>
                            <input type="hidden" name="idpost" value="<?php echo $comment['idpost']; ?>" id="">
                            <a href="course-details.html">
                                <h3><?php "Comment Descriptiion"; ?></h3>
                            </a>
                            
                            <p><?php echo $comment['content']; ?></p>
                            <?php if($_SESSION['user']['ID']===$comment['iduser']) { ?>
                            <form action="./removeComment.php" method="post">
                                   <input type="hidden" value="<?php echo $comment['idcomment'] ?>" name="commentID" id="">
                                   <button style="margin-left:77%" class="btn btn-danger">
                            <ion-icon size="large" name="trash-outline"></ion-icon>
                                </button>
                            </form>
                                <?php } ?>
                            <div class="author_info">
                                <div class="author_img">
                                    <img src="img/author/author_1.png" alt="">
                                    
                                </div>
                                <div class="form-group mt-3">
                                
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
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
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