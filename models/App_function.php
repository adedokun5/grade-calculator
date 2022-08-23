<?php

	function totalScore( $test_score, $exam_score )
	{
		return $test_score + $exam_score ;
	}

	function result( $total_point, $total_cre_unit )
	{
		$result = $total_point/$total_cre_unit;

		if ( strlen( $result ) == 1 ) 
		{
			return "$result.00";
		} 
		elseif( strlen( $result ) == 3 ) 
		{	
			return $result."0";
		}
		elseif ( strlen( $result ) == 4 ) 
		{
			return $result;
		}
		else
		{
			$fifth_value = substr( $result, 4, 1 );
			$final_result = substr( $result, 0, 4 );
			
			if ( $fifth_value >= 5) 
			{
				return $final_result + 0.01;
			} 
			else 
			{
				return $final_result;
			}
			
		}
	}

?>