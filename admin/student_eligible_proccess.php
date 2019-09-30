<?php 
include '../database/dbconnect.php';
if (isset($_POST['branch']) && isset($_POST['ssc']) && isset($_POST['hsc'])  ) {
	$branch = $_POST['branch'];
	$ssc = $_POST['ssc'];
	$hsc = $_POST['hsc'];
	$batch = $_POST['batch'];
	
	/*select distinct tbl_student_profile.full_name ,tbl_student_profile.father_mobile_no,tbl_student_profile.father_name,tbl_student_profile.student_mobile_no,tbl_student_profile.gender,tbl_student_profile.college,tbl_student_profile.email,tbl_student_profile.city,tbl_student_profile.course,tbl_student_profile.state,tbl_student_profile.enrollment_no, tbl_student_profile.branch ,tbl_student_profile.ssc_per,tbl_student_profile.hsc_per ,AVG(tbl_academic.cgpa) cgpa from tbl_student_profile inner join tbl_academic  on tbl_student_profile.enrollment_no = tbl_academic.enrollment_no      where tbl_student_profile.branch ='$branch' and tbl_student_profile.ssc_per >='$ssc' and tbl_student_profile.hsc_per >='$hsc' and (select AVG(cgpa) cgpa from tbl_academic where enrollment_no=tbl_student_profile.enrollment_no and backlog='0')>='$cgpa'*/
	$sql = " SELECT full_name,father_mobile_no,father_name,student_mobile_no,gender,college,email,city,course,state,enrollment_no,ssc_per,hsc_per FROM tbl_student_profile where branch='$branch' and ssc_per>='$ssc' and  hsc_per>='$hsc' and passing_year='$batch' ";
	/*echo $sql;*/
	$run = mysqli_query($con,$sql);
	$row = mysqli_num_rows($run);
	if ($row>0) {
		$i=0;
			while ($fetch = mysqli_fetch_assoc($run)) {
				$data['enrollment_no'][$i]=$fetch['enrollment_no'];
				$data['full_name'][$i]=$fetch['full_name'];
				$data['father_mobile_no'][$i]=$fetch['father_mobile_no'];
				$data['father_name'][$i]=$fetch['father_name'];
				$data['student_mobile_no'][$i]=$fetch['student_mobile_no'];
				$data['gender'][$i]=$fetch['gender'];
				$data['college'][$i]=$fetch['college'];
				$data['email'][$i]=$fetch['email'];
				$data['city'][$i]=$fetch['city'];
				$data['course'][$i]=$fetch['course'];
				$data['state'][$i]=$fetch['state'];
				$data['ssc_per'][$i]=$fetch['ssc_per'];
				$data['hsc_per'][$i]=$fetch['hsc_per'];
			/*	$data['cgpa'][$i]=$fetch['cgpa'];*/
				$i++;
			}
			$data['size']=$i;
	}else{
		$data['alertMsg']='No Students Eligible At';
	}
	echo json_encode($data);
	}



?>