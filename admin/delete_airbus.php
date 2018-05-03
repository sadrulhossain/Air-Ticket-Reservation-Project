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
	
	$airbus_id = $_GET['idd'];
	if(isset($_GET['idd']))
	{
		$sqlq = mysql_query("DELETE FROM airbus WHERE airbus_id = '{$airbus_id}'");
			if($sqlq)
			{
				header('location:list_airbus.php');
			}
		
	}
	
?>