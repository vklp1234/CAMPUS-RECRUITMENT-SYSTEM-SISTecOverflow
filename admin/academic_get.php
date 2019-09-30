<?php
include '../database/dbconnect.php';
if(isset($_POST['enroll_id']))
{
	$en_id = $_POST['enroll_id'];
	$sql = "SELECT semester,cgpa,backlog FROM tbl_academic WHERE enrollment_no='$en_id'";
	$run = mysqli_query($con,$sql);
	$row = mysqli_num_rows($run);
	
	if($row>0){
		$i=0;
			while ($fetch = mysqli_fetch_assoc($run)) {
				$data['semester'][$i] = $fetch['semester'];
				$data['cgpa'][$i]=$fetch['cgpa'];
				$data['backlog'][$i] = $fetch['backlog'];
				$i++;
			}
			$data['size']=$i;
	}else{
		$data['status']='400';
	}	
	echo json_encode($data);

}


?>