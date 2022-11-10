<?php
  #Author : Adedokun Julius Ayobami
  #Email : adedokunjuliusayobami@gmail.com
  #Date Created : 09TH August 2022
  #Date Modified : 17TH August 2022

  if ( isset(  $_SESSION['num_course'] ) ) 
  {
    $num_course = $_SESSION['num_course'];  	
  } 
  else 
  {
  	echo "Access Denied";
  }
  
  //Input Course Details Interface
  include_once 'views/input_course_details.php';
  
?>