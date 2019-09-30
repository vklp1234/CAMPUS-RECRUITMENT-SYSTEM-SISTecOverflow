<?php
include '../database/dbconnect.php';
if (isset($_POST['id']) && isset($_POST['status'])) {
	$Userid = $_POST['id'];
	$status = $_POST['status'];
	$sql = "UPDATE tbl_user set status='$status' WHERE user_id='$Userid'";
	$run = mysqli_query($con,$sql);
	if ($run == true) {
		$data['status']=$status;
		$data['userid']=$Userid;
	}
	echo json_encode($data);
}


?>