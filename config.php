<?php
	
	ini_set("display_errors",1);
	error_reporting(E_ERROR | E_WARNING | E_PARSE);

	session_start();
	date_default_timezone_set('Asia/Calcutta');
	
	
	$connection=mysql_connect('localhost','root','');
	mysql_select_db('iti',$connection);
	$database='iti';
	
	$page = explode('/',$_SERVER['REQUEST_URI']);
	$page = "/".array_pop($page);
	//$page = (strlen($page) > 0)?"/".$page
	if(isset($_SESSION['logged']))
	{
		if($_SESSION['logged'])
		{
			$inactive = 120; // time in sec.
			if( !isset($_SESSION['timeout']) )
			$_SESSION['timeout'] = time() + $inactive; 
			
			$session_life = time() - $_SESSION['timeout'];
			
			if($session_life > $inactive)
			{  session_destroy();
			 	header("Location:logout.php");    
		    }
			
			$_SESSION['timeout']=time();
		}
	}
	
?>