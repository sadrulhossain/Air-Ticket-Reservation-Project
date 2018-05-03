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
	
	$flight_schedule_id = $_GET['idd'];
	if(isset($_GET['idd']))
	{
		$sqlq = mysql_query("DELETE FROM flight_schedule WHERE flight_schedule_id = '{$flight_schedule_id}'");
			if($sqlq)
			{
				header('location:list_flight_schedule.php');
			}
		
	}
	
?>