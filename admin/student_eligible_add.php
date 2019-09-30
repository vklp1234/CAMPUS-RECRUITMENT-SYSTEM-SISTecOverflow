<?php 
include '../database/dbconnect.php';
if(isset($_POST['company']))
{
	$company = $_POST['company'];
	$checker=0;
	for ($i=0; $i < count($_POST['enrollment_arr']) ; $i++) { 
		$enr_nu = $_POST['enrollment_arr'][$i];
		$sql = "INSERT INTO tbl_elegible_student (enrollment_no,company_id,present_status) values('$enr_nu','$company','P')";
		$run = mysqli_query($con,$sql);
		if ($run == true) {
			$checker++;
		}
	}
	if ($checker>0) {
		$data['status']='Success';
	}
	else{
		$data['status']='400';
	}
	echo json_encode($data);

}


?>