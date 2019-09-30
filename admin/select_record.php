<?php
include '../database/dbconnect.php';
if(isset($_POST['company_selection_id']) && isset($_POST['enroll_id']) && isset($_POST['status_select']))
{
	$comp_id = $_POST['company_selection_id'];
	$enroll_id = $_POST['enroll_id'];
	$status = $_POST['status_select'];
	$sql = "SELECT selection_status FROM tbl_selection WHERE company_id='$comp_id' AND enrollment_no='$enroll_id'";
	$run = mysqli_query($con,$sql);
	$row = mysqli_num_rows($run);
	if($row<1)
	{
		$sql = "INSERT INTO tbl_selection (company_id,enrollment_no,selection_date,selection_status) values('$comp_id','$enroll_id',now(),'$status')";
		$run = mysqli_query($con,$sql);
		if ($run == true) {
			$data['status'] ='success';
		}
		else{
			$data['status']='400';

		}
	}else{
		$sel_status = mysqli_fetch_assoc($run);

		if ($sel_status['selection_status'] == 'NO') {
			$sql = "UPDATE tbl_selection SET selection_status='YES' WHERE company_id='$comp_id' AND enrollment_no='$enroll_id'";
			$run = mysqli_query($con,$sql);
			if ($run == true) {
				$data['status']='statussuccess';
			}else{
				$data['status']='800';
			}
		}else{
			$data['status']='200';	
		}
		
	}
	echo json_encode($data);
}


?>