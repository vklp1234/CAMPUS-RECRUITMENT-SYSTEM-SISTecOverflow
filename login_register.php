<?php
session_start();
if (isset($_SESSION['EmailID']) && isset($_SESSION['role']) ) {
	$role = $_SESSION['role'];
	if (strtoupper($role)=='TNPHEAD' or strtoupper($role)=='TNPCOORDINATOR') {
		header("Location: admin/Dashboard.php?profile=$role");
	}else if (strtoupper($role)=='STUDENT') {
		header("Location: admin/Student_information.php?profile=$role");
	}
	
}



?>


<!DOCTYPE html>
<html>
<head>
	<title>CRS | Login/Register</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/Header-Nightsky.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link rel="shortcut icon" href="assets/img/logo.png">
	<link href="https://fonts.googleapis.com/css?family=Black+Ops+One|Electrolize|Open+Sans:700|Rajdhani|Turret+Road&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
	<div class="header-nightsky pd-40">
		<nav class="navbar navbar-default">
			<div class="container">
				<a class="navbar-brand" href="#"><img src="assets/img/finallogo.png" class="img-responsive logo-campus"></a>
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">

					<ul class="nav navbar-nav navbar-right">
						<li><a href="home.php"><span class="bordercampus">HOME</span></a></li>
						<li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="bordercampus">Blogs</span> <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Query</a></li>
                                
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="bordercampus">SISTec</span> <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#"></a></li>
                                <li><a href="#">Galary</a></li>
                            </ul>
                        </li>
                        
						<li class="dropdown">
							<a class="dropdown-toggle" href="#"><span class="bordercampus">About </span></span></a>
							
						</li>
						<li class="dropdown">
							<a class="dropdown-toggle" href="#"><span class="bordercampus">Contact Us</span></a>
							
						</li>
						
						<li class="dropdown">
							<a href="login_register.php"  data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Login/Register</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		
		<div class="container-fluid">
			<div class="row  pb-41">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<div class="contact-form-cont">
						<div class="mb-40 ">
							<h2 class="section-title">
								<span class="bold">LOGIN</span>

							</h2>

						</div>
						<!-- login form start here -->
						<div>
							<form id="login-form" action="#" method="POST" onsubmit="return false;" >
								<div class="merchant-alert merchant-alert-error hide" id="merchant-alert-message">
									<div class="alert-icon"><i class="fa fa-warning"></i></div>
									<div class="alert-text" id="alert_msg"></div>
								</div> 
								<div class="merchant-alert merchant-alert-error hide" id="merchant-alert-message-success">
									<div class="alert-icon"><i class="fa fa-check"></i></div>
									<div class="alert-text" id="alert_msg2">
									</div>
								</div> 
								<div class="row">
									<div class="col-md-12 mb-30">
										<input type="email" value=""  maxlength="100" class="controled" name="email" id="emailID" placeholder="EMAIL" >
										<div class="form-error-msg" id="emailID_error"></div>
									</div>
								</div>
								<div class="row">    
									<div class="col-md-12 mb-50">
										<input type="password" value=""  maxlength="100" class="controled" name="password" id="password" placeholder="PASSWORD">
										<div class="form-error-msg" id="password_error"> </div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-12 text-center-xxs">
										<button type="submit" id="submit" class="button medium gray ">LOGIN</button>
										<button class="button medium gray-light " onClick="window.location='register.php';">REGISTER</button>
									</div>
									<div class="col-md-12 text-center-xxs">
										<a href="#" class="link-green">Forgot Password?</a>
									</div>
								</div>
							</div>

						</form>
					</div>
					<!-- form ends here -->

				</div>

			</div>
		</div>

	</div>
	
