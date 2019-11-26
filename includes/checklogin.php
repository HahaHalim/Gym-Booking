<?php
function check_login()
{
if(strlen($_SESSION['id'])==0)
	{	
		$host = $_SERVER['us-cdbr-iron-east-05.cleardb.net'];
		$uri  = rtrim(dirname($_SERVER['us-cdbr-iron-east-05.cleardb.net']), '/\\');
		$extra="index3.php";		
		$_SESSION["id"]="";
		header("Location: http://$host$uri/$extra");
	}
}
?>
