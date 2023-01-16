<?php
  #Author : Adedokun Julius Ayobami
  #Email : adedokunjuliusayobami@gmail.com
  #Date Created : 09TH August 2022
  #Date Modified : 16TH January 2022

  $num_course = $_SESSION['num_course'];
  $name = $_SESSION['name'];
  $grading_sys = $_SESSION['grd_system'];
  $selected_operation = $_SESSION['sel_operation'];
  $ready = false;

  if ( isset( $_POST['compute_btn'])) 
  {
    $ready = true;

    if ( $grading_sys == 5) 
    {
      include_once 'models/FivePointSystem.php';
    }
    else 
    {
      include_once 'models/FourPointSystem.php';
    }
  }
  
  //Compute result Interface
  include_once 'views/compute_result.php';
  
?>