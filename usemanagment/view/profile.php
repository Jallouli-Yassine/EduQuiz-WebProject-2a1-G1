<?php 
session_start();
/*
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
}
*/
    require_once "./../controlers/usercontroler.php";
    require_once "./../modele/usermodele.php";
    $userC = new UserC();
    if(   isset($_POST['name']) 
            && isset($_POST['lastname']) 
            && isset($_POST['age']) 
            && isset($_POST['email'])){

        if( 
            !empty($_POST['name'])&&
            !empty($_POST['lastname'])&&
            !empty($_POST['age'])&&
            !empty($_POST['email']))
            {
                $userC = new UserC();
                $user = new user( 
                $_POST['name'],
                $_POST['lastname'],
                $_POST['email'],
                $_SESSION['user']['pass'],
                $_POST['age'],
                "user"
                );
                $userC->modifieruser($user,$_SESSION['user']['ID']);
                header("Location:./profile.php");
            }else
            echo "ERROR";
        }
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Add Course</title>
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
                            <h2>Profile</h2>
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
            <?php 
                        if (!empty($_SESSION['user']['ID'])){
                            $user = $userC->getOneUser($_SESSION['user']['ID']);
            
                ?>
            <h2>Your Score : <?php echo $user['score'] ?> </h2> <br><br>

                <form class="form-contact contact_form" action="" method="post" id="contactForm"
                    novalidate="novalidate">
                    <div class="row">
                       <input name="idUSER" type="hidden" value="<?php echo $_SESSION['user']['ID'] ?>">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input value="<?php echo $user['first_Name'] ?>" class="form-control" name="name" id="name" type="text"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter The name'"
                                    placeholder='Enter The name'>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input value="<?php echo $user['last_Name'] ?>" class="form-control" name="lastname" id="lastname" type="text"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter The Last name'"
                                    placeholder='Enter The Last name'>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input value="<?php echo $user['Date_Naissance'] ?>" class="form-control" name="age" id="age" type="date" max="2007-12-13"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter The age'"
                                    placeholder='Enter The age'>
                            </div>
                        </div>


                        
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input value="<?php echo $user['email'] ?>" class="form-control" name="email" id="email" type="email"
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter The email'"
                                    placeholder='Enter The Email'>
                            </div>
                        </div>


                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="button button-contactForm btn_1">UPDATE</button>
                    </div>
                </form>
                <?php } ?>
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