</div>
<!-- footer section start -->
<footer>
	<div class="row footer-campus">
		<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="single-fta">
				<img src="assets/img/footer1.png" class="img-campus">
				<ul class="fta-list">
					<li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span>SISTec in Media</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span>ERP Login</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span>SISTec Blog</a></li>
				</ul>
				
			</div>
			
		</div>
		<div class="col-md-6 col-sm-6 col-xs-12">
			<div class="single-fta">
				<h3 class="fta-title-campus1 text-campus">Social Links</h3>
				<ul class="inlie-campus">
					<li  ><a  href="https://www.facebook.com/sagargroupofinstitutionssistec/" ><i class="fa fa-facebook-square" style="font-size:19px; color: #286090;"></i> <span style="color: #e5e5e5;"> Facebook</span></a></li>
					<li><a  href="https://www.instagram.com/sagarcollegebhopal/" ><i class="fa fa-instagram"  style="font-size:19px; color: #d10088;"></i><span style="color: #e5e5e5;"> Instagram</span></a></li>
					<li><a  href="https://twitter.com/SagarCollege" ><i class="fa fa-twitter"  style="font-size:19px; color: #55acee;"></i> <span style="color: #e5e5e5;"> Twitter</span></a></li>
					<li><a  href="https://www.linkedin.com/in/sistec-sagar-group-of-institutions-77653a7b/" ><i class="fa fa-linkedin"  style="font-size:19px; color: #0077b5;"></i>  <span style="color: #e5e5e5;"> LinkedIn</span> </a></li>
					<li><a href="https://www.youtube.com/channel/UCytOCmxQb7IFU2BVFdI7T7w" ><i class="fa fa-youtube"  style="font-size:19px; color: #cd201f;"></i>  <span style="color: #e5e5e5;"> YouTube</span></a></li>

				</ul>
				
			</div>
		</div>
		<div class="col-md-3 col-sm-6 col-xs-12">
			<div class="single-fta">
				<h3 class="fta-title-campus"> Contact Us</h3>
				<ul class="fta-list">
					<li><a href="#"><span class="glyphicon  glyphicon-home"></span> Address : Opposite International Airport, SISTec</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-phone"></span> Phone(+91) 831987096</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-envelope"></span> Email: info@sistec.ac.in</a></li>
				</ul>
				
			</div>
		</div>
	</div>

</footer>

<div class="row copy-campus">
	<div class="col-md-12 col-sm-12 col-xs-12">
		<div class="text-center">
			<p class="copyright-campus">Copyright © 2019. All Right Reseved . Powered By SISTec . Design By Vishwas Lodhi.</p>
			
		</div>
	</div>
	
</div>
<!-- ends here footer -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript">
	$(document).on('click','#submit',function(){
		$('.form-error-msg').html('');
		var validation_error = 0;
		var emailID         = $("#emailID").val();
		var atpos = emailID.indexOf("@");
		var dotpos = emailID.lastIndexOf(".");
		var password        = $("#password").val();

		if (atpos < 1 || ( dotpos - atpos < 2 )) {
			validation_error++; 
			$('#emailID_error').html('');
		}
		if(emailID == ''){
			validation_error++; 
			$('#emailID_error').html('<i class="fa fa-warning"></i> This field is required!');
		}
		if(password == ''){
			validation_error++; 
			$('#password_error').html('<i class="fa fa-warning"></i> This field is required!');
		}
		if(validation_error==0){
			$('button').prop('disabled',true);
			$.ajax({
				type: "POST",
				url:'loginprocess.php',     
				data: {emailID: emailID,password:password},
				dataType: 'JSON',
				success: function (data) {

					console.log(data.statusText,data.status);
					$('button').prop('disabled',false);  
					if(data.status=='Success'){
						if (data.role=='student') {
							$("#merchant-alert-message-success").removeClass('hide');
							$("#alert_msg2").html('WELCOME TO SISTEC STUDENT PROFILE CAMPUS RECRUITMENT SYSTEM !');
							setTimeout(function(){  window.location = 'admin/Student_information.php?profile='+data.role+''; },1000);
						}
						else{
							$("#merchant-alert-message-success").removeClass('hide');
							$("#alert_msg2").html('WELCOME TO SISTEC TNP PROFILE CAMPUS RECRUITMENT SYSTEM !');
							setTimeout(function(){  window.location = 'admin/Dashboard.php?profile='+data.role+''; },1000);
						}
						
						
						
					}else{
						$("#merchant-alert-message").removeClass('hide');
						$("#alert_msg").html('An error occured: '+data.status+' '+  data.statusText);
					}
				},
				error: function (xhr) {
					
						//console.log(xhr);
						$("#merchant-alert-message").removeClass('hide');
						$("#alert_msg").html('An error occured:'+xhr.status+' '+  xhr.statusText);
						$('button').prop('disabled',false); 
					}
				});
			return false;
		}else{
			$("#merchant-alert-message").removeClass('hide');
			$("#alert_msg").html('All the mandatory fields in the form has not been filled as required. Please check once and then submit!');
		}
	});
</script>
</body>
</html>
