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
    <?php require_once "./userHeader.php" ?>
   
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
                            <input style="display:inline-block; width:200px;"  class="form-control" type="" id="search" name="search" placeholder="search ...." />
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
    <?php require_once "./footer.php" ?>
    <!-- footer part end-->

    <!-- jquery plugins here-->
    <!-- jquery -->

    <!-- popper js -->
    <script src="./../js/roleUsers.js"></script>
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