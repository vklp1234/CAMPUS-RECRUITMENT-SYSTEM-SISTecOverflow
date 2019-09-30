<?php
session_start();
$role = $_GET['profile'];
if(isset($_SESSION['EmailID']) && isset($_SESSION['role']) && $role == 'TNPHEAD' or $role == 'TNPCOORDINATOR')
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
<title>CSR | Admin /  TNP-CORDINATOR</title>
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
      <a href="list_student.php?profile=<?php echo $role;?>" class="waves-effect"><i class="fa fa-info-circle fa-fw"
        aria-hidden="true"></i>Student Information</a>
      </li>

      <li>
        <a href="#fontawesome.html?" class="waves-effect"><i class="fa fa-newspaper-o fa-fw"
          aria-hidden="true"></i>Blog</a>
        </li>
        <li >
          <a href="../logout.php" class="waves-effect hide1"><i class="fa fa-power-off fa-fw"
            aria-hidden="true"></i>Logout</a>

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
                <li class="active"></li>
              </ol>
            </div>
            <!-- /.col-lg-12 -->
          </div>
          <div class="row" class="tabs">
            <div class="col-md-12">
              <div class="white-box">
                <h3 class="box-title"> <span class="inf-campus"> Company Information </span></h3>
                <hr>
                <div class="row">
                  <div class="col-md-12 tab-minwidth">
                    <div class="tab">
                      <button class="tablinks" onclick="openCity(event, 'company')">Add Company </button>
                      <button class="tablinks" onclick="openCity(event, 'list')">List Of Companies</button>
                      <button class="tablinks" onclick="openCity(event, 'attendance')">Attendance </button>
                      <button class="tablinks" onclick="openCity(event, 'selection')">Selection</button>
                      <button class="tablinks" onclick="openCity(event, 'selected_student')">Selected</button> 

                    </div>
                  </div>
                </div>
                <div class="row tabcontent" id="company">
                  <div class="col-md-11 info-form-panel " >
                    <div class="Info-heading">
                      <h2>
                        <span class="heading-text">ADD DETAIL'S</span>
                      </h2>
                    </div>
                    <div class="form-panel-control">
                      <form id="company-form" action="#" method="POST" onsubmit="return false;">
                        <div class="merchant-alert merchant-alert-error hide" id="merchant-alert-message">
                          <div class="alert-icon"><i class="fa fa-warning"></i></div>
                          <div class="alert-text" id="alert_msg">
                          </div>
                        </div>
                        <div class="merchant-alert merchant-alert-error hide" id="merchant-alert-message-success">
                          <div class="alert-icon"><i class="fa fa-check"></i></div>
                          <div class="alert-text" id="alert_msg2">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12 mb-30">
                            <input type="text" value=""  maxlength="100" class="controled" name="Company_id" id="Company_id" placeholder="COMPANY ID" >
                            <div class="form-error-msg" id="Company_id_error"></div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12 mb-30">
                            <input type="text" value=""  maxlength="100" class="controled" name="Companyname" id="Companyname" placeholder="COMPANY NAME" >
                            <div class="form-error-msg" id="Company_name"></div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12 mb-30">
                            <input type="text" value=""  maxlength="100" class="controled" name="Companyweb" id="Companyweb" placeholder="COMPANY WEB LINK" >
                            <div class="form-error-msg" id="Company_web"></div>
                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-12 mb-30">
                            <input type="text" value=""  maxlength="100" class="controled" name="Location" id="Location" placeholder="&#9990; JOB LOCATION" >
                            <div class="form-error-msg" id="Com_Location"></div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12 mb-30">
                            <input type="text" value=""  maxlength="100" class="controled" name="visit_inst" id="visit_inst" placeholder="VISITING INSTITUTE" >
                            <div class="form-error-msg" id="Visiting_institute"></div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12 mb-30">
                            <input type="date" value=""  maxlength="100" class="controled" name="visit_date" id="visit_date" placeholder="VISITING DATE" >
                            <div class="form-error-msg" id="Visiting_date"></div>
                          </div>
                        </div> 


                        <div class="row">
                          <div class="col-md-12 mb-30">
                            <input type="text" value=""  maxlength="100" class="controled" name="visit_AREA" id="visit_AREA" placeholder="VISITING PlACE AREA" >
                            <div class="form-error-msg" id="visiting_AREA"></div>
                          </div>
                        </div>  
                        <div class="row">
                          <div class="col-md-12 mb-30">
                            <input type="text" value=""  maxlength="100" class="controled" name="batch" id="batch" placeholder="BATCH (YEAR)" >
                            <div class="form-error-msg" id="BATCH_year"></div>
                          </div>
                        </div> 
                        <div class="row">
                          <div class="col-md-12 mb-30">
                            <input type="text" value=""  maxlength="100" class="controled" name="profileskillset" id="profileskillset" placeholder="SKILL SET PROFILE" >
                            <div class="form-error-msg" id="profile_skill_set"></div>
                          </div>
                        </div> 

                        <div class="row">
                          <div class="col-md-12 mb-30">
                            <input type="text" value=""  maxlength="100" class="controled" name="package" id="package" placeholder="&#8377;__LPA " >
                            <div class="form-error-msg" id="SALARY_PACKAGE"></div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12 mb-30">
                            <select class="controled" name="branch" id="branch"> 
                              <option value="" disabled="disabled" selected>- CHOOSE BRANCH -</option>
                              <option value="cse">CSE</option>
                              <option value="me">ME</option>
                              <option value="it">IT</option>
                              <option value="ce">CE</option>
                            </select>
                            <div class="form-error-msg" id="Branch_all"></div>
                          </div>
                        </div> 
                        <div class="row">
                          <div class="col-md-12 mb-30">
                            <!-- <input type="text" value=""  maxlength="100" class="controled" name="profileskillset" id="profileskillset" placeholder="SKILL SET PROFILE" > -->
                            <textarea name="discription" id="discription" maxlength="150" class="controled" placeholder="Discription"></textarea>
                            <div class="form-error-msg" id="discription_error"></div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-12 text-center-xxs">
                            <button type="submit" id="submit" class="button medium gray">ADD</button>

                          </div>

                        </div>
                      </form>
                    </div>

                  </div>
                </div>
                <div class="row tabcontent" id="list">
                  <div class="col-md-11 info-form-panel mt-10">
                    <div class="Info-heading">
                      <h2>
                        <span class="heading-text">REGISTERED COMPANIES</span>
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
                                <tbody>
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
                <div class="row tabcontent" id="attendance">
                  <div class="col-md-11 info-form-panel mt-10">
                    <div class="Info-heading">
                      <h2>
                        <span class="heading-text">Attandansce </span>
                      </h2>

                    </div>
                    <div class="form-panel-control1">
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="white-box">
                            <!-- <h3 class="box-title">Basic Table</h3> -->
                            <div class="col-md-6">
                              <select class="controled" name="company_get_id" id="company_get_id" onchange="get_infomation()">

                                <option value="" disabled="disabled" selected="selected">Select Company</option>
                                <?php 
                                $sql= "SELECT company_id, CONCAT(company_id, ', ', company_name, ', ', visit_place,', ', visiting_date) as company FROM tbl_company";
                                $run = mysqli_query($con,$sql);
                                while($datafetch = mysqli_fetch_assoc($run)){
                                  ?>
                                  <option value="<?php echo $datafetch['company_id'];?>" ><?php echo $datafetch['company'];?></option>    
                                  <?php
                                }
                                ?>

                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="white-box">

                            <div class="table-responsive">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th>S.NO</th>
                                    <th>Enrollment No</th>
                                    <th>Full Name</th>
                                    <th>Branch</th>
                                    <th>Passing Year</th>
                                    <th>Present Status</th>


                                  </tr>
                                </thead>
                                <tbody id="eligible_id_table">
                                  <tr> 
                                    <td colspan="6">No Data Yet!</td>

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
                <div class="row tabcontent" id="selection">
                  <div class="col-md-11 info-form-panel mt-10">
                    <div class="Info-heading">
                      <h2>
                        <span class="heading-text">Select Cleared Student</span>
                      </h2>

                    </div>
                    <div class="form-panel-control1">
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="white-box">
                            <!-- <h3 class="box-title">Basic Table</h3> -->
                            <div class="col-md-6">
                              <select class="controled" name="company_selection_id" id="company_selection_id" onchange="company_selection()">

                                <option value="" disabled="disabled" selected="selected">Select Company</option>
                                <?php 
                                $sql= "SELECT company_id, CONCAT(company_id, ', ', company_name, ', ', visit_place,', ', visiting_date) as company FROM tbl_company";
                                $run = mysqli_query($con,$sql);
                                while($datafetch = mysqli_fetch_assoc($run)){
                                  ?>
                                  <option value="<?php echo $datafetch['company_id'];?>" ><?php echo $datafetch['company'];?></option>    
                                  <?php
                                }
                                ?>

                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-12">
                          <div class="white-box">
                            <!-- <h3 class="box-title">Basic Table</h3> -->
                            <div class="table-responsive">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th>S.NO</th>
                                    <th>Enrollment No</th>
                                    <th>Full Name</th>
                                    <th>Branch</th>
                                    <th>Passing Year</th>
                                    <th>Selected Yes/No</th>


                                  </tr>
                                </thead>
                                <tbody id="selection_student_show">
                                  <tr> 
                                    <td colspan="6">No Data Yet!</td>

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
                <div class="row tabcontent" id="selected_student">
                  <div class="col-md-11 info-form-panel mt-10">
                    <div class="Info-heading">
                      <h2>
                        <span class="heading-text">Select Cleared Student</span>
                      </h2>

                    </div>
                    <div class="form-panel-control1">
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="white-box">
                            <!-- <h3 class="box-title">Basic Table</h3> -->
                            <div class="col-md-6">
                              <select class="controled" name="select_comp" id="select_comp" onchange="get_selected_info()">

                                <option value="" disabled="disabled" selected="selected">Select Company</option>
                                <?php 
                                $sql= "SELECT company_id, CONCAT(company_id, ', ', company_name, ', ', visit_place,', ', visiting_date) as company FROM tbl_company";
                                $run = mysqli_query($con,$sql);
                                while($datafetch = mysqli_fetch_assoc($run)){
                                  ?>
                                  <option value="<?php echo $datafetch['company_id'];?>" ><?php echo $datafetch['company'];?></option>    
                                  <?php
                                }
                                ?>

                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-12">
                          <div class="white-box">
                            <!-- <h3 class="box-title">Basic Table</h3> -->
                            <div class="table-responsive">
                              <table class="table">
                                <thead>
                                  <tr>
                                    <th>S.NO</th>
                                    <th>Enrollment No</th>
                                    <th>Full Name</th>
                                    <th>Branch</th>
                                    <th>Passing Year</th>
                                    <th>Selection Date</th>
                                    <th>Company Name</th>
                                  </tr>
                                </thead>
                                <tbody id="selected_student_show">
                                    

                                  <tr> 
                                    <td colspan="7">No Data Yet!</td>

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
        var discription = $("#discription").val();
        var Company_id = $("#Company_id").val();

        if (Company_id=='') {
          validation_error++; 
          $('#Company_id_error').html('<i class="fa fa-warning"></i> This field is required!');
        }

        if (discription=='') {
          validation_error++; 
          $('#discription_error').html('<i class="fa fa-warning"></i> This field is required!');
        }

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
            data: {Company_id:Company_id,Companyname:Companyname,Companyweb:Companyweb,Location:Location,visit_inst:visit_inst,visit_date:visit_date,visit_AREA:visit_AREA,batch:batch,profileskillset:profileskillset,package: package,branch:branch,discription:discription},
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
function get_infomation()
{
var company_get_id= $("#company_get_id").val();
$.ajax({
url:'eligible_get_info.php',
method:'POST',
dataType:'JSON',
data:{company_get_id:company_get_id},
success:function(data){
console.log(data,'hello');
var html='';
for (var i = 0; i < data.size; i++) {
html += '<tr>'+
'<td>'+(i+1)+'</td>'+
'<td >'+data.enrollment_no[i]+'</td>'+
'<td>'+data.full_name[i]+'</td>'+
'<td>'+data.branch[i]+'</td>'+
'<td>'+data.passing_year[i]+'</td>'
+'<td ><a href="javascript:void(0);" id="teron'+i+'" class="btn btn-default btn-sm change_status_present" data-ter="#teron'+i+'" data-id="#epic'+i+'"  data-userid="'+data.enrollment_no[i]+'" data-present_status="'+data.present_status[i]+'" ><span id="epic'+i+'">'+data.present_status[i]+'</span></a></td>'+
'</tr>';
}
$("#eligible_id_table").html(html);
}
});

$(document).on('click','.change_status_present',function(){
var enrollment_id = $(this).attr("data-userid");
var id = $(this).attr("data-id");

var status_present = $(this).attr("data-present_status");
var ters = $(this).attr("data-ter");
// console.log(ters);

var company_get_id = $("#company_get_id").val();
// console.log(id);
$.ajax({
url:'update_present_status.php',
dataType:'JSON',
method:'POST',
data:{status_present:status_present,company_get_id:company_get_id,enrollment_id:enrollment_id},
success:function(response){
// console.log(response.status);
/*console.log(id);*/
if (response.status=='A') {
$(ters).attr("data-present_status","A");

$(id).html('A');


}else if(response.status=='P')
{
  $(ters).attr("data-present_status","P");
  
$(id).html('P');

}else if(response.status == 'fail'){
$(id).html('Refresh');
}
}
});
});


}
function company_selection()
{
  var company_selection_id= $("#company_selection_id").val();
$.ajax({
url:'company_selection_get.php',
method:'POST',
dataType:'JSON',
data:{company_selection_id:company_selection_id},
success:function(data){
console.log(data);
var html='';
for (var i = 0; i < data.size; i++) {
html += '<tr>'+
'<td>'+(i+1)+'</td>'+
'<td >'+data.enrollment_no[i]+'</td>'+
'<td>'+data.full_name[i]+'</td>'+
'<td>'+data.branch[i]+'</td>'+
'<td>'+data.passing_year[i]+'</td>'+
'<td ><a href="javascript:void(0);" class="btn btn-success btn-sm mr-7 select_yes" data-enroll_id="'+data.enrollment_no[i]+'" data-name = "'+data.full_name[i]+'" data-status_select="YES" >YES</a><a href="javascript:void(0);" class="btn btn-danger btn-sm mr-7 select_no" data-name1 = "'+data.full_name[i]+'" data-enroll_id_2="'+data.enrollment_no[i]+'" data-status_select_2="NO">NO</a></td>'+
'</tr>';
}
$("#selection_student_show").html(html);
}
});
}
$(document).on('click','.select_no',function(){
  var name = $(this).attr("data-name1");
  var r = confirm("Are You sure "+name+" is Not Selected");
  if (r==true) {
    var company_selection_id= $("#company_selection_id").val();
    var enroll_id =  $(this).attr("data-enroll_id_2");
    var status_select = $(this).attr("data-status_select_2");
    $.ajax({
        url:'select_record_no.php',
        method:'POST',
        dataType:'JSON',
        data:{company_selection_id:company_selection_id,enroll_id:enroll_id,status_select:status_select},
        success:function(response){
          console.log(response);
          if (response.status == 'success') {
            alert('Not Selected Confirmed !');
          }
          else if(response.status=='400'){
            alert('Data not recorded Try Again !');
          }
          else if(response.status=='statussuccess'){
              alert('Student '+name+' Selected Status Changed "NO" ! ');

          }else if(response.status=='200')
          {
            alert('The Student '+name+' For This Company Already "Not" Selected !');
          }
        }
    });
  }
});
$(document).on('click','.select_yes',function(){
  var name = $(this).attr("data-name");
  var r = confirm("Are You sure "+name+" is Selected");
  if (r==true) {
    var company_selection_id= $("#company_selection_id").val();
    var enroll_id =  $(this).attr("data-enroll_id");
    var status_select = $(this).attr("data-status_select");
    $.ajax({
        url:'select_record.php',
        method:'POST',
        dataType:'JSON',
        data:{company_selection_id:company_selection_id,enroll_id:enroll_id,status_select:status_select},
        success:function(response){
          console.log(response);
          if (response.status == 'success') {
            alert('selection confirmed !');
          }
          else if(response.status=='400'){
            alert('Data not recorded Try Again !');
          }
          else if(response.status=='statussuccess'){
              alert('Student '+name+' Selected Status Changed "YES" ! ');

          }else if(response.status=='200')
          {
            alert('The Student '+name+' For this company Already Selected !');
          }
        }
    });
  }
});
function get_selected_info()
{
  var comp_id = $("#select_comp").val();
  $.ajax({
    url:'selected_info_student.php',
    method:'POST',
    dataType:'JSON',
    data:{comp_id:comp_id},
    success:function(data){
      console.log(data);
      var html='';
      for (var i = 0; i < data.size; i++) {
      html += '<tr>'+
      '<td>'+(i+1)+'</td>'+
      '<td >'+data.enrollment_no[i]+'</td>'+
      '<td>'+data.full_name[i]+'</td>'+
      '<td>'+data.branch[i]+'</td>'+
      '<td>'+data.passing_year[i]+'</td>'+
      '<td >'+data.selection_date[i]+'</td>'+
      '<td >'+data.company_name[i]+'</td>'+
      '</tr>';
      }
      if (data.error=='400') {
        html='<tr>'+ 
                '<td colspan="7">No Student Selected In This Company!</td>'+
             '</tr>';
      }
    $("#selected_student_show").html(html);
    }
  });
}


</script>
</body>

</html>