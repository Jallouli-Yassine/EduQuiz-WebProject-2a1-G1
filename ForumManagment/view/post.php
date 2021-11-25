<?php include '../Controllers/postController.php';
    require_once"./../Controllers/postController.php";
    require_once"./../model/modelPost.php";

        if(isset($_POST["idpost"])  
            && isset($_POST['Iduser'])
            && isset($_POST['nameuser']) 
            && isset($_POST['content']) 
            && isset($_POST['title']) 
            && isset($_POST['date']) 
            && isset($_POST['imageurl']) 
            ){

        if( !empty($_POST["idpost"]) &&
            !empty($_POST['Iduser'])&&
            !empty($_POST['nameuser'])&&
            !empty($_POST['content'])&&
            !empty($_POST['title'])&&
            !empty($_POST['date'])&&
            !empty($_POST['imageurl'])
            )
            {
                $postC = new PostC();
                $post = new Post($_POST[''],
                $_POST['idpost'],
                $_POST['Iduser'],
                $_POST['nameuser'],
                $_POST['content'],
                $_POST['title'],
                $_POST['date'],
                $_POST['imageurl'],
                0
            );

                $postC->ajouterPost($post);

                header("Location:./forum.php");
            }
        }
      
$postC=new PostC();
$listepost=$postC->afficherpost(); 

$postC=new PostC();
$id = (int) $_GET['id'];
$listepostbyid=$postC->afficherpostById($id); 




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
    <link rel="stylesheet" href="./../../css/lineAwsome.min.css">

</head>

<content>

    <!--::header part start::-->
    <header class="main_menu single_page_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a style="width: 135px;" class="navbar-brand logo_1" href="./../../index.html"> <img
                                src="./../../img/EduQuizWhite.png" alt="logo"> </a>
                        <a style="width: 135px;" class="navbar-brand logo_2" href="./../../index.html"> <img
                                src="./../../img/EduQuiz.png" alt="logo"> </a>
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
                                <li class="nav-item">
                                    <a class="nav-link" href="forum.html">Forum</a>
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
                            <!--<p>Home<span>/</span>Courses</p>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




<br><br>




    <link rel="stylesheet" href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-xl-10 col-12">
            <div class="timeline timeline-line-solid">
               
                <div class="timeline-item">
                    <div class="timeline-point timeline-point"></div>
                    <div class="timeline-event">
                        <div class="widget has-shadow">
                            <div class="widget-header d-flex align-items-center">
                               
                                <div class="d-flex flex-column mr-auto">
                                    <div class="title">
                  
			
                                    </div>
                                </div>
                                <div class="widget-options">
                                    <!--div class="dropdown">
                                    <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">
                                            <i class="la la-ellipsis-h"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a href="#" class="dropdown-item">
                                                <i class="la la-edit"></i>Edit Post
                                            </a>
                                            <a class="dropdown-item">
                                                <i class="la la-trash"></i>Delete Post
                                            </a>
                                        </div-->
                                        <?php
				foreach($listepost as $post){
                    if ($post['idpost'] == $id) {
                      
			?>
           <div class="special_cource_text">
           <div class="d-flex flex-column mr-auto">
                                    <div class="title">
                                    <h2><?php echo $post['nameuser']; ?></a><h2>
                                    </div>
                                </div>
                            
                            <p> <?php echo $post['date']; ?></p>
                            <div class="widget-body">
                                <p>
                                <h3><?php echo $post['title']; ?></h3>
                            
                            <p><?php echo $post['content']; ?></p>
                                </p>
                            </div>
                            <div class="dropdown">
                                    <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">
                                            <i class="la la-ellipsis-h"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a href="updateForum.php?idpost=<?php echo $post['idpost']; ?>" class="dropdown-item">
                                                <i class="la la-edit"></i>Edit Post
                                            </a>
                                            <a href="deleteForum.php?idpost=<?php echo $post['idpost']; ?>" class="dropdown-item">
                                                <i class="la la-trash"></i>Delete Post
                                            </a>
                                        </div>
                                
            <?php
				}
            }
			?>

                                    </div>
                                </div>
                            </div>


                 



                            
                            
                                
                             
                            </div>
                        </div>
                        
                    </div>
                </div>


<div class="timeline-item">
                    <div class="timeline-point timeline-point"></div>
                    <div class="timeline-event">
                        <div class="widget has-shadow">
                            <div class="widget-header d-flex align-items-center">
                             <!--   <div class="user-image">
                                    <img class="rounded-circle" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="...">
                                </div> -->
                                <div class="d-flex flex-column mr-auto">
                                 <!--   <div class="title">
                                        <span class="username">Brandon Smith</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    </div> -->
                                </div>
                                <div class="widget-options">
                                <!--    <div class="dropdown">
                                        <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">
                                            <i class="la la-ellipsis-h"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a href="#" class="dropdown-item">
                                                <i class="la la-edit"></i>Edit Post
                                            </a>
                                            <a href="#" class="dropdown-item">
                                                <i class="la la-trash"></i>Delete Post
                                            </a>
                                        </div>
                                    </div> -->
                                </div>
                            </div>

                            <div class="widget-body">
                            <div class="col-sm-6">
                            <div class="form-group">
                                <div class="form-outline">
                                <textarea class="form-control" name="comment" id="comment" type="text"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter The Comment'"
                                        placeholder='Enter The Comment' rows="3"></textarea>

                                       

                                    <label class="form-label" for="comment">Enter your comment</label>
                                   
                                </div>
                                <small id="errorTitle"></small>
                                <br>  <a href="course-details.html" class="btn_4">Comment</a>
                            </div>
                           
                           
                        </div>
                              <!--  <div class="content-img">
                                    <a href="#"><img src="https://bootdey.com/img/Content/avatar/avatar7.png" class="img-fluid" alt="..."></a>
                                </div> -->
                            </div>

                            <div class="widget-footer d-flex align-items-center">
                                <div class="col no-padding d-flex justify-content-start">
                                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />



