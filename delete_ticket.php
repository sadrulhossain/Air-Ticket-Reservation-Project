<?php 
	include_once('DB.php');
	
	$book_pas_passport = $_GET['idd'];
	if(isset($_GET['idd']))
	{
		$sqlcallairbus = mysql_query("SELECT * FROM book_ticket INNER JOIN flight_schedule ON book_ticket.book_flight_no = 	flight_schedule.flight_no WHERE book_ticket.book_pas_passport = '{$book_pas_passport}'");
		if($row_del = mysql_fetch_object($sqlcallairbus)){
		$seat_number = $row_del->book_seat_number;
		$airbus_noo = $row_del->airbus_noo;
		
		$sqlupdate = mysql_query("UPDATE `seat_tbl` SET `seat_status` = '0'										
						WHERE `airbus_no` = '$airbus_noo' AND `seat_no` = '$seat_number'");
		$sqlq = mysql_query("DELETE FROM book_ticket WHERE book_pas_passport = '{$book_pas_passport}'");
		}
			if($sqlupdate && $sqlq)
			{
				header('location: pas_login.php');
			}
		
	}
	
?>
			