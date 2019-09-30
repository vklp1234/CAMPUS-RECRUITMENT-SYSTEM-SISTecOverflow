<?php
include 'database/dbconnect.php';
/*registration code start here*/
if (isset($_POST['Mobileno']) && isset($_POST['emailID'])) {
	$Userid=0;
	$Userid = $_POST['user_id'];
	
	$emailID = $_POST['emailID'];
	$fullname = $_POST['fullname'];
	$Department = $_POST['Department'];
	$Mobileno = $_POST['Mobileno'];
	$gender = $_POST['gender'];
	if($_POST['role']=='TNPHEAD')
	{
		$status_con = 'Deactivate';
	}
	else if ($_POST['role']=='TNPCOORDINATOR') {
		$status_con = 'activate';
	}elseif ($_POST['role']=='student') {
		$status_con='activate';
	}
	$role = $_POST['role'];
	$password = md5($_POST['password']);
	$sql1 = "SELECT * from tbl_user where email='$emailID' or mobile='$Mobileno'";
	$run = mysqli_query($con,$sql1);
	$row = mysqli_num_rows($run);
	if ($row>0) {
		$data['status']=' 200 ';
		$data['statusText']='This User Email '.$emailID.' Already Exits';
	}else{
		$sql = " INSERT INTO `tbl_user` (user_id,full_name,email,mobile,detartment,gender,role,password,status) values('$Userid','$fullname','$emailID','$Mobileno','$Department','$gender','$role','$password','$status_con')";
		/*echo $sql;*/
		$query = mysqli_query($con,$sql);
		if($query == true)
		{
			if($role=='student')
			{
							$sql = "INSERT INTO tbl_student_profile(enrollment_no,email,student_mobile_no) values('$Userid','$emailID','$Mobileno')";
							$run = mysqli_query($con,$sql);
			}


			$data['status']='Success';
		}else{
			$data['status']='200';
			$data['statusText']='Data not Successfully Recoreded! ';
			
		}
	}

	echo json_encode($data);
}
/*registration code ends here*/



?>