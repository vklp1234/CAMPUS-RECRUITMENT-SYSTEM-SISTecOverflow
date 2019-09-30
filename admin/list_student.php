 <?php
 session_start();
 $role = $_GET['profile'];
 if (isset($_SESSION['EmailID']) && isset($_SESSION['role']) && $role=='TNPHEAD' || $role=='TNPCOORDINATOR')
 {
   $userData = $_SESSION['EmailID'];
}else{
	header("Location: ../Home.php");
}
?>
<?php
include '../database/dbconnect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../assets/img/logo.png">
    <title>CSR | TNP STUDENT INFORMATION PANEL</title>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="css/colors/default.css" id="theme" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Electrolize|Turret+Road|Saira+Stencil+One&display=swap" rel="stylesheet">


    
    
    
    
</head>

<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
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
                                    <a class="profile-pic" href="#"> <img src="../plugins/images/users/varun.jpg" alt="user-img"
                                        width="36" class="img-circle"><b class="hidden-xs"><?php echo $userData;?></b></a>
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
                                        class="hide-menu">Navigation</span></h3>
                                    </div>
                                    <ul class="nav" id="side-menu">
                                        <li style="padding: 70px 0 0;">
                                            <a href="Dashboard.php?profile=<?php echo $role;?>" class="waves-effect"><i class="fa fa-clock-o fa-fw"
                                                aria-hidden="true"></i>Dashboard</a>
                                            </li>
                                            <li>
                                                <a href="tnp_member_info.php?profile=<?php echo $role;?>" class="waves-effect"><i class="fa fa-user fa-fw"
                                                    aria-hidden="true"></i>TNP Information</a>
                                                </li>
                                                <li>
                                                   <a href="tnp_student_information.php?profile=<?php echo $role;?>" class="waves-effect"><i class="fa fa-check-square-o fa-fw"
                                                    aria-hidden="true"></i>Student Eligibility</a>
                                                </li>
                                                <li>
                                                    <a href="#upcoming_drive.php?profile=<?php echo $role;?>" class="waves-effect"><i class="fa fa-info-circle fa-fw"
                                                        aria-hidden="true"></i>Student Information</a>
                                                    </li>
                                                    
                                                        <li>
                                                            <a href="#fontawesome.html?" class="waves-effect"><i class="fa fa-newspaper-o fa-fw"
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
                <!-- ============================================================== -->
                <!-- End Left Sidebar -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Page Content -->
                <!-- ============================================================== -->
                <div id="page-wrapper">
                    <div class="container-fluid">
                        <div class="row bg-title">
                            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                                <h4 class="page-title">Admin</h4>
                            </div>
                            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">

                                <ol class="breadcrumb">
                                    <li><a href="#">Dashboard</a></li>
                                    <li class="active"> Student Eligiblity</li>
                                </ol>
                            </div>
                            <!-- /.col-lg-12 -->
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="white-box">
                                    <h3 class="box-title"> <span class="inf-campus">List Of Students </span></h3>
                                    <hr>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="white-box">
                                                <div class="row">
                                                    
                                                             <div class="col-md-4 mbb-10 ">
                                                            <select class="form-control" name="batch" id="batch"  >
                                                                <option value="" disabled="disabled" selected="selected">BATCH</option>
                                                                <option value="2018" >2018</option>
                                                                <option value="2019" >2019</option>
                                                                <option value="2020" >2020</option>
                                                                <option value="2021" >2021</option>
                                                                <option value="2022" >2022</option>
                                                                <option value="2023" >2023</option>
                                                                <option value="2024" >2024</option>
                                                            </select>
                                                            <div class="form-error-msg" id="batch_error"></div>

                                                        </div>
                                                            </div>
                                                <p class="text-muted">List: <code> Of Batch Vise Students</code></p>
                                                
                                                <div class="table-responsive mb-10 ">
                                                    <table class="table">
                                                        <thead>
                                                            
                                                            <tr>
                                                                <th>S.No</th>
                                                                <th>Enroll. No</th>
                                                                <th>Full Name</th>
                                                                <th>Father Name</th>
                                                                <th>Father Cont.</th>
                                                                <th>Student Cont.</th>
                                                                <th>Email</th><!-- mailto: mailid not api -->
                                                                <th>College</th>
                                                                <th>Gender</th>
                                                                <th>City</th>
                                                                <th>State</th>
                                                                <th>10 <sup>th</sup></th>
                                                                <th>12 <sup>th</sup></th>
                                                               
                                                                <th>Academic</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="record_show">
                                                            <tr>
                                                                    <td colspan="13">No Students Eligible At</td>
                                                           </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        
                                    </div>
                                   
                                  


                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="myModal" class="modal fade" role="dialog">
                      <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Student Academic Record</h4>
                          </div>
                          <div class="modal-body">
                             <div class="table-responsive  ">
                                                    <table class="table">
                                                        <thead>
                                                            
                                                            <tr>
                                                                <th>S.No</th>
                                                                <th>SEMESTER</th>
                                                                <th>CGPA</th>
                                                                <th>BACKLOG</th>
                                                               
                                                            </tr>
                                                        </thead>
                                                        <tbody id="record_aca">
                                                            <tr>
                                                                    <td colspan="13">No Students Eligible At</td>
                                                           </tr>

                                                        </tbody>
                                                    </table>
                                                </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          </div>
                        </div>

                      </div>
                     </div>
                    <!-- /.container-fluid -->
                    <footer class="footer text-center " style="font-weight: 500;">Copyright © 2019. All Right Reseved . Powered By SISTec . Design By Vishwas Lodhi.</footer>
                </div>
                <!-- ============================================================== -->
                <!-- End Page Content -->
                <!-- ============================================================== -->
            </div>
            <!-- /#wrapper -->
            <!-- jQuery -->
            <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
            <!-- Bootstrap Core JavaScript -->
            <script src="bootstrap/dist/js/bootstrap.min.js"></script>
            <!-- Menu Plugin JavaScript -->
            <script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
            <!--slimscroll JavaScript -->
            <script src="js/jquery.slimscroll.js"></script>
            <!--Wave Effects -->
            <script src="js/waves.js"></script>
            <!-- Custom Theme JavaScript -->
            <script src="js/custom.min.js"></script>



            <script type="text/javascript">

                
         </script>
     </body>

     </html>