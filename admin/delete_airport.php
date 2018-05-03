<?php

    ob_start();
	session_start();
	if($_SESSION['name']!='uzzal')
	{
		header('location: admin_login.php');
	}

?>
<?php 
	include_once('DB.php');
	
	$airport_id = $_GET['idd'];
	if(isset($_GET['idd']))
	{
		$sqlq = mysql_query("DELETE FROM airport WHERE airport_id = '{$airport_id}'");
			if($sqlq)
			{
				header('location:list_airport.php');
			}
		
	}
	
?>