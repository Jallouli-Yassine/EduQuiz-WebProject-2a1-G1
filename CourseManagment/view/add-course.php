<?php 
    session_start();
   
    // On teste si la variable de session existe et contient une valeur
    if(empty($_SESSION['e']) || $_SESSION['role']== "user" || $_SESSION['role']== "admin" ){
        // Si inexistante ou nulle, on redirige vers le formulaire de login
        header('Location:./../../usemanagment/view/connexion.php');
    }
    require_once"./../controllers/CourseController.php";
    require_once"./../model/courseModel.php";
        if( 
             isset($_POST['Categorie']) 
            && isset($_POST['Title']) 
            && isset($_POST['Price']) 
            && isset($_POST['Description']) 
            ){     
        if( 
            !empty($_POST['Categorie'])&&
            !empty($_POST['Title'])&&
            !empty($_POST['Price'])&&
            !empty($_POST['Description'])
            )
            {
                /*END VIDEO PART*/
                $courseC = new CourseC();
                $course = new Course(
                    $_POST['profID'],
                    $_POST['Categorie'],
                    $_POST['Title'],
                    $_POST['Price'],
                    $_POST['Description'],
                    "",
                    "",
                    0
            );
               $courseC->ajouterCourse($course);
               header("Location:./myCourse.php");
            }
        }
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Add Course | Kiaalap - Kiaalap Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon
		============================================ -->
    <link rel="stylesheet" href="./../../css/addCourse.css">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <!--
       
   -->
    <link rel="stylesheet" href="./../../EDu-Quiz B/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="./../../EDu-Quiz B/css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="./../../EDu-Quiz B/css/owl.carousel.css">
    <link rel="stylesheet" href="./../../EDu-Quiz B/css/owl.theme.css">
    <link rel="stylesheet" href="./../../EDu-Quiz B/css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="./../../EDu-Quiz B/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="./../../EDu-Quiz B/css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="./../../EDu-Quiz B/css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="./../../EDu-Quiz B/css/main.css">
    <!-- dropzone CSS
		============================================ -->
    <link rel="stylesheet" href="./../../EDu-Quiz B/css/dropzone/dropzone.css">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="./../../EDu-Quiz B/css/educate-custon-icon.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="./../../EDu-Quiz B/css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="./../../EDu-Quiz B/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="./../../EDu-Quiz B/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="./../../EDu-Quiz B/css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="./../../EDu-Quiz B/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="./../../EDu-Quiz B/css/calendar/fullcalendar.print.min.css">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="./../../EDu-Quiz B/css/form/all-type-forms.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="./../../EDu-Quiz B/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="./../../EDu-Quiz B/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="./../../EDu-Quiz B/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>

    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    <!-- Start Left menu area -->
        <?php require_once "./sideBar.php";?>
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <?php require_once "header.php" ?>
        <!-- Single pro tab review Start-->
        <div class="single-pro-review-area mt-t-30 mg-b-15">
      
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">

                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad addcoursepro">
                                                    <center>
                                                        <div class="col-lg-12">
                                                            <form class="form-contact contact_form" action=""
                                                                method="POST" id="addCourse" novalidate="novalidate">
                                                                <div class="row">


                                                                    <input value="<?php echo($_SESSION['user']['ID']); ?>" type="hidden" name="profID"
                                                                        id="profID" class="form-control" />

                                                                    <div style="margin-top:100px" class="col-lg-12">
                                                                        <select style="margin-bottom :3%"
                                                                            class="form-select" id="Categorie"
                                                                            name="Categorie"
                                                                            aria-label="Default select example">
                                                                            <option selected>Select Course Categori
                                                                            </option>
                                                                            <option value="programation">programation
                                                                            </option>
                                                                            <option value="photography">photography
                                                                            </option>
                                                                            <option value="design">design</option>
                                                                            <option value="math">math</option>

                                                                        </select>
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


                                                                        <small id="errorCategories"></small>

                                                                    </div>

                                                                    <div class="col-lg-6">
                                                                        <div class="form-group">
                                                                            <div class="form-outline">
                                                                                <input class="form-control" name="Title"
                                                                                    id="Title" type="text"
                                                                                    onfocus="this.placeholder = 'Enter The Title'"
                                                                                    onblur="this.placeholder = 'Enter The Title'"
                                                                                    placeholder='Enter The Title'>
                                                                            </div>
                                                                            <small id="errorTitle"></small>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-lg-6">
                                                                        <div class="form-group">
                                                                            <div class="form-outline">
                                                                                <input name="Price" type="number"
                                                                                    id="Price" class="form-control"
                                                                                    min="0"
                                                                                    onfocus="this.placeholder = 'Enter The Price'"
                                                                                    onblur="this.placeholder = 'Enter The Price'"
                                                                                    placeholder='Enter The Price'>

                                                                            </div>

                                                                            <div class="error">
                                                                                <small id="errorPrice"></small>
                                                                            </div>
                                                                        </div>
                                                                    </div>


                                                                    <div class="col-lg-12">
                                                                        <div class="form-group">
                                                                            <div class="form-outline">
                                                                                <textarea name="Description"
                                                                                    class="form-control"
                                                                                    id="Description" rows="3"
                                                                                    onfocus="this.placeholder = 'Enter The Description'"
                                                                                    onblur="this.placeholder = 'Enter The Description'"
                                                                                    placeholder='Enter The Description'></textarea>

                                                                            </div>
                                                                            <small id="errorDescription"></small>
                                                                        </div>
                                                                    </div>

                                                                    <!--
                                                                    <div class="col-6">
                                                                        <div class="form-group">
                                            
                                                                            <label class="form-label" for="Video">Pick The Video File</label>
                                                                            <input name="videoUrl" type="file" class="form-control" id="Video" />
                                                                          <small id="errorVideoExt"></small>  
                                                                        </div>
                                            
                                                                    </div>
                                                            -->

                                                                    <!-- 
                                                                    <div class="col-lg-12">
                                                                        <div class="form-group">

                                                                            <label class="form-label" for="Image">Pick
                                                                                The Image Of The Video</label>
                                                                            <input name="imageUrl" type="file"
                                                                                class="form-control" id="Image" />
                                                                            <small id="errorImageExt"></small>
                                                                        </div>

                                                                    </div>
