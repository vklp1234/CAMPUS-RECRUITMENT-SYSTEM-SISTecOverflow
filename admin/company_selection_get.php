<?php 
include '../database/dbconnect.php';
if (isset($_POST['company_selection_id'])) {
	$compid = $_POST['company_selection_id'];
	$sql = "SELECT ts.enrollment_no, full_name, branch, passing_year, present_status from tbl_student_profile ts, tbl_elegible_student te where ts.enrollment_no = te.enrollment_no and company_id = '$compid' and present_status='P' ";
	$run = mysqli_query($con,$sql);
	$row = mysqli_num_rows($run);
	if($row>0){
		$i=0;
		while($fetch = mysqli_fetch_assoc($run))
		{
			$data['enrollment_no'][$i] = $fetch['enrollment_no'];
			$data['full_name'][$i] = $fetch['full_name'];
			$data['branch'][$i] = $fetch['branch'];
			$data['passing_year'][$i] = $fetch['passing_year'];
			$data['present_status'][$i] = $fetch['present_status'];
			$i++;
		}
		$data['size'] = $i;
	}
	else{
		$data['status']='No data Found yet';
	}
	/*var_dump($data);*/
	echo json_encode($data);
}


?>