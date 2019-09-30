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
$sql = "select user_id,full_name,mobile,gender,detartment from tbl_user where email='$userData'";
$run = mysqli_query($con,$sql);
$fetch = mysqli_fetch_assoc($run);
?>
<?php 
$sql1 = "select * from tbl_student_profile where email='$userData'";

$run1 = mysqli_query($con,$sql1);
$data = mysqli_fetch_assoc($run1);

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
                                                    <a href="student_academic.php?profile=<?php echo $role?>" class="waves-effect"><i class="fa fa-building-o fa-fw"
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
                                    <li class="active">Student Profile Edit</li>
                                </ol>
                            </div>
                            <!-- /.col-lg-12 -->
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="white-box">
                                    <h3 class="box-title"> <span class="inf-campus"> Profile <small style="color: red;">MANAGE</small> </span></h3>
                                    <hr>
                               <!--  <h1 class="heading-text">Profile <small style="color: red;">MANAGE</small></h1>
                            	<div class="row">
                                    <div class="col-md-12 upcoming-campus">
                                        
                                    </div>
                                    
                                </div> -->

                                <div class="row m-y-2">
                                    <!-- edit form column -->
                                        <!-- <div class="col-md-8 text-lg-center">
                                            <h2>Edit Profile</h2>
                                        </div> -->
                                        <!-- <div class="col-md-8">
                                            <div class="alert alert-info alert-dismissable"> <a class="panel-close close" data-dismiss="alert">×</a>
                                                This is an <strong>.alert</strong>. Use this to show important messages to the user.
                                            </div>
                                        </div> -->
                                        <div class="row">
                                            <div class="col-md-8 col-lg-3 text-lg-center">
                                                <h2>Edit Profile</h2>

                                            </div>
                                            <div class="col-lg-8 col-md-9 ">
                                                <div id="alert-campus-msg" class="alert alert-info alert-dismissable alert-campus hide"> <a class="panel-close close" data-dismiss="alert">×</a>
                                                 <div class="alert-icon" id="check_campus"><i class="fa fa-warning"></i></div>
                                                 <div class="alert-text" id="alert_msg">
                                                 </div>

                                             </div>
                                         </div>
                                     </div>
                                     <form class="form" action="profile_process.php" method="POST" onsubmit="return validate();" enctype="multipart/form-data">
                                         <?php if(isset($data['profile_photo'])){?> <div class="col-md-8 col-lg-3 pull-lg-8 text-xs-center" align="center">
                                             <img src="../uploads/<?php echo $data['profile_photo'];?>" class="m-x-auto img-fluid img-circle img-campus" alt="avatar" />
                                             <h6 class="m-t-2">Upload a different photo</h6>
                                             <label class="custom-file mb-5">
                                               <input type="file" name="image" id="image" class="custom-file-input">
                                               <span class="custom-file-control ">Choose file</span>
                                           </label>
                                           <div class="form-error-msg" id="pic_error"></div>
                                       </div>
                                       <?php
                                   }else{
                                    ?>
                                    <div class="col-md-8 col-lg-3 pull-lg-8 text-xs-center" align="center">
                                     <img src="//placehold.it/150" class="m-x-auto img-fluid img-circle" alt="avatar" />
                                     <h6 class="m-t-2">Upload a different photo</h6>
                                     <label class="custom-file mb-5">
                                       <input type="file" name="image" id="image" class="custom-file-input">
                                       <span class="custom-file-control ">Choose file</span>
                                   </label>
                                   <div class="form-error-msg" id="pic_error"></div>
                               </div>
                               <?php
                           }
                           ?>
                           <input type="hidden" name="userid" id="userid" value="<?php echo $fetch['user_id'];?>">

                           <div class="col-md-8 col-lg-9 push-lg-4 personal-info">

                            <div class="form-group row">
                                <label class="col-lg-3 col-md-3 col-form-label form-control-label">Full Name</label>
                                <div class="col-lg-7 col-md-9">
                                    <input class="form-control" type="text" name="full_name" id="full_name" value="<?php echo $fetch['full_name'];?>" />
                                    <div class="form-error-msg" id="fullname_error"></div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label"> College ID</label>
                                <div class="col-lg-7">
                                    <input class="form-control" type="text" name="college_id" id="college_id" value="<?php echo $data['enrollment_no'];?>" />

                                    <div class="form-error-msg" id="collegeid_error"></div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Email</label>
                                <div class="col-lg-7">
                                    <input class="form-control" type="email" name="email1" id="email1" value="<?php echo $userData;?>" disabled />
                                    <input class="form-control" type="hidden" name="email" id="email" value="<?php echo $userData;?>"  />
                                    <div class="form-error-msg" id="emailID_error"></div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Contact No</label>
                                <div class="col-lg-7">
                                    <input class="form-control" type="number" maxlength="10"  value="<?php echo $fetch['mobile'];?>"  disabled/>
                                    <input class="form-control" type="hidden" maxlength="10" name="Contact" id="Contact" value="<?php echo $fetch['mobile'];?>" />
                                    <div class="form-error-msg" id="Contact_error"></div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Father Name</label>
                                <div class="col-lg-7">
                                    <input class="form-control" type="text" name="father_name" id="father_name" value="<?php echo $data['father_name'];?>" />
                                    <div class="form-error-msg" id="father_error"></div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Mother Name</label>
                                <div class="col-lg-7">
                                    <input class="form-control" type="text" name="mother_name" id="mother_name" value="<?php echo $data['mother_name']?>" />
                                    <div class="form-error-msg" id="mother_error"></div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">Father Mobile No</label>
                                <div class="col-lg-7">
                                    <input class="form-control" type="number" maxlength="10" name="father_no" id="father_no" value="<?php echo $data['father_mobile_no'];?>" /><div class="form-error-msg" id="father_mobile_error"></div>
                                </div>
                            </div>
                                          <!--  <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label"></label>
                                                <div class="col-lg-">
                                                   
                                                </div>
                                                <div class="col-lg-2">
                                                    <input class="form-control" type="text" value="" placeholder="Passing Year" />
                                                </div>
                                            </div> -->
                                            <div class="form-group row">
                                                <label class="col-lg-3 col-form-label form-control-label">Degree Duration</label>
                                                <div class="col-lg-4  mb-5">
                                                 <input type="text" name="admission_year" id="admission_year" class="form-control" placeholder="ADDMISSION YEAR " value="<?php echo $data['admission_year'];?>">
                                                 <div class="form-error-msg" id="admission_year_error"></div>
                                             </div>
                                             <div class="col-lg-3">
                                                <input type="text" name="passing_year" id="passing_year" class="form-control" placeholder="PASSING YEAR" value="<?php echo $data['passing_year'];?>">
                                                <div class="form-error-msg" id="passing_year_error"></div> 
                                            </div>

                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label">College Name</label>
                                            <div class="col-lg-7">
                                                <input class="form-control" type="text" name="College_name" id="College_name" value="<?php echo $data['college'];?>" />
                                                <div class="form-error-msg" id="collegename_error"></div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label"></label>
                                            <div class="col-lg-4 mb-5">
                                                <select class="form-control" name="course" id="course" required="required">
                                                    <option value="" disabled="disabled" selected="selected">Choose Course</option>
                                                    <option value="be" <?=$data['course'] == 'be' ? ' selected="selected"' : '';?>> B.E </option>
                                                    <option value="btech" <?=$data['course'] == 'btech' ? ' selected="selected"' : '';?>> B.Tech </option>
                                                    <option value="mtech" <?=$data['course'] == 'mtech' ? ' selected="selected"' : '';?>> M.Tech </option>
                                                    <option value="mba" <?=$data['course'] == 'mba' ? ' selected="selected"' : '';?>> MBA </option>
                                                </select>
                                            </div>
                                            <div class="col-lg-3">
                                                <select class="form-control" name="branch" id="branch" required="required" >
                                                    <option value="" disabled="disabled" selected="selected">Choose Branch</option>
                                                    <option value="cse" <?=$fetch['detartment'] == 'cse' ? ' selected="selected"' : '';?>> CSE </option>
                                                    <option value="me"  <?=$fetch['detartment'] == 'me' ? ' selected="selected"' : '';?>> ME </option>
                                                    <option value="it"  <?=$fetch['detartment'] == 'it' ? ' selected="selected"' : '';?>> IT </option>
                                                    <option value="ce"  <?=$fetch['detartment'] == 'ce' ? ' selected="selected"' : '';?>> CE </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label form-control-label">Gender</label>
                                            <div class="col-lg-4">
                                             <input type="radio" name="gender" id="gender" value="male" <?php echo ($fetch['gender']=='m')?'checked':'' ?>> Male

                                         </div>
                                         <div class="col-lg-3">
                                            <input type="radio" name="gender" id="gender" value="female" <?php echo ($fetch['gender']=='f')?'checked':'' ?>> Female

                                        </div>
                                        <div class="form-error-msg" id="gender_error"></div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label form-control-label"></label>
                                        <div class="col-lg-4  mb-5">
                                         <input type="text" name="10th" id="10th" class="form-control" placeholder="10% " value="<?php echo $data['ssc_per'];?>">
                                         <div class="form-error-msg" id="10th_error"></div>
                                     </div>
                                     <div class="col-lg-3">
                                        <input type="text" name="12th" id="12th" class="form-control" placeholder="12%" value="<?php echo $data['hsc_per'];?>">
                                        <div class="form-error-msg" id="12th_error"></div> 
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label form-control-label"></label>
                                    <div class="col-lg-4 mb-5" >
                                     <input type="text" name="diploma" id="diploma" class="form-control" placeholder="DIPLOMA% LITERAL ENTRIES " value="<?php echo $data['diploma_per'];?>">
                                     <div class="form-error-msg" id="diploma_error"></div>
                                 </div>
                                 <div class="col-lg-3">
                                    <select class="form-control" name="university" id="university" required="required">
                                        <option value="" disabled="disabled" selected="selected">Choose University</option>
                                        <option value="rgpv" <?=$data['university'] == 'rgpv' ? ' selected="selected"' : '';?>> RGPV </option>
                                        <option value="buit" <?=$data['university'] == 'buit' ? ' selected="selected"' : '';?>> BUIT </option>

                                    </select>
                                </div>

                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-form-label form-control-label">General Info</label>
                                <div class="col-lg-4  mb-5">
                                 <input type="text" name="city" id="city" class="form-control" placeholder="CITY" value="<?php echo $data['city'];?>">
                                 <div class="form-error-msg" id="city_error"></div>
                             </div>
                             <div class="col-lg-3">
                                <input type="text" name="state" id="state" class="form-control" placeholder="STATE" value="<?php echo $data['state'];?>">
                                <div class="form-error-msg" id="state_error"></div> 
                            </div>

                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label">Address</label>
                            <div class="col-lg-7">
                                <textarea class="form-control" id="address" name="address"   maxlength="150" style="max-height: 130px;" ><?php echo $data['address'];?></textarea>
                                <div class="form-error-msg" id="adress_error"></div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label form-control-label"></label>
                            <div class="col-lg-7">
                                <input type="reset" class="btn btn-secondary" value="Cancel" />
                                <input type="submit" name="submit" id="submit" class="btn btn-primary" value="UPDATE" />
                            </div>
                        </div>

                    </div>
                </form>

            </div>

            <hr />


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

    function validate(){
        $('.form-error-msg').html('');
        var validation_error = 0;
        var emailID         = $("#email").val();
        var atpos = emailID.indexOf("@");
        var dotpos = emailID.lastIndexOf(".");
        var fullname = $("#full_name").val();
        var collegeid = $("#college_id").val();
        var Mobileno = $("#Contact").val();

        var gender = $("#gender").val();
        var city = $("#city").val();
        var state = $("#state").val();
        var percentage_ten = $("#10th").val();
        var percentage_twelw = $("#12th").val();
        var Address = $("#address").val();

        var fathername = $("#father_name").val();
        var father_mobile_no = $("#father_no").val();
        var mother_name = $("#mother_name").val();
        var collegename =$("#College_name").val();
        var admission_year = $("#admission_year").val();
        var deploma_per = $("#diploma").val();

        var passing_year = $("#passing_year").val();


        if (father_mobile_no=='') 
        {
            validation_error++; 
            $('#father_mobile_error').html('<i class="fa fa-warning"></i> This field is required!');
        }
        if (mother_name=='') 
        {
            validation_error++; 
            $('#mother_error').html('<i class="fa fa-warning"></i> This field is required!');
        }
        if (collegename=='') 
        {
            validation_error++; 
            $('#collegename_error').html('<i class="fa fa-warning"></i> This field is required!');
        }
        if (admission_year=='') 
        {
            validation_error++; 
            $('#admission_year_error').html('<i class="fa fa-warning"></i> This field is required!');
        }

        if (deploma_per=='') 
        {
            validation_error++; 
            $('#diploma_error').html('<i class="fa fa-warning"></i> This field is required!');
        }


        if (passing_year=='') 
        {
            validation_error++; 
            $('#passing_year_error').html('<i class="fa fa-warning"></i> This field is required!');
        }
        if(fullname == ''){
            validation_error++; 
            $('#fullname_error').html('<i class="fa fa-warning"></i> This field is required!');
        }
        if(fathername == ''){
            validation_error++; 
            $('#father_error').html('<i class="fa fa-warning"></i> This field is required!');
        }
        if(city == ''){
            validation_error++; 
            $('#city_error').html('<i class="fa fa-warning"></i> This field is required!');
        }
        if(state == ''){
            validation_error++; 
            $('#state_error').html('<i class="fa fa-warning"></i> This field is required!');
        }
        if(percentage_ten == ''){
            validation_error++; 
            $('#10th_error').html('<i class="fa fa-warning"></i> This field is required!');
        }
        if(percentage_twelw == ''){
            validation_error++; 
            $('#12th_error').html('<i class="fa fa-warning"></i> This field is required!');
        }
        if(Address == ''){
            validation_error++; 
            $('#adress_error').html('<i class="fa fa-warning"></i> This field is required!');
        }

        if(collegeid == ''){
            validation_error++; 
            $('#collegeid_error').html('<i class="fa fa-warning"></i> This field is required!');
        }
        if(Mobileno == ''){
            validation_error++; 
            $('#Contact_error').html('<i class="fa fa-warning"></i> This field is required!');
        }


        if($('input[name="gender"]:checked').length == 0){
            validation_error++; 
            $('#gender_error').html('<i class="fa fa-warning"></i> This field is required!');
        }

        if (atpos < 1 || ( dotpos - atpos < 2 )) {
            validation_error++; 
            $('#emailID_error').html('');
        }
        if(emailID == ''){
            validation_error++; 
            $('#emailID_error').html('<i class="fa fa-warning"></i> This field is required!');
        }

        if(validation_error==0){



            return true;
        }else{

            $("#alert-campus-msg").removeClass('hide');
            $("#alert_msg").html('All the mandatory fields in the form has not been filled as required. Please check once and then submit!');
            return false;
        }

    }



</script>
<?php
$respone_data = $_GET['response'];
if($respone_data == "Success")
{
    ?>
    <script type="text/javascript">
        $("#alert-campus-msg").removeClass('hide');
        $("#check_campus").html('<i class="fa fa-check"></i>');
        $("#alert_msg").html('Profile Successfully Edit ! ');


    </script>
    <?php
}else if ($respone_data == "2003") {
    ?>
    <script type="text/javascript">
        $("#merchant-alert-message").removeClass('hide');
        $("#alert_msg").html('An error occured: 200 Only png | jpg | jpeg Images Allowed Retry Again.');
    </script>
    <?php
}else if ($respone_data =="400") {
    ?>
    <script type="text/javascript">
        $("#merchant-alert-message").removeClass('hide');
        $("#alert_msg").html('Profile did not edited  Successfully Retry again.');
    </script>
    <?php
}

?>

</body>

</html>