-->


                                                                </div>
                                                                <div class="form-group mt-3">
                                                                    <input type="submit" class="btn btn-success"
                                                                        value="add course">
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </center>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-tab-list tab-pane fade" id="reviews">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <div class="devit-card-custom">
                                                            <div class="form-group">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Email">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="number" class="form-control"
                                                                    placeholder="Phone">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="password" class="form-control"
                                                                    placeholder="Password">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="password" class="form-control"
                                                                    placeholder="Confirm Password">
                                                            </div>
                                                            <a href="#"
                                                                class="btn btn-primary waves-effect waves-light">Submit</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-tab-list tab-pane fade" id="INFORMATION">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="devit-card-custom">
                                                            <div class="form-group">
                                                                <input type="url" class="form-control"
                                                                    placeholder="Facebook URL">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="url" class="form-control"
                                                                    placeholder="Twitter URL">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="url" class="form-control"
                                                                    placeholder="Google Plus">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="url" class="form-control"
                                                                    placeholder="Linkedin URL">
                                                            </div>
                                                            <button type="submit"
                                                                class="btn btn-primary waves-effect waves-light">Submit</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2018. All rights reserved. Template by <a
                                    href="https://colorlib.com/wp/templates/">Colorlib</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="./../../js/add-course.js"></script>
    <!-- jquery
		============================================ -->
    <script src="./../../EDu-Quiz B/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="./../../EDu-Quiz B/js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="./../../EDu-Quiz B/js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="./../../EDu-Quiz B/js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="./../../EDu-Quiz B/js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="./../../EDu-Quiz B/js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="./../../EDu-Quiz B/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="./../../EDu-Quiz B/js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="./../../EDu-Quiz B/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="./../../EDu-Quiz B/js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="./../../EDu-Quiz B/js/metisMenu/metisMenu.min.js"></script>
    <script src="./../../EDu-Quiz B/js/metisMenu/metisMenu-active.js"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="./../../EDu-Quiz B/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="./../../EDu-Quiz B/js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="./../../EDu-Quiz B/js/calendar/moment.min.js"></script>
    <script src="./../../EDu-Quiz B/js/calendar/fullcalendar.min.js"></script>
    <script src="./../../EDu-Quiz B/js/calendar/fullcalendar-active.js"></script>
    <!-- maskedinput JS
		============================================ -->
    <script src="./../../EDu-Quiz B/js/jquery.maskedinput.min.js"></script>
    <script src="./../../EDu-Quiz B/js/masking-active.js"></script>
    <!-- datepicker JS
		============================================ -->
    <script src="./../../EDu-Quiz B/js/datepicker/jquery-ui.min.js"></script>
    <script src="./../../EDu-Quiz B/js/datepicker/datepicker-active.js"></script>
    <!-- form validate JS
		============================================ -->
    <script src="./../../EDu-Quiz B/js/form-validation/jquery.form.min.js"></script>
    <script src="./../../EDu-Quiz B/js/form-validation/jquery.validate.min.js"></script>
    <script src="./../../EDu-Quiz B/js/form-validation/form-active.js"></script>
    <!-- dropzone JS
		============================================ -->
    <script src="./../../EDu-Quiz B/js/dropzone/dropzone.js"></script>
    <!-- tab JS
		============================================ -->
    <script src="./../../EDu-Quiz B/js/tab.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="./../../EDu-Quiz B/js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="./../../EDu-Quiz B/js/main.js"></script>
    <!-- tawk chat JS
		============================================ -->
    <script src="./../../EDu-Quiz B/js/tawk-chat.js"></script>
</body>

</html>