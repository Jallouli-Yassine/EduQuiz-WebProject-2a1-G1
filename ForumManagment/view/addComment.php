<?php
include '../Controllers/commentController.php';
    require_once"../Controllers/commentController.php";
    require_once"../model/modelComment.php";
    

   
    $error = "";

    // create adherent
    $comment = null;

    // create an instance of the controller
    $commentC = new commentC();
    if (
        isset($_POST["idcomment"]) &&
		isset($_POST["iduser"]) &&		
        isset($_POST["nameuser"]) &&
		isset($_POST["content"]) && 
        isset($_POST["date"]) && 
        isset($_POST["idpost"])
    ) {
        if (
            !empty($_POST["idcomment"]) && 
			!empty($_POST['iduser']) &&
            !empty($_POST["nameuser"]) && 
			!empty($_POST["content"]) && 
            !empty($_POST["date"]) && 
            !empty($_POST["idpost"])
        ) {
            $comment = new comment(
                $_POST['idcomment'],
				$_POST['iduser'],
                $_POST['nameuser'], 
				$_POST['content'],
                $_POST['date'],
                $_POST['idpost']
            );
            $commentC->ajoutercomment($comment);
            header('Location:addPost.php');
        }
        else
            $error = "Missing information";
    }

    
?>
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

                                    <input  value="50"  type="hidden" name="Idcomment" id="Idcomment" class="form-control" />
                                    <input  value="50"  type="hidden" name="Iduser" id="Iduser" class="form-control" />
                                    <input  value="2021-06-23"  type="hidden" name="date" id="date" class="form-control" />
                                    <input  value="salma"  type="hidden" name="nameuser" id="nameuser" class="form-control" />



                                    </div>

                                    <div class="col-sm-6">
                            <div class="form-group">
                                <div class="form-outline">
                                    <input class="form-control" name="comment" id="comment" type="text"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter The Comment'"
                                        placeholder='Enter The Comment'>
                                    <label class="form-label" for="Title">Enter The Comment</label>
                                </div>
                                <small id="errorComment"></small>
                            </div>
                        </div>

                        <div class="form-group mt-3">
                        <button type="submit" class="btn_4">add post</button>
                    </div>
                </form>
            </div>
        </center>

    </section>


      
    </body>
</html>