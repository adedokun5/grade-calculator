<?php
	#Author : Adedokun Julius Ayobami
	#Email : adedokunjuliusayobami@gmail.com
	#Date Created : 30 July 2022
	#Date Modified : 09 April 2023
	
	if ( isset( $_POST['user_btn'] ) ) 
	{
		//Getting User Inputs
		$_SESSION['name'] = $_POST['name'];
	   	$_SESSION['grd_system'] =$_POST['grd_system'];
	   	$_SESSION['sel_operation'] = $_POST['operation'];
	   	$_SESSION['num_course'] = $_POST['num_course'];
	   	//redirect to
	   	header( "location:compute_result" );
	} 

	//User Info interface
	include_once 'views/user_info.php';
?>