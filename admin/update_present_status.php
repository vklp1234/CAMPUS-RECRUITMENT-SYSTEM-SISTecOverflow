<?php 
include '../database/dbconnect.php';


if(isset($_POST['status_present']) && isset($_POST['company_get_id']) && isset($_POST['enrollment_id']))
{
	$company_get_id = $_POST['company_get_id'];
	$status_present = $_POST['status_present'];
	$enrollment_id = $_POST['enrollment_id'];
	if($status_present=='P')
	{
		$sql = "UPDATE tbl_elegible_student set present_status='A' where enrollment_no='$enrollment_id' and company_id='$company_get_id' ";
		$run = mysqli_query($con,$sql);

		if($run == true)
		{
			$data['status']='A';

		}else{
			$data['status']='fail';
		}
	}else if($status_present == 'A'){
		$sql = "UPDATE tbl_elegible_student set present_status='P' where enrollment_no='$enrollment_id' and company_id='$company_get_id' ";
		$run = mysqli_query($con,$sql);

		if($run == true)
		{
			$data['status']='P';

		}else{
			$data['status']='fail';
		}
	}
	
	echo json_encode($data);
}


?>