<?php
session_start();
// On teste si la variable de session existe et contient une valeur
if((!empty($_SESSION['e']))){
    // Si inexistante ou nulle, on redirige vers le formulaire de login
    if($_SESSION['role']==="admin" || $_SESSION['role']==="prof")
    {
        if($_SESSION['role']==="prof")
        header('Location:../../CourseManagment/view/myCourse.php');
        else
        header('Location:../../CourseManagment/view/all-courses.php');
    }
    else 
    header('Location:../../CourseManagment/view/cource.php');
}else{
    include_once '../modele/usermodele.php';
    include_once '../controlers/usercontroler.php';
    $message="";
    $userC = new UserC();
    if (isset($_POST["email"]) && isset($_POST["password"])) {
        if (!empty($_POST["email"]) && !empty($_POST["password"]))
        { 
             $message=$userC->connexionUser($_POST["email"],$_POST["password"]);
            if($message!='pseudo ou le mot de passe est incorrect'){
                $_SESSION['e'] = $_POST["email"]; // on stocke dans le tableau une colonne ayant comme nom "e",
                //avec l'email à l'intérieur
                $user=$userC->getOneUseremail( $_POST["email"]);
                $_SESSION['role'] = $user['role'];
                $_SESSION['user'] = $user;
              if($_SESSION['role']==="user"){
                  if($user['bloqué']==0)
               header('Location:../../CourseManagment/view/cource.php');
               else
               header('Location:./bloquer.php');
              }else if($_SESSION['role']==="admin" || $_SESSION['role']==="prof"){
                if($_SESSION['role']==="prof")
                header('Location:../../CourseManagment/view/myCourse.php');
                else
                header('Location:../../CourseManagment/view/all-courses.php');
              }
              }else{
                $message='pseudo ou le mot de passe est incorrect';
             }
            }else
            $message = "Missing information";
        }
}


?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
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
                            <h2>Login</h2>
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
                <form class="form-contact contact_form" action="" method="post" id="contactForm"
                    novalidate="novalidate">
                    <div class="row">
                                            
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input class="form-control" name="email" id="email" type="email"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter The email'"
                                    placeholder='Enter The Email'>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input class="form-control" name="password" id="password" type="password"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Your Password'"
                                    placeholder='Enter Your Password'>
                            </div>
                        </div>





                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="button button-contactForm btn_1">Login</button>
                    </div>
                </form>
            </div>
        </center>

    </section>
    <!--::blog_part end::-->

    <!--::review_part start::-->


    <!-- footer part start-->
    <?php require_once "./footer.php" ?>
    <!-- footer part end-->

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>
    <!-- jquery -->
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