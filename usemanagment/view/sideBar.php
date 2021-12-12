<div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                <strong><a href="index.html"><img src="img/logo/logosn.png" alt="" /></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">

                        
                        <li>
                            <a title="Landing Page" href="./../../CourseManagment/view/all-events.php" aria-expanded="false"><span
                                    class="educate-icon educate-event icon-wrap sub-icon-mg" aria-hidden="true"></span>
                                <span class="mini-click-non">Event</span></a>
                        </li>
                        

                        <li>
                            <a class="has-arrow" href="all-students.html" aria-expanded="false"><span
                                    class="educate-icon educate-student icon-wrap"></span> <span
                                    class="mini-click-non">Students</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                            <?php if($_SESSION['role']==="admin"){ ?>
                                <li><a title="All Students" href="./../../usemanagment/view/all-users.php"><span class="mini-sub-pro">All Students</span></a></li>
                                            <?php } ?>
                            </ul>
                        </li>
                        
                        <li>
                            <a class="has-arrow" href="all-games.php" aria-expanded="false"><span
                                    class="educate-icon educate-student icon-wrap"></span> <span
                                    class="mini-click-non">games</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                            <?php if($_SESSION['role']==="admin"){ ?>
                                <li><a title="All Students" href="../../CourseManagment/view/all-games.php"><span class="mini-sub-pro">All Games</span></a></li>
                                            <?php } ?>
                            </ul>
                        </li>

                        <li class="active">
                            <a class="has-arrow" href="all-courses.php" aria-expanded="false"><span
                                    class="educate-icon educate-course icon-wrap"></span> <span
                                    class="mini-click-non">Courses</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                            <?php  if($_SESSION['role']==="admin"){ ?>
                                <li><a title="All Courses" href="./../../CourseManagment/view/all-courses.php"><span class="mini-sub-pro">All
                                            Courses</span></a></li>
                                            <?php }else if($_SESSION['role']==="prof"){ ?>
                                <li><a title="All Courses" href="./../../CourseManagment/view/myCourse.php"><span class="mini-sub-pro">My
                                            Courses</span></a></li>
                                <li><a title="Add Courses" href="./../../CourseManagment/view/add-course.php"><span class="mini-sub-pro">Add
                                            Course</span></a></li>
                                            <?php } ?>

                                            <!-- 
                                <li><a title="Edit Courses" href="edit-course.html"><span class="mini-sub-pro">Edit
                                            Course</span></a></li>
                                <li><a title="Courses Profile" href="course-info.html"><span
                                            class="mini-sub-pro">Courses Info</span></a></li>
                                <li><a title="course Payment" href="course-payment.html"><span
                                            class="mini-sub-pro">Courses Payment</span></a></li>
                                             -->

                            </ul>
                        </li>

                    </ul>
                </nav>
            </div>
        </nav>
    </div>