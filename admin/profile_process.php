
<?php
include '../database/dbconnect.php';

/*registration code start here*/
/*echo "<pre>";
var_dump($_POST,$_FILES);
echo "</pre>";*/


if (isset($_POST['email']) && isset($_POST['Contact']) && isset($_POST['userid'])) {
	$role = 'student';
	$Userid = $_POST['userid'];
	$fullname = $_POST['full_name'];
	$fathername = $_POST['father_name'];
	$father_mobile_no = $_POST['father_no'];
	$mother_name = $_POST['mother_name'];
	$collegeid = $_POST['college_id'];
	$collegename = $_POST['College_name'];
	$Mobileno = $_POST['Contact'];
	$email = $_POST['email'];
	$admission_year = $_POST['admission_year'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$department = $_POST['branch'];
	$course = $_POST['course'];
	$gender = $_POST['gender'];
	$university = $_POST['university'];
	$passing_year = $_POST['passing_year'];
	$percentage_ten = $_POST['10th'];
	$percentage_twelw = $_POST['12th'];
	$deploma_per = $_POST['diploma'];
	
	$Address = $_POST['address'];
	
	$image_name = $_FILES['image']['name'];
	$tmp_image_name = $_FILES['image']['tmp_name'];
	$allowed =  array('png' ,'jpg','jpeg');
	
	$ext = pathinfo($image_name, PATHINFO_EXTENSION);
	if(!in_array($ext,$allowed) ) {
	    $data='2003';
	    
	} else{
		move_uploaded_file($tmp_image_name,"../uploads/$image_name");
		
			$sql = "update tbl_student_profile set Full_name='$fullname',father_name='$fathername',father_mobile_no='$father_mobile_no',mother_name='$mother_name',enrollment_no='$collegeid',college='$collegename',student_mobile_no='$Mobileno',admission_year='$admission_year',city='$city',state='$state',branch='$department',course='$course',gender='$gender',university='$university',passing_year='$passing_year',ssc_per='$percentage_ten',hsc_per='$percentage_twelw',diploma_per='$deploma_per',address='$Address',profile_photo='$image_name' where student_id='$Userid' and email='$email'";
			$query = mysqli_query($con,$sql);
			if($query == true)
			{
				$data='Success';
				
			}else{
				$data='400';
				var_dump($con->error);
				
			}
	
		

	}
		
	?>

	<script >
		setTimeout(function(){  window.location = 'student_profile.php?response=<?php echo $data;?>&profile=<?php echo $role;?>'; },1000);
	</script>


	<?php
		
	
	
}
/*registration code ends here*/



?>



