<?php

include 'database/dbconnect.php';

/*login code write start here */
if (isset($_POST['emailID'])) {
	$emailID = $_POST['emailID'];
	$password = md5($_POST['password']);	
	$sql = "SELECT role FROM tbl_user where  email='$emailID' AND password='$password' AND  status='activate' ";
	$run = mysqli_query($con,$sql);
	$row = mysqli_num_rows($run);
	
	if ($row>0) {
		$fetch = mysqli_fetch_assoc($run);
		session_start();
		$_SESSION['EmailID']=$emailID;
		$_SESSION['role']=$fetch['role'];
		$data['status']='Success';
		$data['role']=$fetch['role'];
		
	}else{
		$data['status']='200';
		$data['statusText']=' Username And Password Not Match And Account Activation Required !';
		
	}
	echo json_encode($data); 
}

/*login code write end here */



?>