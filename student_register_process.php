
<?php
include 'database/dbconnect.php';

/*registration code start here*/

if (isset($_POST['collegeid']) && isset($_POST['email']) && isset($_POST['Mobileno']) ) {
	$Userid = uniqid();
	$fullname = $_POST['fullname'];
	$fathername = $_POST['fathername'];
	$father_mobile_no = $_POST['father_mobile_no'];
	$mother_name = $_POST['mother_name'];
	$collegeid = $_POST['collegeid'];
	$collegename = $_POST['collegename'];
	$Mobileno = $_POST['Mobileno'];
	$email = $_POST['email'];
	$admission_year = $_POST['admission_year'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$department = $_POST['department'];
	$course = $_POST['course'];
	$gender = $_POST['gender'];
	$university = $_POST['university'];
	$passing_year = $_POST['passing_year'];
	$percentage_ten = $_POST['percentage_ten'];
	$percentage_twelw = $_POST['percentage_twelw'];
	$deploma_per = $_POST['deploma_per'];
	$role = $_POST['role'];
	$Address = $_POST['Address'];
	$password = md5($_POST['password']);
	$confpassword = $_POST['confpassword'];
	$image_name = $_FILES['profile_pic']['name'];
	$tmp_image_name = $_FILES['profile_pic']['tmp_name'];
	$allowed =  array('png' ,'jpg','jpeg');
	
	$ext = pathinfo($image_name, PATHINFO_EXTENSION);
	if(!in_array($ext,$allowed) ) {
	    $data='2003';
	    
	} else{
		move_uploaded_file($tmp_image_name,"uploads/$image_name");
		$sql1 = "SELECT * from tbl_student_profile where email='$email' or enrollment_no='$collegeid' ";

		$run = mysqli_query($con,$sql1);
		$row = mysqli_num_rows($run);
		if ($row>0) {
			$data='200';
			
		}else{
			$sql = "INSERT INTO `tbl_student_profile` (student_id,enrollment_no,Full_name,father_name,mother_name,father_mobile_no,student_mobile_no,admission_year,course,gender,passing_year,branch,college,university,email,city,state,address,ssc_per,hsc_per,diploma_per,profile_photo,role,password) values('$Userid','$collegeid','$fullname','$fathername','$mother_name','$father_mobile_no','$Mobileno','$admission_year','$course','$gender','$passing_year','$department','$collegename','$university','$email','$city','$state','$Address','$percentage_ten','$percentage_twelw','$deploma_per','$image_name','$role','$password')";
			$query = mysqli_query($con,$sql);
			if($query == true)
			{
				$data='Success';
				
			}else{
				$data='400';
				
			}
		}
		

	}
		
	
		?>

		<script type="text/javascript">
			 window.location = 'student_register.php?response=<?php echo $data;?>'; 
		</script>

		<?php
	
	
}
/*registration code ends here*/



?>



