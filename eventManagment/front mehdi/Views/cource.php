

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
                            <form  action="../../../jeuxManagment/aziz front/gestion_jeux.php" method="POST" id="myform">  
                         
                              <input disabled value="<?php echo $_SESSION['user']['first_Name']  ?>" class="form-control" name="name" id="name" onkeyup="format(this)" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder = 'Enter your name'>
                              <input type="hidden" value="<?php echo $_SESSION['user']['first_Name']  ?>" class="form-control" name="name" id="name" onkeyup="format(this)" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder = 'Enter your name'>
                          
                            <span id="error"></span>

                            </div>
                          </div>
                          <div class="col-sm-6">
                            <div class="form-group">
                              <input disabled class="form-control" value="<?php echo $_SESSION['user']['email']  ?>" name="email" id="email" onkeyup="format(this)" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder = 'Enter email address'>
                              <input type="hidden" class="form-control" value="<?php echo $_SESSION['user']['email']  ?>" name="email" id="email" onkeyup="format(this)" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" placeholder = 'Enter email address'>
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
                              <input class="form-control" type="date" id="appt" onkeyup="format(this)" name="date" min="2021-12-13" ><label for="appt"><small> date for your Competition</small></label>
                              <input class="form-control" type="time" id="appt1" onkeyup="format(this)" name="time" min="09:00" max="18:00" required><small>Office hours are 9am to 6pm</small>
                              <input class="form-control" type="number" id="appt2" onkeyup="format(this)" name="numberparticipate" min="5" max="10" required><small>The number of participation</small>
                              <input class="form-control" type="file" id="image" name="image" accept="image/png, image/jpeg">
                <br><br>
                <!--
<select style="margin-bottom :3%" class="form-select" id="Categorie" name="liensjeux" aria-label="Default select example">
    <?php foreach($lienJeux as $jeux) {?>    
    <option selected><?php echo $jeux['lien_jeu'] ?></option>
    <?php } ?>
    </select>
             
                 -->


                                                               
                            </div>
                          </div>
                        </div>
                        <div class="form-group mt-3">
                          <button type="submit"  class="button button-contactForm btn_1">ADD GAME</button>
                        </div>
                       
                      </form>   
                    
                          
                            
                   
                </center>
                 
        
            
                           
    </section>
    <!--::blog_part end::-->

   <script>
let myform = document.getElementById('myform');
/*
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
*/
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

</script>

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