<?php
include '../database/dbconnect.php';
if(isset($_POST['comp_id']))
{
	$comp_id = $_POST['comp_id'];
	$sql = "SELECT ts.enrollment_no, full_name, ts.branch, ts.passing_year ,sc.selection_date ,cp.company_name from tbl_student_profile ts, tbl_company cp,tbl_selection sc  where  ts.enrollment_no=sc.enrollment_no and cp.company_id='$comp_id' and sc.selection_status='YES'";
	$run = mysqli_query($con,$sql);
	$row = mysqli_num_rows($run);
	if($row>0){
		$i=0;
		while ($fetch = mysqli_fetch_assoc($run)) {
			$data['enrollment_no'][$i] = $fetch['enrollment_no'];
			$data['full_name'][$i] = $fetch['full_name'];
			$data['branch'][$i] = $fetch['branch'];
			$data['passing_year'][$i] = $fetch['passing_year'];
			$data['selection_date'][$i] = $fetch['selection_date'];
			$data['company_name'][$i]=$fetch['company_name'];
			$i++;
		}
		$data['size']=$i;
	}
	else{
		$data['error']='400';
	}
	echo json_encode($data);
}


?>