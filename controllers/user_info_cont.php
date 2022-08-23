<?php
	#Author : Adedokun Julius Ayobami
	#Email : adedokunjuliusayobami@gmail.com
	#Date Created : 30 July 2022
	#Date Modified : 23 August 2022
	
	if ( isset( $_POST['save_user_btn']) ) {

		//Getting User Inputs
		$name = base64_encode( $_POST['name'] );
		$grd_system = base64_encode( $_POST['grd_system'] );

		//direct to
		header("location:operation_details?name=$name&grade_system= $grd_system");
	}

	//User Info interface
	include_once 'views/user_info.php';
?>