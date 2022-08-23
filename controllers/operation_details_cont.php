<?php
	#Author : Adedokun Julius Ayobami
	#Email : adedokunjuliusayobami@gmail.com
	#Date Created : 1ST August 2022
	#Date Modified : 08TH August 2022
	
	if ( isset( $_REQUEST['name'] ) && $_REQUEST['grade_system'] ) 
	{
		$name = base64_decode( $_REQUEST['name'] );
		$grd_system = base64_decode( $_REQUEST['grade_system'] );

		if ( isset( $_POST['operation_btn'] ) ) 
		{ 
		   $_SESSION['name'] = $name;
		   $_SESSION['grd_system'] = $grd_system;
		   $_SESSION['sel_operation'] = $_POST['operation'];
		   $_SESSION['num_course'] = $_POST['num_courses'];
		   //direct to
		   header( "location:input_course_details" );
		}
	} 
	else 
	{
		echo "Access Denied";
	}
	
	//Operation Details interface
	include_once 'views/operation_details.php';
?>