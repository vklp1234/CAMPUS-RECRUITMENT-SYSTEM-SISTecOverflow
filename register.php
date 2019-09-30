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
	<link href="https://fonts.googleapis.com/css?family=Black+Ops+One|Abel|Electrolize|Open+Sans:700|Rajdhani|Turret+Road&display=swap" rel="stylesheet">
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
						<li><a href="Home.php"><span class="bordercampus">HOME</span></a></li>
						<li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="bordercampus">Blogs </span><span class="caret"></span></a>
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

							<a class="dropdown-toggle" href="#"><span class="bordercampus">About </span></a>
							
						</li>

						<li class="dropdown">
							<a class="dropdown-toggle" href="#"><span class="bordercampus">Contact Us</span></a>
							
						</li>
						
						<li class="dropdown">
							<a href="login_register.php"   class="btn btn-primary dropdown-toggle">Login/Register</a>
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
								<span class="register-campus">Hey, we would like to know about you.TNP And Student register here.</span>

							</h2>

						</div>
						<!-- login form start here -->
						<div>
							<form id="login-form" action="#" method="POST" onsubmit="return false;" >
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
									<div class="col-md-12 text-center-xxs mb-30" align="center">
											
												<button type="submit"  class="button medium gray login-campus-d" disabled="disabled"> Student And TNP REGISTRATION</button>
											
												
											
										
									</div>
									
								</div>
								<div class="row">
									<div class="col-md-12 mb-30">
										<input type="text" value=""  maxlength="100" class="controled" name="user_id" id="user_id" placeholder="USER ID " >
										<div class="form-error-msg" id="user_id_error"></div>
									</div>
								</div> 
								<div class="row">
									<div class="col-md-12 mb-30">
										<input type="text" value=""  maxlength="100" class="controled" name="fullname" id="fullname" placeholder="FULL NAME" >
										<div class="form-error-msg" id="full_name"></div>
									</div>
								</div>  
								 <div class="row">
									<div class="col-md-12 mb-30">
										<input type="email" value=""  maxlength="100" class="controled" name="email" id="emailID" placeholder="EMAIL" >
										<div class="form-error-msg" id="emailID_error"></div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12 mb-30">
										<input type="number" value=""  maxlength="10" class="controled" name="Mobileno" id="Mobileno" placeholder="MOBILE NO (+91) " >
										<div class="form-error-msg" id="Mobile_no"></div>
									</div>
								</div>  
								
								<div class="row">
									<div class="col-md-12 mb-30">
										
										<select class="controled" name="gender" id="gender" class="form-control">
											<option value="" disabled="disabled" selected="selected">Choose Gender</option>
											<option value="m"> MALE </option>
											<option value="f"> FEMALE </option>
											
										</select>
										<div class="form-error-msg" id="gender_choose"></div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12 mb-30">
										
										<select class="controled" name="role" id="role" class="form-control">
											<option value="" disabled="disabled" selected="selected">Choose Role</option>
											<option value="TNPHEAD"> TNP-HEAD </option>
											<option value="TNPCOORDINATOR"> TNP-COORDINATOR </option>
											<option value="student"> STUDENT </option>
											
											
										</select>
										<div class="form-error-msg" id="role_choose"></div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12 mb-30">
										
										<select class="controled" name="Department" id="Department" class="form-control">
											<option value="" disabled="disabled" selected="selected">Department</option>
											<option value="cse"> CSE </option>
											<option value="me"> ME </option>
											<option value="it"> IT </option>
											<option value="ce"> CE </option>
											
										</select>
										<div class="form-error-msg" id="deparment_error"></div>
									</div>
								</div>
								<div class="row">    
									<div class="col-md-12 mb-50">
										<input type="password" value=""  maxlength="100" class="controled" name="password" id="password" placeholder="PASSWORD">
										<div class="form-error-msg" id="password_error"> </div>
									</div>
								</div>
								<div class="row">    
									<div class="col-md-12 mb-50">
										<input type="password" value=""  maxlength="100" class="controled" name="confpassword" id="confpassword" placeholder="CONFIRM PASSWORD">
										<div class="form-error-msg" id="conf_password_error"> </div>
										<div class="form-error-msg" id="password_not_match"></div>
									</div>
								</div>
								

								<div class="row">
									<div class="col-md-12 text-center-xxs">
										<button type="submit" id="submit" class="button medium gray">REGISTER</button>
										
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
			var user_id = $("#user_id").val();
			var emailID         = $("#emailID").val();
			var atpos = emailID.indexOf("@");
			var dotpos = emailID.lastIndexOf(".");
			var fullname = $("#fullname").val();
			
			var Mobileno = $("#Mobileno").val();
			var Department = $("#Department").val();
			var gender = $("#gender").val();
			var role =$("#role").val();
			var password = $("#password").val();
			var confpassword = $("#confpassword").val();

			if(user_id=='')
			{
				validation_error++; 
				$('#user_id_error').html('<i class="fa fa-warning"></i> This field is required!');
			}
			if(fullname == ''){
				validation_error++; 
				$('#full_name').html('<i class="fa fa-warning"></i> This field is required!');
			}
			
			if(Mobileno == ''){
				validation_error++; 
				$('#Mobile_no').html('<i class="fa fa-warning"></i> This field is required!');
			}
			
			if (Department=='') {
				validation_error++; 
				$('#deparment_error').html('<i class="fa fa-warning"></i> This field is required!');
			}
			if(gender == ''){
				validation_error++; 
				$('#gender_choose').html('<i class="fa fa-warning"></i> This field is required!');
			}
			if(role == ''){
				validation_error++; 
				$('#role_choose').html('<i class="fa fa-warning"></i> This field is required!');
			}
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
			if(confpassword == ''){
				validation_error++; 
				$('#conf_password_error').html(' <i class="fa fa-warning"></i> This field is required!');
			}
			if (password!=confpassword){
				validation_error++;
				$("#password_not_match").html('<i class="fa fa-warning"></i> password and Confirm password Not Match!');
			}
			if(validation_error==0){
				$('button').prop('disabled',true);
				$.ajax({
					type: "POST",
					url:'process.php',     
					data: {user_id:user_id,emailID:emailID,fullname:fullname,Department:Department,Mobileno:Mobileno,gender:gender,role:role,password:password},
					dataType: 'JSON',
					success: function (data) {
						$('button').prop('disabled',false); 
						 
						
						
						if(data.status=='Success'){
							$("#merchant-alert-message-success").removeClass('hide');
							$("#alert_msg2").html('Welcome To Hybrid CRS . PLease Do Login !');
							
							setTimeout(function(){  window.location = 'login_register.php'; },2000);
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
				$("#alert_msg").html('All the mandatory fields in the form has not been filled as required. Please check once and then submit!');
			}
		});
	</script>
</body>
</html>
