<?php
	//App Functions
	include_once 'App_function.php';

	function courseGrade( $total_score )
	{
		if ( $total_score >= 0 && $total_score <= 39 ) 
		{
			return 'F';
		}
		elseif ( $total_score > 39 && $total_score <= 44 ) 
		{
			return 'E';
		}
		elseif ( $total_score > 44 && $total_score <= 49 ) 
		{
			return 'D';
		}
		elseif ( $total_score > 49 && $total_score <= 59 ) 
		{
			return 'C';
		}
		elseif ( $total_score > 59 && $total_score <= 69 ) 
		{
			return 'B';
		}
		else
		{
			return 'A';
		}
	}

	function pointScore( $credit_unit, $course_grade )
	{
		if ( $course_grade == 'A' ) 
		{
			return 5 * $credit_unit;
		}
		elseif ( $course_grade == 'B' ) 
		{
			return 4 * $credit_unit;
		}
		elseif ( $course_grade == 'C' ) 
		{
			return 3 * $credit_unit;
		}
		elseif ( $course_grade == 'D' ) 
		{
			return 2 * $credit_unit;
		}
		elseif ( $course_grade == 'E' ) 
		{
			return 1 * $credit_unit;
		}
		else
		{
			return 0 * $credit_unit;
		}
	}

?>