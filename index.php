<?php
	#Author of Script : Adedokun Julius Ayobami
	#Email : adedokunjuliusayobami@gmail.com
	#Date Created : 27TH JULY 2022
	#Date Modified : 06TH APRIL 2023

	ob_start();

	if ( session_status() == 1 ) 
	{
		session_start();
	}

	$server_name = "https://".$_SERVER['SERVER_NAME'];
	//parent folders before the index file
	$uri = $_SERVER['REQUEST_URI'];
	$main_url = $server_name."grade_calc";
	$app_url = $server_name."$uri";

	$uri_arr = explode( '/', $uri );
	$page_start = count( $uri_arr ) - 1;
	$page = $uri_arr[ $page_start ];

	$page_arr = explode( '?', $page );
	$page = $page_arr[ 0 ];

	include_once 'views/header.php';

	if ( !$page ) 
	{
		$page = 'home';
	}

	$page_x = "/controllers/".$page."_cont.php";
	$cur_dir = dirname( __FILE__ );

	$file = $cur_dir."$page_x";

	if ( is_file( $file ) ) 
	{
		include_once "$file";
	} 
	else 
	{
		header("location:$main_url", true, 301 );
	}
	
	include_once 'views/footer.php';

	ob_end_flush();

?>

<style type="text/css">
header{
	font-family: monospace;
}

#home_section{
	font-family: sans-serif;
}

@media screen and ( max-width: 767px ){
	#home_section{
		margin-top: 30%;
		margin-bottom: 32%;
	}
}

@media screen and ( min-width: 501px ){
	#home_section{
		margin-top: 20%;
		margin-bottom: 20%;
	}
}

@media screen and ( min-width: 768px ){
	#home_section{
		margin-top: 15%;
	}
}

@media screen and ( min-width: 1200px ){
	#home_section{
		margin-top: 10%;
	}
}
a{
	text-decoration: none;
}

#toTopBtn{
	position: fixed;
	left: 85%;
	bottom: 15%;
	/*display: none;*/
}

#num_course_div{
	display: none;
}

@media screen and ( max-width:520px ){
 .table{
   min-width: 500px;
 }
}

.result-div
{
	min-width: 500px;
}

.result-small{
	width: 500px;
	text-align: center;
}

.result
{
	min-width: 130px;
	text-align: center;
}

footer{
    font-family: sans-serif;
}
</style>