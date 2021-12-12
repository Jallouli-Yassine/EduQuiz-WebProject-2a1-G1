<?php
include_once '../Model/Adherent.php';
include_once '../Controller/ControlAdherent.php';
$erreur='';
$adherentC= new AdherentC();
if (
    isset($_POST["nameevent"]) &&
    isset($_POST["email"]) &&
    isset($_POST["subject"]) &&
    isset($_POST["date"]) &&
    isset($_POST["time"])&&
    isset($_POST["numberparticipate"])
) {

    if (
        !empty($_POST["nameevent"]) &&
        !empty($_POST["email"]) &&
        !empty($_POST["subject"]) &&
        !empty($_POST["date"]) &&
        !empty($_POST["time"]) &&
        !empty($_POST["numberparticipate"])
    ) { 

        $A= new Adherent($_POST["nameevent"],$_POST["email"],$_POST["subject"],$_POST["date"],$_POST["time"],$_POST["numberparticipate"]);
        $adherentC->ajouterAdherent($A);
        header('Location:AfficherListeAdherents.php');
    }
else {$erreur='Veuillez remplir le formulaire';}   
}
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
</head>

<body>

    <!--::header part start::-->
    <header class="main_menu single_page_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a style="width: 135px;" class="navbar-brand logo_1" href="index.html"> <img
                                src="../img/EduQuizWhite.png" alt="logo" width ="100" height="100"> </a>
                        <a style="width: 135px;" class="navbar-brand logo_2" href="index.html"> <img
                                src="../img/EduQuiz.png" alt="logo" width ="100" height="100"> </a>
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
                                    <a class="nav-link" href="">Courses</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Events
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="cource.php">Add Event</a>
                                        <a class="dropdown-item" href="AfficherListeAdherents.php">event profile</a>
                                    </div>
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
                            <h2>Create Your Events</h2>
                            <p>Home<span>/</span>Events</p>
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
                 
                        <h2>Add Your Event</h2>
                    </div>
                </div>
            </div>
           
            <center>
               
                 <div class="row">
                    <div class="col-12">
                      <h2 class="contact-title">Put The Details</h2>
                    </div>
                    <div class="col-lg-8">
                    
                        <div class="row">
                          <div class="col-12">
                            <div class="form-group">
                              
                                
                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                            <form  action="" method="POST" id="myform">  
                         
                              <input class="form-control" name="name" id="name" onkeyup="format(this)" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder = 'Enter your name'>
                          
                            <span id="error"></span>

                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <input class="form-control" name="email" id="email" onkeyup="format(this)" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder = 'Enter email address'>
                              <span id="error3"></span>
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="form-group">
                                <input class="form-control" name="nameevent" id="subject1" onkeyup="format(this)" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter the Name of Event'" placeholder = 'Enter the Name of Event'>
                                <span id="error4"></span>
                            </div>
                            <div class="form-group">
                              <input class="form-control" name="subject" id="subject2" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'" placeholder = 'Enter Subject'>
                             <span id="error5"></span>
                              <br>
                              <input class="form-control" type="date" id="appt" onkeyup="format(this)" name="date" ><label for="appt"><small> date for your Competition</small></label>
                              <input class="form-control" type="time" id="appt1" onkeyup="format(this)" name="time" min="09:00" max="18:00" required><small>Office hours are 9am to 6pm</small>
                              <input class="form-control" type="number" id="appt2" onkeyup="format(this)" name="numberparticipate" min="5" max="10" required><small>The number of participation</small>
                              <input class="form-control" type="file" id="avatar" name="avatar" accept="image/png, image/jpeg">
                              <small for="avatar">Put photos To advertising</small>
                            </div>
                          </div>
                        </div>
                        <div class="form-group mt-3">
                          <button type="submit"  class="button button-contactForm btn_1">ADD Event</button>
                        </div>
                       
                      </form>   
                    
                          
                            
                   
                </center>
                 
        
            
                           
    </section>
    <!--::blog_part end::-->

   <script>
let myform = document.getElementById('myform');

myform.addEventListener('submit',function(e)
{
 let myinput = document.getElementById('name');
 let myRegex = /^([A-Z])+([a-z])+$/;
 let myRegex2 = /^[a-zA-Z]+$/;
 let t=new Array();
 t=document.getElementById('name');
 if(myinput.value.trim()=="")
 {
     let myError = document.getElementById('error');
     myError.innerHTML ="the field are empty";
     myError.style.color='red';
     e.preventDefault();
 }
 else if (myRegex2.test(myinput.value)==false)
 {
    let myError = document.getElementById('error');
    myError.innerHTML ="Name must content character.";
    myError.style.color='red';
    e.preventDefault();
 }

 }
);
myform.addEventListener('submit',function(e)
{
 let myinput = document.getElementById('email');
 let myRegex = /^([A-Z])+([a-z])+$/;
 let myRegex2 = /[^@ \t\r\n]+@[^@ \t\r\n]+\.[^@ \t\r\n]+/;
 let t=new Array();
 t=document.getElementById('email');
 if(myinput.value.trim()=="")
 {
     let myError = document.getElementById('error3');
     myError.innerHTML ="the field are empty";
     myError.style.color='red';
     e.preventDefault();
 }
 else if (myRegex2.test(myinput.value)==false)
 {
    let myError = document.getElementById('error3');
    myError.innerHTML ="Email must content @ and characters and point.";
    myError.style.color='red';
    e.preventDefault();
 }

 }
);
myform.addEventListener('submit',function(e)
{
 let myinput = document.getElementById('subject1');
 let myRegex = /^([A-Z])+([a-z])+$/;
 let t=new Array();
 t=document.getElementById('subject1');
 if(myinput.value.trim()=="")
 {
     let myError = document.getElementById('error4');
     myError.innerHTML =" The name of event are empty";
     myError.style.color='red';
     e.preventDefault();
 }
 else if (myRegex.test(myinput.value)==false)
 {
    let myError = document.getElementById('error4');
    myError.innerHTML ="Name of event must contant character and start with upcase.";
    myError.style.color='red';
    e.preventDefault();
 }

 }
);
myform.addEventListener('submit',function(e)
{
 let myinput = document.getElementById('subject2');
 let myRegex = /^([A-Z])+([a-z])+$/;
 let t=new Array();
 t=document.getElementById('subject2');
 if(myinput.value.trim()=="")
 {
     let myError = document.getElementById('error5');
     myError.innerHTML ="the field of subject are empty";
     myError.style.color='red';
     e.preventDefault();
 }
 else if (myRegex.test(myinput.value)==false)
 {
    let myError = document.getElementById('error5');
    myError.innerHTML ="subject must content  character and start with upcase.";
    myError.style.color='red';
    e.preventDefault();
 }

 }

);
</script>-->

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
    
 
    <!-- jquery -->
    <script src="../js/jquery-1.12.1.min.js"></script>
    <!-- popper js -->
    <script src="../js/popper.min.js"></script>
    <!-- bootstrap js -->
    <script src="../js/bootstrap.min.js"></script>
    <!-- easing js -->
    <script src="../js/jquery.magnific-popup.js"></script>
    <!-- swiper js -->
    <script src="../js/swiper.min.js"></script>
    <!-- swiper js -->
    <script src="../js/masonry.pkgd.js"></script>
    <!-- particles js -->
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/jquery.nice-select.min.js"></script>
    <!-- swiper js -->
    <script src="../js/slick.min.js"></script>
    <script src="../js/jquery.counterup.min.js"></script>
    <script src="../js/waypoints.min.js"></script>
    <!-- custom js -->
    <script src="../js/custom.js"></script>
</body>

</html>