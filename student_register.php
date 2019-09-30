
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
							<a class="dropdown-toggle" href="#"><span class="bordercampus">About </span></span></a>
							
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
								<span class="register-campus">Hey, Student can register here.</span>

							</h2>

						</div>
						<!-- login form start here -->
						<div>
							<form id="login-form" action="student_register_process.php" method="POST" onsubmit="return validate()" enctype="multipart/form-data">

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
											
												<button class="button medium gray login-campus-d" disabled="disabled">STUDENT REGISTRATION</button>
									</div>
									
								</div>
								<div class="row">
									<div class="col-md-12 mb-30">
										<input type="file"  class="controled" name="profile_pic" id="profile_pic" accept="image/jpg/jpeg/png" placeholder="Profile Image" >
										<div class="form-error-msg" id="pic_error"></div>
									</div>
								</div>
								
								<div class="row">
									<div class="col-md-12 mb-30">
										<input type="text" value=""  maxlength="100" class="controled" name="fullname" id="fullname" placeholder="FULL NAME"  >
										<div class="form-error-msg" id="full_name"></div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12 mb-30">
										<input type="text" value=""  maxlength="100" class="controled" name="fathername" id="fathername" placeholder="FATHER NAME"  >
										<div class="form-error-msg" id="father_error"></div>
									</div>
								</div>  
								<div class="row">
									<div class="col-md-12 mb-30">
										<input type="number" value=""  maxlength="10" class="controled" name="father_mobile_no" id="father_mobile_no" placeholder="FATHER MOBILE NO"  >
										<div class="form-error-msg" id="father_mobile_error"></div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12 mb-30">
										<input type="text" value=""  maxlength="100" class="controled" name="mother_name" id="mother_name" placeholder="MOTHER NAME"  >
										<div class="form-error-msg" id="mother_error"></div>
									</div>
								</div>
								
								<div class="row">
									<div class="col-md-12 mb-30">
										<input type="text" value=""  maxlength="100" class="controled" name="collegeid" id="collegeid" placeholder="COLLEGE ID"  >
										<div class="form-error-msg" id="college_id"></div>
									</div>
								</div> 
								<div class="row">
									<div class="col-md-12 mb-30">
										<input type="text" value=""  maxlength="100" class="controled" name="collegename" id="collegename" placeholder="COLLEGE NAME" >
										<div class="form-error-msg" id="collegename_error"></div>
									</div>
								</div>  
								<div class="row">
									<div class="col-md-12 mb-30">
										<input type="number" value=""  maxlength="10" class="controled" name="Mobileno" id="Mobileno" placeholder="MOBILE NO (+91) "  >
										<div class="form-error-msg" id="Mobile_no"></div>
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
										<input type="number" value=""  maxlength="4" class="controled" name="admission_year" id="admission_year" placeholder="ADMISSION YEAR" >
										<div class="form-error-msg" id="admission_year_error"></div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12 mb-30">
										<input type="text" value=""  maxlength="100" class="controled" name="city" id="city" placeholder="CITY" >
										<div class="form-error-msg" id="city_error"></div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12 mb-30">
										<input type="text" value=""  maxlength="100" class="controled" name="state" id="state" placeholder="STATE" >
										<div class="form-error-msg" id="state_error"></div>
									</div>
								</div>
								
								
								<div class="row">
									<div class="col-md-12 mb-30">
										
										<select class="controled" name="department" id="department" class="form-control" >
											<option value="" disabled="disabled" selected="selected">Choose Branch</option>
											<option value="cse"> CSE </option>
											<option value="me"> ME </option>
											<option value="it"> IT </option>
											<option value="CE"> CE </option>
										</select>
										<div class="form-error-msg" id="department_choose"></div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12 mb-30">
										
										<select class="controled" name="course" id="course" class="form-control" >
											<option value="" disabled="disabled" selected="selected">Choose Course</option>
											<option value="BE"> B.E. </option>
											<option value="MBA"> MBA </option>
											<option value="btech"> B.Tech </option>
										</select>
										<div class="form-error-msg" id="course_error"></div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12 mb-30">
										
										<select class="controled" name="gender" id="gender" class="form-control" >
											<option value="" disabled="disabled" selected="selected">Choose Gender</option>
											<option value="m"> MALE </option>
											<option value="f"> FEMALE </option>
											
										</select>
										<div class="form-error-msg" id="gender_choose"></div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12 mb-30">
										
										<select class="controled" name="university" id="university" class="form-control" >
											<option value="" disabled="disabled" selected="selected">Choose Univercity</option>
											<option value="BUIT"> BUIT </option>
											<option value="RGPV"> RGPV </option>
											
										</select>
										<div class="form-error-msg" id="university_error"></div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12 mb-30">
										<input type="number" value=""  maxlength="4" class="controled" name="passing_year" id="passing_year" placeholder="PASSING YEAR"  >
										<div class="form-error-msg" id="passing_year_error"></div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12 mb-30">
										<input type="text" value=""  maxlength="100" class="controled" name="percentage_ten" id="percentage_ten" placeholder="10% PERCENTAGE" >
										<div class="form-error-msg" id="percentage_10_error"></div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12 mb-30">
										<input type="text" value=""  maxlength="100" class="controled" name="percentage_twelw" id="percentage_twelw" placeholder="12% PERCENTAGE" >
										<div class="form-error-msg" id="percentage_12_error"></div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12 mb-30">
										<input type="text" value=""  maxlength="100" class="controled" name="deploma_per" id="deploma_per" placeholder="DEPLOMA PERCENTAGE" >
										<div class="form-error-msg" id="deploma_error"></div>
									</div>
								</div>
								<input type="hidden" name="role" id="role" value="student">
								<div class="row">    
									<div class="col-md-12 mb-50">
										<textarea class="controled" name="Address" id="Address" placeholder="ADDRESS" maxlength="200" style="max-width: 100%; max-height: 145px;" ></textarea>
										
										<div class="form-error-msg" id="adress_error"> </div>
									</div>
								</div>
								
								<div class="row">    
									<div class="col-md-12 mb-50">
										<input type="password" value=""  maxlength="100" class="controled" name="password" id="password" placeholder="PASSWORD" >
										<div class="form-error-msg" id="password_error"> </div>
									</div>
								</div>
								<div class="row">    
									<div class="col-md-12 mb-50">
										<input type="password" value=""  maxlength="100" class="controled" name="confpassword" id="confpassword" placeholder="CONFIRM PASSWORD" >
										<div class="form-error-msg" id="conf_password_error"> </div>
										<div class="form-error-msg" id="password_not_match"></div>
									</div>
								</div>
								
								
								<div class="row">
									<div class="col-md-12 text-center-xxs">
										<!-- <button type="submit" id="submit" class="button medium gray">REGISTER</button> -->
										<input type="submit" name="submit" class="button medium gray" value="REGISTER"> 
										
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
	
		function validate(){
			$('.form-error-msg').html('');
			var validation_error = 0;
			var emailID         = $("#emailID").val();
			var atpos = emailID.indexOf("@");
			var dotpos = emailID.lastIndexOf(".");
			var fullname = $("#fullname").val();
			var collegeid = $("#collegeid").val();
			var Mobileno = $("#Mobileno").val();
			
			var department = $("#department").val();
			var gender = $("#gender").val();
			var role =$("#role").val();
			var password = $("#password").val();
			var confpassword = $("#confpassword").val();
			
			var city = $("#city").val();
			var state = $("#state").val();
			var percentage_ten = $("#percentage_ten").val();
			var percentage_twelw = $("#percentage_twelw").val();
			var Address = $("#Address").val();
			var profile_pic = $("#profile_pic").val();
			var fathername = $("#fathername").val();
			var father_mobile_no = $("#father_mobile_no").val();
			var mother_name = $("#mother_name").val();
			var collegename =$("#collegename").val();
			var admission_year = $("#admission_year").val();
			var deploma_per = $("#deploma_per").val();
			var  university = $("#university").val();
			var course = $("#course").val();
			var passing_year = $("#passing_year").val();
			
			
			if (profile_pic=='') 
			{
				validation_error++; 
				$('#pic_error').html('<i class="fa fa-warning"></i> This field is required!');
			
			}
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
				$('#deploma_error').html('<i class="fa fa-warning"></i> This field is required!');
			}
			if (university=='') 
			{
				validation_error++; 
				$('#university_error').html('<i class="fa fa-warning"></i> This field is required!');
			}
			if (course=='') 
			{
				validation_error++; 
				$('#course_error').html('<i class="fa fa-warning"></i> This field is required!');
			}
			if (passing_year=='') 
			{
				validation_error++; 
				$('#passing_year_error').html('<i class="fa fa-warning"></i> This field is required!');
			}
			if(fullname == ''){
				validation_error++; 
				$('#full_name').html('<i class="fa fa-warning"></i> This field is required!');
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
				$('#percentage_10_error').html('<i class="fa fa-warning"></i> This field is required!');
			}
			if(percentage_twelw == ''){
				validation_error++; 
				$('#percentage_12_error').html('<i class="fa fa-warning"></i> This field is required!');
			}
			if(Address == ''){
				validation_error++; 
				$('#adress_error').html('<i class="fa fa-warning"></i> This field is required!');
			}

			if(collegeid == ''){
				validation_error++; 
				$('#college_id').html('<i class="fa fa-warning"></i> This field is required!');
			}
			if(Mobileno == ''){
				validation_error++; 
				$('#Mobile_no').html('<i class="fa fa-warning"></i> This field is required!');
			}
			
			if(department == ''){
				validation_error++; 
				$('#department_choose').html('<i class="fa fa-warning"></i> This field is required!');
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



				return true;
			}else{
				
				$("#merchant-alert-message").removeClass('hide');
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
							$("#merchant-alert-message-success").removeClass('hide');
							$("#alert_msg2").html('Successfully registered. Now You Can Login!');
							
							setTimeout(function(){  window.location = 'login_register.php'; },2000);
			</script>
			<?php
		}else if ($respone_data == "2003") {
			?>
				<script type="text/javascript">
							$("#merchant-alert-message").removeClass('hide');
							$("#alert_msg").html('An error occured: 200 Only png | jpg | jpeg Images Allowed Retry Again.');
				</script>
			<?php
		}else if ($respone_data == "200") {
			?>
				<script type="text/javascript">
							$("#merchant-alert-message").removeClass('hide');
							$("#alert_msg").html('An error occured: Email Address Already Exits.');
				</script>
			<?php
		}else if ($respone_data =="400") {
			?>
				<script type="text/javascript">
							$("#merchant-alert-message").removeClass('hide');
							$("#alert_msg").html('Data Not Recoreded Successfully Retry again.');
				</script>
			<?php
		}

	?>

	
</body>
</html>

