<?php

  if ( isset( $_POST['compute_btn'])) 
  {
   	$name = $_SESSION['name'];
   	$num_course = $_SESSION['num_course'];
   	$grading_sys = $_SESSION['grd_system'];
   	$selected_operation = $_SESSION['sel_operation'];

    if ( $grading_sys == 5) 
    {
      include_once 'models/FivePointSystem.php';
    } 
    else 
    {
      include_once 'models/FourPointSystem.php';
    }
  } 
  else 
  {
   	echo "Access Denied";
  }

  //Computed result interface
  include_once 'views/computed_result.php';

?>