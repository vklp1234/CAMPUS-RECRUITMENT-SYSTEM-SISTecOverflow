<?php
include '../database/dbconnect.php';
if (isset($_POST['Companyname']) && isset($_POST['Companyweb'])) {
	
	$primary_company_id = $_POST['Company_id'];
	$Companyname = $_POST['Companyname'];
	$Companyweb = $_POST['Companyweb'];
	$Location = $_POST['Location'];
	$visit_inst =$_POST['visit_inst'];
	$visit_date = $_POST['visit_date'];
	$visit_AREA = $_POST['visit_AREA'];
	$batch = $_POST['batch'];
	$profileskillset = $_POST['profileskillset'];
	$package = $_POST['package'];
	$branch = $_POST['branch'];
	$discription = $_POST['discription'];
	$sql = "SELECT * FROM `tbl_company` WHERE company_url='$Companyweb' or company_name='$Companyname'";
	$run = mysqli_query($con,$sql);
	$row = mysqli_num_rows($run);
	if ($row>0) {
			$data['status']='200';
			$data['statusText']=$Companyname.' Already Added Check Record!';	
	}else{
		$sql = "INSERT INTO `tbl_company` (company_id,company_name,company_url,job_location,visit_institute,visit_place,visiting_date,batch,job_profile,package,branch,discription)values('$primary_company_id','$Companyname','$Companyweb','$Location','$visit_inst','$visit_AREA','$visit_date','$batch','$profileskillset','$package','$branch','$discription')";
		echo $sql;
		$run = mysqli_query($con,$sql);
		if ($run == true) {
			$data['status']='Success';

		}else{
			$data['status']='200';
			$data['statusText']="Company Not Added Retry Again !";
		}
	}
	echo json_encode($data);
}






?>