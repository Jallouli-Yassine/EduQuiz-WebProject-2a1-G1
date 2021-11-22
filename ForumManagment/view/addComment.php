<?php 
	include '../Controllers/commentController.php';
    require_once"./../controllers/commentController.php";
    require_once"./../model/modelComment.php";

        if( isset($_COMMENT['Iduser']) 
            && isset($_COMMENT['nameuser']) 
            && isset($_COMMENT['content']) 
            && isset($_COMMENT['date']) 
            && isset($_COMMENT['Idpost']) 
            ){

        if( !empty($_COMMENT['Iduser'])&&
            !empty($_COMMENT['nameuser'])&&
            !empty($_COMMENT['content'])&&
            !empty($_COMMENT['date'])&& 
            !empty($_COMMENT['Idpost']) 
            )
            {
                $commentC = new CommentC();
                $comment = new Comment($_COMMENT[''],
                $_COMMENT['Iduser'],
                $_COMMENT['nameuser'],
                $_COMMENT['content'],
                $_COMMENT['date'],
                $_COMMENT['Idpost'],
                0
            );

                $commentC->ajouterComment($comment);

                header("Location:./forum.php");
            }
        }
      

        function redirect($url) {
            ob_start();
            header('Location: '.$url);
            ob_end_flush();
            die();
        }
	$commentC=new CommentC();
	$listecomment=$commentC->affichercomment(); 
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

</head>


<body>
<section class="special_cource padding_top">
        <center>
            <div class="col-lg-8">
                <form class="form-contact contact_form" action="" method="POST" id="contactForm" novalidate="novalidate">
                    <div class="row">

                                    <input  value="50"  type="hidden" name="Idpost" id="Idpost" class="form-control" />
                                    <input  value="50"  type="hidden" name="Iduser" id="Iduser" class="form-control" />
                                    <input  value="2021-06-23"  type="hidden" name="date" id="date" class="form-control" />
                                    <input  value="salma"  type="hidden" name="nameuser" id="nameuser" class="form-control" />

                        <div class="col-sm-6">
                            <div class="form-group">
                                <div class="form-outline">
                                    <input class="form-control" name="title" id="title" type="text"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter The Title'"
                                        placeholder='Enter The Title'>
                                    <label class="form-label" for="Title">Enter The Title</label>
                                </div>
                                <small id="errorTitle"></small>
                            </div>
                        </div>

              
                        <div class="col-12">
                            <div class="form-group">
                                <div class="form-outline">
                                    <textarea name="content" class="form-control" id="content" rows="4"></textarea>
                                    <label class="form-label" for="content">Enter The Description</label>
                                </div>
                                <small id="errorDescription"></small>
                            </div>
                        </div>



                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="add_course button button-contactForm btn_1">add post</button>
                    </div>
                </form>
            </div>
        </center>

    </section>
    <!--::blog_part end::-->


    </body>

</html>