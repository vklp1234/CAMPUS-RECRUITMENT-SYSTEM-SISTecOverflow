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
                                <h1 class="heading-text">Companies <small style="color: red;">List</small></h1>
                            	<div class="row">
                                    <div class="col-md-12 upcoming-campus heading-text-1" >
                                        <div class="row notification-panel">
                                            <div class="col-md-12">
                                                
                                                    <h3 class="text-bold">Title: <small class="text-normal"> sTCS</small></h3>
                                                    
                                                <hr/>
                                                

                                            
                                        </div>
                                            <div class="col-md-7">

                                                <div class="col-md-3">
                                                    <label class="text-bold">Location:</label>
                                                </div>
                                                <div class="col-md-5">
                                                    <p>Banglore</p>
                                                </div>
                                                
                                            </div>
                                            <div class="col-md-5">
                                                <div class="col-md-3">
                                                    <label class="text-bold">Package:</label>
                                                </div>
                                                <div class="col-md-2">
                                                    <p>3Lpa</p>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="col-md-3">
                                                    <label class="text-bold">Skill :</label>
                                                </div>
                                                <div class="col-md-5">
                                                    <p>C,C++</p>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="col-md-8">
                                                    <label class="text-bold">Discription: </label>
                                                    
                                                </div>
                                                <div class="col-md-8 discription-panel">
                                                    <p>hsdkjfhskjdbfkj jsdkbfhsdbhfbvshkdbfhsj fhskj</p>
                                                    
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <hr class="mb-0" />
                                                <div class="col-md-8">
                                                    
                                                </div>
                                                <div class="col-md-2  mb-0 pd-left-10 pull-right" >
                                                    
                                                         
                                                    <button name="intrest" id="intrest" class="btn btn-warning btn-s"m><i class="fa fa-eye"></i> just looking</button> 
                                                    
                                                
                                            </div>
                                           
                                                 <div class="col-md-2 mb-0 pd-left-10 pull-right">
                                                 
                                                   <button name="intrest" id="intrest" class="btn btn-primary btn-s"m><i class="fa fa-check"></i> INTRESTED</button>
                                            
                                            </div>
                                           
                                            </div>
                                            
                                            
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                <div class="row panel-pd">
                                    <div class="col-md-12 upcoming-campus heading-text-1" >
                                        <div class="row notification-panel">
                                            <div class="col-md-12">
                                                
                                                    <h3 class="text-bold">Title: <small class="text-normal"> sTCS</small></h3>
                                                    
                                                <hr/>
                                                

                                            
                                        </div>
                                            <div class="col-md-7">

                                                <div class="col-md-3">
                                                    <label class="text-bold">Location:</label>
                                                </div>
                                                <div class="col-md-5">
                                                    <p>Banglore</p>
                                                </div>
                                                
                                            </div>
                                             <div class="col-md-5">
                                                <div class="col-md-3">
                                                    <label class="text-bold">Package:</label>
                                                </div>
                                                <div class="col-md-2">
                                                    <p>3Lpa</p>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="col-md-3">
                                                    <label class="text-bold">Skill :</label>
                                                </div>
                                                <div class="col-md-5">
                                                    <p>C,C++</p>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="col-md-8">
                                                    <label class="text-bold">Discription: </label>
                                                    
                                                </div>
                                                <div class="col-md-8 discription-panel">
                                                    <p>hsdkjfhskjdbfkj jsdkbfhsdbhfbvshkdbfhsj fhskj</p>
                                                    
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <hr class="mb-0" />
                                                <div class="col-md-8">
                                                    
                                                </div>
                                                <div class="col-md-2  mb-0 pd-left-10 pull-right" >
                                                    
                                                         
                                                    <button name="intrest" id="intrest" class="btn btn-warning btn-s"m><i class="fa fa-eye"></i> just looking</button> 
                                                    
                                                
                                            </div>
                                           
                                                 <div class="col-md-2 mb-0 pd-left-10 pull-right">
                                                 
                                                   <button name="intrest" id="intrest" class="btn btn-primary btn-s"m><i class="fa fa-check"></i> INTRESTED</button>
                                            
                                            </div>
                                           
                                            </div>
                                            
                                            
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                                <div class="row panel-pd">
                                    <div class="col-md-12 upcoming-campus heading-text-1" >
                                        <div class="row notification-panel">
                                            <div class="col-md-12">
                                                
                                                    <h3 class="text-bold">Title: <small class="text-normal"> sTCS</small></h3>
                                                    
                                                <hr/>
                                                

                                            
                                        </div>
                                            <div class="col-md-7">

                                                <div class="col-md-3">
                                                    <label class="text-bold">Location:</label>
                                                </div>
                                                <div class="col-md-5">
                                                    <p>Banglore</p>
                                                </div>
                                                
                                            </div>
                                             <div class="col-md-5">
                                                <div class="col-md-3">
                                                    <label class="text-bold">Package:</label>
                                                </div>
                                                <div class="col-md-2">
                                                    <p>3Lpa</p>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="col-md-3">
                                                    <label class="text-bold">Skill :</label>
                                                </div>
                                                <div class="col-md-5">
                                                    <p>C,C++</p>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="col-md-8">
                                                    <label class="text-bold">Discription: </label>
                                                    
                                                </div>
                                                <div class="col-md-8 discription-panel">
                                                    <p>hsdkjfhskjdbfkj jsdkbfhsdbhfbvshkdbfhsj fhskj</p>
                                                    
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <hr class="mb-0" />
                                                <div class="col-md-8">
                                                    
                                                </div>
                                                <div class="col-md-2  mb-0 pd-left-10 pull-right" >
                                                    
                                                         
                                                    <button name="intrest" id="intrest" class="btn btn-warning btn-s"m><i class="fa fa-eye"></i> just looking</button> 
                                                    
                                                
                                            </div>
                                           
                                                 <div class="col-md-2 mb-0 pd-left-10 pull-right">
                                                 
                                                   <button name="intrest" id="intrest" class="btn btn-primary btn-s"m><i class="fa fa-check"></i> INTRESTED</button>
                                            
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
    	

    	$(document).on('click','#submit',function(){
			$('.form-error-msg').html('');
			var validation_error = 0;
			var Companyname = $("#Companyname").val();
			var Companyweb = $("#Companyweb").val();
			var Location = $("#Location").val();
			var visit_inst =$("#visit_inst").val();
			var visit_date = $("#visit_date").val();
			var visit_AREA = $("#visit_AREA").val();
			var batch =$("#batch").val();
			var profileskillset = $("#profileskillset").val();
			var package = $("#package").val();
			var branch = $("#branch").val();

			if(Companyname == ''){
				validation_error++; 
				$('#Company_name').html('<i class="fa fa-warning"></i> This field is required!');
			}
			if(Companyweb == ''){
				validation_error++; 
				$('#Company_web').html('<i class="fa fa-warning"></i> This field is required!');
			}
			if(Location == ''){
				validation_error++; 
				$('#Com_Location').html('<i class="fa fa-warning"></i> This field is required!');
			}
			if(visit_inst == ''){
				validation_error++; 
				$('#Visiting_institute').html('<i class="fa fa-warning"></i> This field is required!');
			}
			if(visit_date == ''){
				validation_error++; 
				$('#Visiting_date').html('<i class="fa fa-warning"></i> This field is required!');
			}
			if(visit_AREA == ''){
				validation_error++; 
				$('#visiting_AREA').html('<i class="fa fa-warning"></i> This field is required!');
			}
			if(batch == ''){
				validation_error++; 
				$('#BATCH_year').html('<i class="fa fa-warning"></i> This field is required!');
			}
			
			if(profileskillset == ''){
				validation_error++; 
				$('#profile_skill_set').html('<i class="fa fa-warning"></i> This field is required!');
			}
			if(package == ''){
				validation_error++; 
				$('#SALARY_PACKAGE').html('<i class="fa fa-warning"></i> This field is required!');
			}
			if(branch == ''){
				validation_error++; 
				$('#Branch_all').html(' <i class="fa fa-warning"></i> This field is required!');
			}
			
			if(validation_error==0){
				$('button').prop('disabled',true);
				$.ajax({
					type: "POST",
					url:'comp_info_process.php',     
					data: {Companyname:Companyname,Companyweb:Companyweb,Location:Location,visit_inst:visit_inst,visit_date:visit_date,visit_AREA:visit_AREA,batch:batch,profileskillset:profileskillset,package: package,branch:branch},
					dataType: 'JSON',
					success: function (data) {
						$('button').prop('disabled',false); 
						 
						
						
						if(data.status=='Success'){
							$("#merchant-alert-message-success").removeClass('hide');
							$("#alert_msg2").html('COMPANY DETAIL SUCCESSFULLY ADDED! ');
							
							setTimeout(function(){  window.location = 'Dashboard.php'; },2000);
						}else{
							
							$("#merchant-alert-message").removeClass('hide');
							$("#alert_msg").html('An error occured:'+data.status+' '+  data.statusText);
						}
					},
					error: function (xhr) {
						$('button').prop('disabled',false); 
						//console.log(xhr);
						$("#merchant-alert-message").removeClass('hide');
						$("#alert_msg").html('An error occured:'+xhr.status+' '+  xhr.statusText);
						
					}
				});
				return false;
			}else{
				
				$("#merchant-alert-message").removeClass('hide');
				$("#alert_msg").html('All the mandatory fields in the form has not been filled as required. Please All Detail Of Company And then Submit!');
			}
		});
    </script>
    
</body>

</html>