<!-- kifeh chyodhhrou l comments 



                                    <div class="container mt-3 mb-4">
<div class="col-lg-9 mt-4 mt-lg-0">
    <div class="row">
      <div class="col-md-12">
        <div class="user-dashboard-info-box table-responsive mb-40 bg-white p-40 shadow-sm">
          <table class="table manage-candidates-top mb-0">
          
            <tbody>
              <tr class="candidates-list">
                <td class="title">
                  <div class="candidate-list-details">
                    <div class="candidate-list-info">
                      <div class="candidate-list-title">
                        <h5 class="mb-0"><a href="#">Brooke Kelly</a></h5>
                      </div>
                      <div class="candidate-list-option">
                        <ul class="list-unstyled">
                          <li><i class="fas fa-filter pr-1"></i>Information Technology</li>
                          <li><i class="fas fa-map-marker-alt pr-1"></i>Rolling Meadows, IL 60008</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </td>
                <td>
                  <ul class="list-unstyled mb-0 d-flex justify-content-end">
                    <li><a href="#" class="text-info" data-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></a></li>
                    <li><a href="#" class="text-danger" data-toggle="tooltip" title="" data-original-title="Delete"><i class="far fa-trash-alt"></i></a></li>
                  </ul>
                </td>
              </tr>
             
              
              <tr class="candidates-list">
                <td class="title">
                  <div class="candidate-list-details">
                    <div class="candidate-list-info">
                      <div class="candidate-list-title">
                        <h5 class="mb-0"><a href="#">Vickie Meyer</a></h5>
                      </div>
                      <div class="candidate-list-option">
                        <ul class="list-unstyled">
                          <li><i class="fas fa-filter pr-1"></i>Human Resources</li>
                          <li><i class="fas fa-map-marker-alt pr-1"></i>Minneapolis, MN 55406</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </td>
                <td>
                  <ul class="list-unstyled mb-0 d-flex justify-content-end">
                    <li><a href="#" class="text-info" data-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></a></li>
                    <li><a href="#" class="text-danger" data-toggle="tooltip" title="" data-original-title="Delete"><i class="far fa-trash-alt"></i></a></li>
                  </ul>
                </td>
              </tr>

              <tr class="candidates-list">
                <td class="title">
                  <div class="candidate-list-details">
                    <div class="candidate-list-info">
                      <div class="candidate-list-title">
                        <h5 class="mb-0"><a href="#">Nichole Haynes</a></h5>
                      </div>
                      <div class="candidate-list-option">
                        <ul class="list-unstyled">
                          <li><i class="fas fa-filter pr-1"></i>Information Technology</li>
                          <li><i class="fas fa-map-marker-alt pr-1"></i>Botchergate, Carlisle</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </td>
                <td>
                  <ul class="list-unstyled mb-0 d-flex justify-content-end">
                    <li><a href="#" class="text-info" data-toggle="tooltip" title="" data-original-title="Edit"><i class="fas fa-pencil-alt"></i></a></li>
                    <li><a href="#" class="text-danger" data-toggle="tooltip" title="" data-original-title="Delete"><i class="far fa-trash-alt"></i></a></li>
                  </ul>
                </td>
              </tr>

            </tbody>
          </table>
          <div class="text-center mt-3 mt-sm-3">
            <ul class="pagination justify-content-center mb-0">
              <li class="page-item disabled"> <span class="page-link">Prev</span> </li>
              <li class="page-item active" aria-current="page"><span class="page-link">1 </span> <span class="sr-only">(current)</span></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">...</a></li>
              <li class="page-item"><a class="page-link" href="#">25</a></li>
              <li class="page-item"> <a class="page-link" href="#">Next</a> </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>    -->




                                  <!--  <div class="users-like">
                                        <a href="#">
                                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" class="img-fluid rounded-circle" alt="...">
                                        </a>
                                        <a href="#">
                                            <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="img-fluid rounded-circle" alt="...">
                                        </a>
                                        <a href="#">
                                            <img src="https://bootdey.com/img/Content/avatar/avatar2.png" class="img-fluid rounded-circle" alt="...">
                                        </a>
                                        <a href="#">
                                            <img src="https://bootdey.com/img/Content/avatar/avatar3.png" class="img-fluid rounded-circle" alt="...">
                                        </a>
                                        <a href="#">
                                            <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="img-fluid rounded-circle" alt="...">
                                        </a>
                                    </div> -->
                                </div>
                                <div class="col no-padding d-flex justify-content-end">
                                  <!--  <div class="meta">
                                        <ul>
                                            <li><a href="#"><i class="la la-comment"></i><span class="numb">38</span></a></li>
                                            <li><a href="#"><i class="la la-heart"></i><span class="numb">94</span></a></li>
                                        </ul>
                                    </div> -->
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

       
</content>

</html>