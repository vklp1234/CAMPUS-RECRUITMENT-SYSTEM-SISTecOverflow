<?php
include '../database/dbconnect.php';
if(isset($_POST['enrollment']) && isset($_POST['semester']) && isset($_POST['cgpa']))
{
	$enrollment = $_POST['enrollment'];
	$semester = $_POST['semester'];
	$cgpa = $_POST['cgpa'];
	$backlok = $_POST['backlok'];
	$sql = "insert into tbl_academic(enrollment_no,semester,cgpa,backlog) values('$enrollment','$semester','$cgpa','$backlok')";
	$run = mysqli_query($con,$sql);
	if($run == true)
	{
		$data['status']='success';
		$data['msg'] = 'Semester Record Updated !';
	}
	else{
		$data['status']='200';
		$data['msg']='Something Went Worng !';

	}
	echo json_encode($data);

}




?>