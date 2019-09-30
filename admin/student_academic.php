 <?php
 session_start();
 $role = $_GET['profile'];
 if (isset($_SESSION['EmailID']) && isset($_SESSION['role']) && $role == 'student')
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
$sql = "select enrollment_no from  tbl_student_profile where email='$userData'";
$run = mysqli_query($con,$sql);
$respon = mysqli_fetch_assoc($run);
$enrollment_data = $respon['enrollment_no'];
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

    <link href="https://fonts.googleapis.com/css?family=Orbitron|Audiowide|Electrolize|Turret+Road|Saira+Stencil+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
        .alert-icon{
         color: #fd397a !important;
         font-size: 2.4rem;
         display: block;
         float: left;
         padding: 0px 3px;
     }
 </style>





</head>

<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
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
                                    <li class="active">Student Academic Profile</li>
                                </ol>
                            </div>
                            <!-- /.col-lg-12 -->
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="white-box">
                                    <h3 class="box-title"> <span class="inf-campus"> Academic'S <small style="color: red;">Record</small> </span></h3>
                                    <hr>

                                    <div class="row">

                                        <div class="col-md-6">

                                            <div class="heading-panel">
                                                <h2>Academic Update's <small style="color: red; font-size: 16px;">Panel</small></h2>
                                            </div>
                                            <hr/>
                                            <div class="col-md-12">
                                                <div id="alert-campus-msg" class="alert alert-info alert-dismissable  hide"> <a class="panel-close close" data-dismiss="alert">×</a>
                                                   <div class="alert-icon" id="check_campus"><i class="fa fa-warning"></i></div>
                                                   <div class="alert-text" id="alert_msg">
                                                   </div>

                                               </div>

                                           </div>
                                           <div class="col-md-12">
                                            <input type="text" name="enrollment_no" id="enrollment_no" class="form-control" value="<?php echo $respon['enrollment_no'];?>" placeholder="ENROLLMENT ID" disabled>
                                            <input type="hidden" name="enrollment_no" id="enrollment_no"  value="<?php echo $respon['enrollment_no'];?>" >

                                        </div>
                                        <div class="col-md-6 mb-10">
                                            <select class="form-control" name="semester" id="semester" class="required" onchange="massagehide()"> 
                                                <option value="" disabled="disabled" selected="selected">-Choose Semester-</option>
                                                <option value="1"> 1 </option>
                                                <option value="2"> 2 </option>
                                                <option value="3"> 3 </option>
                                                <option value="4"> 4 </option>
                                                <option value="5"> 5 </option>
                                                <option value="6"> 6 </option>
                                                <option value="7"> 7 </option>
                                                <option value="8"> 8 </option>
                                            </select>
                                            <div class="form-error-msg" id="semester_error"></div> 
                                        </div>
                                        <div class="col-md-6 mb-10">
                                            <input type="text" name="cgpa" id="cgpa" class="form-control" placeholder="CGPA" value=""> 
                                            <div class="form-error-msg" id="cgpa_error"></div> 
                                        </div>
                                        <div class="col-md-12 mb-10">
                                            <select class="form-control" name="backlok" id="backlok" onchange="massagehide()"> 
                                                <option value="" disabled="disabled" selected="selected">-Backlok's-</option>
                                                <option value="0"> 0 </option>
                                                <option value="1"> 1 </option>
                                                <option value="2"> 2 </option>
                                                <option value="3"> 3 </option>
                                                <option value="4"> 4 </option>
                                                <option value="5"> 5 </option>
                                            </select>
                                            <div class="form-error-msg" id="backlok_error"></div> 

                                        </div>
                                        <div class="col-md-6 mb-10">
                                            <button id="save" name="save" class="btn btn-primary btn-sm">Save Record</button>

                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="aca-heading">
                                            <h2 class="aca-align">
                                                Academic's <small style="color: red;">Recored</small>
                                            </h2>
                                        </div>
                                        <div class="col-lg-12 aca-table">
                                            <div class="white-box pd-0">
                                                <div class="table-responsive">
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th>S.NO</th>
                                                                <th>Semester</th>
                                                                <th>CGPA</th>
                                                                <th>Backlock</th>

                                                            </tr>
                                                        </thead>
                                                        <tbody id="aca_record">
                                                            <?php 
                                                            $sql = "select * from tbl_academic where enrollment_no='$enrollment_data'";
                                                            $run = mysqli_query($con,$sql);
                                                            $row = mysqli_num_rows($run);
                                                            $count=0;
                                                            if($row>0){
                                                                while ($fetch = mysqli_fetch_assoc($run)) {
                                                                    $count++;
                                                                    ?>
                                                                    <tr>
                                                                        <td><?php echo $count;?></td>
                                                                        <td><?php echo $fetch['semester'];?></td>
                                                                        <td><?php echo $fetch['cgpa'];?></td>
                                                                        <td><?php echo $fetch['backlog'];?></td>
                                                                    </tr>
                                                                    <?php
                                                                }
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

                function massagehide()
                {
                   $("#alert-campus-msg").addClass('hide');
               }
               $(document).on('click','button#save',function(){
                $('.form-error-msg').html('');
                var validation_error = 0;

                var enrollment = $("#enrollment_no").val();
                var semester = $("#semester").val();
                var cgpa = $("#cgpa").val();
                var backlok = $("#backlok").val();
                if (semester==null) {

                    validation_error++;
                    $('#semester_error').html('<i class="fa fa-warning"></i> This field is required!');
                }
                if (cgpa=='') {

                    validation_error++;
                    $('#cgpa_error').html('<i class="fa fa-warning"></i> This field is required!');
                }
                if (backlok==null) {
                   validation_error++;
                   $("#backlok_error").html('<i class="fa fa-warning"></i> This field is required!');
               }
               if (validation_error==0) {
                $.ajax({
                    url:'academic_process.php',
                    method:'POST',
                    dataType:'JSON',
                    data:{enrollment:enrollment,semester:semester,cgpa:cgpa,backlok:backlok},
                    success:function(response){
                        if (response.status=='success') {
                            $("#alert-campus-msg").removeClass('hide');
                            $("#check_campus").html('<i class="fa fa-check"></i>');
                            $("#alert_msg").html(response.msg);
                            setTimeout(function(){  window.location = 'student_academic.php?profile=<?php echo $role;?>'; },0);

                        }else{
                            if (response.status=='200') {
                               $("#alert-campus-msg").removeClass('hide');
                               $("#alert_msg").html('An error occured: '+response.status+' '+  response.msg);
                           }
                       }
                   },
                   error: function (xhr) {

                        //console.log(xhr);
                        $("#alert-campus-msg").removeClass('hide');
                        $("#alert_msg").html('An error occured:'+xhr.status+' '+  xhr.statusText);
                        $('button').prop('disabled',false); 
                    }



                });

            }else{
                $("#alert-campus-msg").removeClass('hide');
                $("#alert_msg").html('All the mandatory fields in the form has not been filled as required. Please check once and then submit!');
            }




        });

    </script>




</body>

</html>