<?php
    session_start();
    include "./core/formulaireC.php";
    $i=new formulaireC();

    if($i->corrigeQuiz($_POST["numcorrect"],$_POST["reponseChoisie"]) == 1 ){
        $i->addScore($_SESSION['user']['ID'],$_POST["score"]);
        $_POST["scoreWon"]+=$_POST["score"];
    }
    
    $c=$i->getNextQuiz($_POST["id"],$_POST["idC"]);

/*
*/

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- animate CSS -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="css/flaticon.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="eleve.css">
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu single_page_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a style="width: 90px;" class="navbar-brand logo_1" href="./../usemanagment/view/index.php"> <img
                                src="img/EduQuizWhite.png" alt="logo"> </a>
                        <a style="width: 90px;" class="navbar-brand logo_2" href="./../usemanagment/view/index.php"> <img
                                src="img/EduQuiz.png" alt="logo"> </a>
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

    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Quiz</h2>
                            <p>Home<span>/</span>About Us</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->



    <br>

    <div class="container mt-5">
        <div class="d-flex justify-content-center row">
            <div class="col-md-10 col-lg-10">
                <div class="border">
         
                    <div class="question bg-white p-3 border-bottom">
                    <?php  echo "<h4> your quiz score : " . $_POST["scoreWon"]."</h4>"; ?>  
                        <div class="d-flex flex-row justify-content-between align-items-center mcq">
                        </div>
                    </div>

                    <?php

                      if(!$c){
                          echo "fin quiz";
                      }
                    foreach ($c as $row)
                    {            
                      
                          
                        ?>

                    <div class="question bg-white p-3 border-bottom">
                        <div class="d-flex flex-row align-items-center question-title">
                            <h3 class="text-danger">Q: </h3>
                            <h5 class="mt-1 ml-2"><?php echo $row["question"] ?></h5>
                            
                        </div>
                        <div class="ans ml-2">
                        <input value="1" type="radio" class="btn-check" name="options-outlined" id="rep1"  onclick="myFunction()" autocomplete="off" >
                        <label class="btn btn-outline-danger" for="rep1"><?php echo $row["rep1"] ?></label>
                 
                        </div>
 <br>
                        <div class="ans ml-2">
                        <input value="2"  type="radio" class="btn-check" name="options-outlined" id="rep2" onclick="myFunction()" autocomplete="off" >
                        <label class="btn btn-outline-danger" for="rep2"><?php echo $row["rep2"] ?></label>
                        </div>
 <br>
                        <div class="ans ml-2">
                        <input value="3"  type="radio" class="btn-check" name="options-outlined" id="rep3" onclick="myFunction()" autocomplete="off" >
                        <label class="btn btn-outline-danger" for="rep3"><?php echo $row["rep3"] ?></label>
                        </div> <br>
                        <div class="ans ml-2">
                        <input value="4"  type="radio" class="btn-check" name="options-outlined" id="rep4" onclick="myFunction()" autocomplete="off" >
                        <label class="btn btn-outline-danger" for="rep4"><?php echo $row["rep4"] ?></label>
                        </div> <br>
                    </div>
                      <form action="./aboutnext.php" method="POST">
                     <input class="btn btn-primary border-success align-items-center btn-success" name="numcorrect" type="hidden" value="<?php echo $row["numcorrect"] ?>">
                   <input class="btn btn-primary border-success align-items-center btn-success" name="id"  type="hidden" value="<?php echo $row["id"] ?>">
                   <input class="btn btn-primary border-success align-items-center btn-success" name="score"  type="hidden" value="<?php echo $row["score"] ?>">
                   <input class="btn btn-primary border-success align-items-center btn-success" name="idC"  type="hidden" value="<?php echo $_POST['courseID'] ?>">
                   <input class="btn btn-primary border-success align-items-center btn-success" name="scoreWon"  type="" value="<?php echo $_POST["scoreWon"] ?>">
                   <input class="btn btn-primary border-success align-items-center btn-success"  id="reponseChoisie" class="reponseChoisie" name="reponseChoisie" type="hidden" >
                      <input class="btn btn-primary border-success align-items-center btn-success" value="next" type="submit">
                      </form>  
                        
                            <?php }?>
                   

                </div>
     
                </div>
            </div>
        </div>
    </div>

    

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- jquery plugins here-->
    <!-- jquery -->
    <script src="js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="js/masonry.pkgd.js"></script>
    <!-- particles js -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <!-- swiper js -->
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <!-- custom js -->
    <script src="js/quiz.js"></script>
</body>

</html>