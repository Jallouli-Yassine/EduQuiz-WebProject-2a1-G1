<?php session_start(); ?>
<header class="main_menu single_page_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a style="width: 90px;" class="navbar-brand logo_1" href="./../../../usemanagment/view/index.php"> <img
                                src="./../img/EduQuizWhite.png" alt="logo"> </a>
                        <a style="width: 90px;" class="navbar-brand logo_2" href="./../../../usemanagment/view/index.php"> <img
                                src="./../img/EduQuiz.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-end"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item ">
                                    <a class="nav-link" href="./../../../usemanagment/view/index.php">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="./../../../usemanagment/view/about.php">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="./../../../CourseManagment/view/cource.php">Courses</a>
                                </li>
                                <?php if( !empty($_SESSION['user'])){ ?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#">Events</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <?php if($_SESSION['role']==="prof"){ ?>
                                        <a class="dropdown-item" href="./cource.php">Add Event</a>
                                        <a class="dropdown-item" href="./AfficherListeAdherents.php">event profile</a>
                                        <?php } ?>
                                        <?php if($_SESSION['role']==="user"){ ?>
                                        <a class="dropdown-item" href="./accueil.php">home event</a>
                                        <?php } ?>
                                    </div>
                                </li>
                                <?php } ?>
                                <li class="nav-item">
                                <a class="nav-link" href="./../../../salma/ForumManagment/view/addPost.php">Forum</a>
                                </li>
                                <?php if($_SESSION['role']!="admin"){ ?>
                                <li class="nav-item">
                                <a class="nav-link" href="./../../salma/ForumManagment/view/addPost.php">Profile</a>
                                </li>
                                <?php } ?>
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

                                    <form action="./../../../usemanagment/view/registre.php" method="post">
                                        <input class="btn_1" type="submit" value="register">
                                    </form>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>