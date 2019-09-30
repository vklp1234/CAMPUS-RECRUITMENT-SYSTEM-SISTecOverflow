   <?php 
$sql1 = "select * from tbl_student_profile where email='$userData'";

$run1 = mysqli_query($con,$sql1);
$data = mysqli_fetch_assoc($run1);

?>
   <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <div class="top-left-part">
                    <!-- Logo -->
                    <a class="logo" href="Dashboard.php">
                        <!-- Logo icon image, you can use font-icon also --><b>
                            <!--This is dark logo icon--><img src="../assets/img/favicon.png" alt="home"
                            class="dark-logo" />
                            <!--This is light logo icon--><img src="../assets/img/favicon.png" alt="home"
                            class="light-logo" />
                        </b>
                        <!-- Logo text image you can use text also --><span class="hidden-xs">
                            <!--This is dark logo text--><img src="../assets/img/textfavicon.png" alt="home"
                            class="dark-logo" />
                            <!--This is light logo text--><img src="../assets/img/textfavicon.png" alt="home"
                            class="light-logo" />
                        </span> </a>
                    </div>
                    <!-- /Logo -->
                    <ul class="nav navbar-top-links navbar-right pull-right">
                        <li>
                            <a class="nav-toggler open-close waves-effect waves-light hidden-md hidden-lg"
                            href="javascript:void(0)"><i class="fa fa-bars"></i></a>
                        </li>
                   <!--  <li>
                        <form role="search" class="app-search hidden-sm hidden-xs m-r-10">
                            <input type="text" placeholder="Search..." class="form-control"> <a href=""><i
                                    class="fa fa-search"></i></a> </form>
                                </li> -->
                                <li>
                                    <a class="profile-pic" href="#">
                                    <?php 
                                    if(isset($data['profile_photo']))
                                        {
                                            ?> <img src="../uploads/<?php echo $data['profile_photo'];?>" alt="user-img"
                                        width="36" class="img-circle">
                                        <?php
                                    }else
                                    {
                                        ?>
                                         <img src="../plugins/images/users/varun.jpg" alt="user-img"
                                        width="36" class="img-circle">
                                        <?php
                                    }
                                    ?><b class="hidden-xs"><?php echo $userData;?></b></a>
                                    </li>
                                    <li>
                                        <a class="profile-pic" href="../logout.php"> <b class="hidden-xs btn btn-sm btn-warning logout-campus">Logout</b></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- /.navbar-header -->
                            <!-- /.navbar-top-links -->
                            <!-- /.navbar-static-side -->
                        </nav>
                        <!-- End Top Navigation -->
                        <!-- ============================================================== -->
                        <!-- Left Sidebar - style you can find in sidebar.scss  -->
                        <!-- ============================================================== -->
                        <div class="navbar-default sidebar" role="navigation">
                            <div class="sidebar-nav slimscrollsidebar">
                                <div class="sidebar-head">
                                    <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span
                                        class="hide-menu">Menu List</span></h3>
                                    </div>
                                    <ul class="nav" id="side-menu">
                                        <li style="padding: 70px 0 0;">
                                            <a href="Student_information.php?profile=<?php echo $role;?>" class="waves-effect"><i class="fa fa-clock-o fa-fw"
                                                aria-hidden="true"></i>Dashboard</a>
                                            </li>
                                            <li>
                                                <a href="student_profile.php?response=&profile=<?php echo $role;?>" class="waves-effect"><i class="fa fa-user fa-fw"
                                                    aria-hidden="true"></i>Profile</a>
                                                </li>
                                                <li>
                                                    <a href="student_academic.php" class="waves-effect"><i class="fa fa-graduation-cap fa-fw"
                                                        aria-hidden="true"></i>Academic</a>
                                                    </li>
                                                    <li>
                                                        <a href="http://localhost/masterproject/" class="waves-effect" target="_blank"><i class="fa fa-newspaper-o fa-fw"
                                                            aria-hidden="true"></i>Blog</a>
                                                        </li>
                                                        <li >
                                                           <a href="../logout.php" class="waves-effect hide1"><i class="fa fa-power-off fa-fw"
                                                            aria-hidden="true"></i>Logout</a>
                                                        </li>
                   <!--  <li>
                        <a href="map-google.html" class="waves-effect"><i class="fa fa-globe fa-fw"
                                aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="blank.html" class="waves-effect"><i class="fa fa-columns fa-fw"
                                aria-hidden="true"></i>Blank Page</a>
                    </li>
                    <li>
                        <a href="404.html" class="waves-effect"><i class="fa fa-info-circle fa-fw"
                                aria-hidden="true"></i>Error 404</a>
                            </li> -->
                        </ul>

                    </div>
                </div>