<?php 
    require_once "./../controlers/usercontroler.php";
    require_once "./../modele/usermodele.php";

         $user = null;
         $userC = new UserC();
        
        if(  
             isset($_POST['name']) &&
             isset($_POST['lastname']) &&
             isset($_POST['age']) &&
             isset($_POST['email']) &&
             isset($_POST['password']) ){

            if(
            !empty($_POST['name'])&&
            !empty($_POST['lastname'])&&
            !empty($_POST['age'])&
            !empty($_POST['email'])&&
            !empty($_POST['password']))
            {
               
                $user = new user(
                $_POST['name'],
                $_POST['lastname'],
                $_POST['email'],
                $_POST['password'],
                $_POST['age'],
                "user"
            );

                $userC->modifieruser($user,$_POST['ID']);
               header("Location:./affichage.php");
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
                            <h2>Registre</h2>
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
        if (isset($_POST['ID'])){
              $user = $userC->getOneUser($_POST['ID']);
		?>
                <form class="form-contact contact_form" action="" method="post" id="contactForm"
                    novalidate="novalidate">
                    
                    <div class="row">
                       
                    <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control" name="ID" id="ID" type="hidden" value="<?php echo $user['ID'] ?>" 
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter The ID'"
                                    placeholder='Enter The ID'>
                            </div>
                     </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control" name="name" id="name" type="text" value="<?php echo $user['first_Name'] ?>" 
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter The name'"
                                    placeholder='Enter The name'>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control" name="lastname" id="lastname" type="text" value="<?php echo $user['last_Name'] ?>" 
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter The Last name'"
                                    placeholder='Enter The Last name'>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <input class="form-control" name="age" id="age" type="date" value="<?php echo $user['Date_Naissance'] ?>" 
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter The age'"
                                    placeholder='Enter The age'>
                            </div>
                        </div>


                        
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control" name="email" id="email" type="email" value="<?php echo $user['email'] ?>" 
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter The email'"
                                    placeholder='Enter The Email'>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control" name="password" id="password" type="password" value="<?php echo $user['pass'] ?>" 
                                    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Your Password'"
                                    placeholder='Enter Your Password'>
                            </div>
                        </div>





                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="button button-contactForm btn_1">Registre</button>
                    </div>
                </form>
                <?php
            }	 
        ?>
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