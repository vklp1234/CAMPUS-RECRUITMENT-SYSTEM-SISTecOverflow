  <?php
  session_start();
  $role = $_GET['profile'];
  if (isset($_SESSION['EmailID']) && isset($_SESSION['role']) && $role=='student')
  {
   $userData = $_SESSION['EmailID'];
}else{
 header("Location: ../Home.php");
}
?> 
<?php
include '../database/dbconnect.php';
?>
<?php 
$sql1 = "select * from tbl_student_profile where email='$userData'";

$run1 = mysqli_query($con,$sql1);
$data = mysqli_fetch_assoc($run1);
$enroll_num = $data['enrollment_no'];

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
    <title>CSR |  STUDENT DASHBOARD</title>
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
                                                    <a href="student_academic.php?profile=<?php echo $role?>" class="waves-effect"><i class="fa fa-graduation-cap fa-fw"
                                                        aria-hidden="true"></i>Academic</a>
                                                    </li>
                                                    <li>
                                                      <a href="company_selection_detail.php?profile=<?php echo $role?>" class="waves-effect"><i class="fa fa-building-o fa-fw"
                                                        aria-hidden="true"></i>Company Selection</a>
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
                                <h4 class="page-title">STUDENT</h4>
                            </div>
                            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">

                                <ol class="breadcrumb">
                                    <li><a href="#">Dashboard</a></li>
                                    <li class="active">Drives Information</li>
                                </ol>
                            </div>
                            <!-- /.col-lg-12 -->
                        </div>
                        <div class="row panel-pd">
                            <div class="col-md-12">
                                <div class="white-box">
                                    <h3 class="box-title"> <span class="inf-campus"> Upcoming Drives </span></h3>
                                    <hr>
                                    <div class="row">
                                      <div class="col-md-12 tab-minwidth">
                                        <div class="tab">
                                          <button class="tablinks" onclick="openCity(event, 'companylist')" >Companies List</button>
                                          <button class="tablinks" onclick="openCity(event, 'selected')">Selected <span class="hidden-cmp">In Companies</span></button>


                                      </div>
                                  </div>
                              </div>
                              <div class="row tabcontent" id="companylist">
                                  <div class="col-md-11 info-form-panel mt-10">
                                    <div class="Info-heading">
                                      <h2>
                                        <span class="heading-text">List Of Companies</span>
                                    </h2>

                                </div>
                                <div class="form-panel-control1">
                                  <div class="row">

                                    <div class="col-sm-12">
                                      <div class="white-box">
                                        <!-- <h3 class="box-title">Basic Table</h3> -->
                                        <div class="table-responsive">
                                          <table class="table">
                                            <thead>
                                              <tr>
                                                <th>S.NO</th>
                                                <th>COMPANY NAME</th>
                                                <th>COMPANY LINK</th>
                                                <th>LOCATION</th>
                                                <th>visit Institute</th>
                                                <th>Visit Date</th>
                                                <th>Batch</th>
                                                <th>Job Profile</th>
                                                <th>Branch</th>
                                            </tr>
                                        </thead>
                                        <tbody id="selected_student_show">


                                          <?php 
                                          $sql = "SELECT * FROM tbl_company";
                                          $run = mysqli_query($con,$sql);
                                          $count=0;
                                          while($fetch = mysqli_fetch_assoc($run))
                                          {
                                            $count++;
                                            ?>
                                            <tr>
                                              <td><?php echo $count.'.';?></td>
                                              <td><?php echo $fetch['company_name'];?></td>
                                              <td><a href="<?php echo 'https://'.$fetch['company_url'];?>" target="_blank"><?php echo $fetch['company_url'];?></a></td>
                                              <td><?php echo $fetch['job_location'];?></td>
                                              <td><?php echo $fetch['visit_institute'];?></td>
                                              <td><?php echo $fetch['visiting_date'];?></td>
                                              <td><?php echo $fetch['batch'];?></td>
                                              <td><?php echo $fetch['job_profile'];?></td>

                                              <td><?php echo $fetch['branch'];?></td>

                                          </tr>
                                          <?php
                                      }
                                      ?> 

                                  </tbody>
                              </table>
                          </div>

                      </div>
                  </div>
              </div>

          </div>
      </div>
  </div>
  <div class="row tabcontent" id="selected">
      <div class="col-md-11 info-form-panel mt-10">
        <div class="Info-heading">
          <h2>
            <span class="heading-text">List Of Companies</span>
        </h2>

    </div>
    <div class="form-panel-control1">
      <div class="row">

        <div class="col-sm-12">
          <div class="white-box">
            <!-- <h3 class="box-title">Basic Table</h3> -->
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>S.NO</th>
                    <th>Company Name</th>
                    <th>Company Link</th>
                    <th>job Location</th>
                    <th>Job Profile</th>
                    <th>Package </th>
                    <th>Visiting Date</th>
                    <th>Selection Date</th>
                </tr>
            </thead>
            <tbody >
                <?php
                $sql = "SELECT tc.company_name,tc.company_url,tc.job_location,tc.job_profile,tc.package,tc.visiting_date,ts.selection_date from tbl_selection ts,tbl_company tc where ts.company_id = tc.company_id and ts.enrollment_no='$enroll_num' and ts.selection_status='YES' ";
                $run = mysqli_query($con,$sql);
                $row = mysqli_num_rows($run);
                if ($row>0) {
                    $count=0;
                    while ($fetch_echo = mysqli_fetch_assoc($run)) {
                        $count++;
                        ?>
                        <tr>
                            <td><?php echo $count;?></td>
                            <td><?php echo $fetch_echo['company_name']?></td>
                            <td><a href="http://<?php echo $fetch_echo['company_url']?>"><?php echo $fetch_echo['company_url']?></a></td>
                            <td><?php echo $fetch_echo['job_location']?></td>
                            <td><?php echo $fetch_echo['job_profile']?></td>
                            <td><?php echo $fetch_echo['package']?></td>
                            <td><?php echo $fetch_echo['visiting_date']?></td>
                            <td><?php echo $fetch_echo['selection_date']?></td>
                        </tr>
                        <?php
                    }
                    


                }else{
                    ?>
                    <tr>
                     <td colspan="8"><i>No Data Founded Yet !</i></td>
                 </tr> 
                 <?php
             }

             ?>



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
    
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
          tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
          tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";
  }

</script>

</body>

</html>