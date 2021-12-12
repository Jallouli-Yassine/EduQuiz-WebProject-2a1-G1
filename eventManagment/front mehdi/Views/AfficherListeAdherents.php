
<?php 
/*
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
echo $actual_link;
*/
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>EduQuiz</title>
    <link rel="icon" href="../img/2.png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- animate CSS -->
    <link rel="stylesheet" href="../css/animate.css">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <!-- themify CSS -->
    <link rel="stylesheet" href="../css/themify-icons.css">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="../css/flaticon.css">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="../css/slick.css">
    <!-- style CSS -->
    <link rel="stylesheet" href="../css/style.css">
      <!-- style CSS -->
      <link rel="stylesheet" href="../css/style2.css">
<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="../table-09/css/style.css">
</head>

<body>
    <!--::header part start::-->
    <?php require "./userHeader.php" ?>
    <!-- Header part end-->
    <!-- Header part end-->

    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2> Events Profil</h2>
                            <p>Home<span>/</span>Events Profil</p>
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
                 
                        <h2> Your Events</h2>
                    </div>
                </div>
            </div>
           
            <?php
include '../Controller/ControlAdherent.php';
$AdherentC2=new AdherentC();
$AdherentC=new AdherentC();
$ListeAdherents=$AdherentC->afficheradherents();
$ListeAdherents2=$AdherentC2->afficheradherents3();
?>
<style>
        table, th, td
        {
        border:1px solid black;
        }
        </style>
        
<table class="table table-striped">
<thead>

    <tr>
        <th>IdEvent</th>
        <th>NameEvent</th>
        <th>Email</th>
        <th>subject</th>
        <th>date</th>
        <th>time</th>
        <th>numberparticipate</th>
        <th>image</th>
    </tr>
    </thead>
<?php
foreach($ListeAdherents as $Adherent){
?>
    <tr>
        <td><?php echo $Adherent['idevent']; ?> </td>
        <td><?php echo $Adherent['nameevent']; ?> </td>
        <td><?php echo $Adherent['email']; ?> </td>
        <td><?php echo $Adherent['subject']; ?> </td>
        <td><?php echo $Adherent['date']; ?> </td>
        <td><?php echo $Adherent['time']; ?> </td>
        <td><?php echo $Adherent['numberparticipate']; ?> </td>
        <td> <img src="../<?php echo $Adherent['image']; ?>" width ="900" height="auto"></td>
    <td>
  

  <form action="ModifierAdherent.php" method ='Post'>
    <input type="submit" name="Modifier" value="Modifier">
    <input type="hidden" value=<?php echo $Adherent['idevent'] ;?> name='idevent'>  
    <input type="hidden" value=<?php echo $Adherent['nameevent'] ;?> name='nameevent'>  
    <input type="hidden" value=<?php echo $Adherent['email'] ;?> name='email'>  
    <input type="hidden" value=<?php echo $Adherent['subject'] ;?> name='subject'>  
    <input type="hidden" value=<?php echo $Adherent['date'] ;?> name='date'>  
    <input type="hidden" value=<?php echo $Adherent['time'] ;?> name='time'>
    <input type="hidden" value=<?php echo $Adherent['numberparticipate'] ;?> name='numberparticipate'>
    <input type="hidden" value=<?php echo $Adherent['image'] ;?> name='image'>     
</form> 

</td>
<td>
    <a href="SupprimerAdherent.php? Idevent=<?php echo $Adherent ['idevent']; ?>">DELETE</a>
</td>
</tr>



<?php } ?>
    </table>
    <center><h2>  event member</h2>
    <table class="table table-striped">
<thead>

    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>nameevent</th>
    </tr>
    </thead>
    <?php
foreach($ListeAdherents2 as $eleve){
?>
    <tr>
        <td><?php echo $eleve['id']; ?> </td>
        <td><?php echo $eleve['name']; ?> </td>
        <td><?php echo $eleve['email']; ?> </td>
        <td><?php echo $eleve['event']; ?> </td>
    <td>
</tr>



<?php } ?>
    </table>


</center>        
                           
    </section>
    <!--::blog_part end::-->

   

    <!-- footer part start-->
    <footer class="footer-area">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-sm-6 col-md-4 col-xl-3">
                    <div class="single-footer-widget footer_1">
                        <a href="index.html"> <img src="../img/EduQuiz.png" alt="" width ="120" height="120"> </a>
                        
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 col-xl-4">
                    <div class="single-footer-widget footer_2">
                      
                      
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
                            <p><span> Phone :</span> 54 080 637</p>
                            <p><span> Email : </span>Admin@colorlib.com </p>
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
    
    <script src ="js/k.js"></script>
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
    <script src="js/custom.js"></script>
</body>

</html>

