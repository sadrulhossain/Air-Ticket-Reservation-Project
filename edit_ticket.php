<?php include 'header.php';?>
<?php 
	$book_pas_passport = $_GET['ide'];
	if(isset($_GET['ide']))
		{
			$sql = "SELECT * FROM book_ticket WHERE book_pas_passport='$book_pas_passport'";
				$result = mysql_query($sql);

				if($row = mysql_fetch_array($result)) {
					
			
				$book_flight_no    = $row["book_flight_no"];
				$book_depart_from  = $row["book_depart_from"];
				$book_depart_to    = $row["book_depart_to"];
				$book_flight_date  = $row["book_flight_date"];
				$book_flight_time  = $row["book_flight_time"];
				$book_journey_hour = $row["book_journey_hour"];
				$book_seat_number  = $row["book_seat_number"];				
				$book_fare         = $row["book_fare"];
				$book_pas_name     = $row["book_pas_name"];
				$book_pas_gender   = $row["book_pas_gender"];
				$book_pas_passport = $row["book_pas_passport"];
				$book_pas_city     = $row["book_pas_city"];
				$book_pas_mobile   = $row["book_pas_mobile"];
				$book_email        = $row["book_email"];
				$purchase_bank     = $row["purchase_bank"];
				$purchase_ac       = $row["purchase_ac"];
				$purchase_pass     = $row["purchase_pass"];
				$purchase_money    = $row["purchase_money"];
				}
  
		}
?>

<?php
   	if(isset($_POST['save']))
	{
		$sqlupdate = "UPDATE book_ticket
								SET book_flight_no      = '{$_POST['book_flight_no']}',
								    book_depart_from    = '{$_POST['book_depart_from']}',		
									book_depart_to      = '{$_POST['book_depart_to']}',
									book_flight_date    = '{$_POST['book_flight_date']}',
									book_flight_time    = '{$_POST['book_flight_time']}',
								    book_journey_hour   = '{$_POST['book_journey_hour']}',
									book_seat_number    = '{$_POST['book_seat_number']}',
									book_fare           = '{$_POST['book_fare']}',
									book_pas_name       = '{$_POST['book_pas_name']}',
									book_pas_gender     = '{$_POST['book_pas_gender']}',
									book_pas_passport   = '{$_POST['book_pas_passport']}',
									book_pas_city       = '{$_POST['book_pas_city']}',
									book_pas_mobile     = '{$_POST['book_pas_mobile']}',
									book_email          = '{$_POST['book_email']}',
									purchase_bank       = '{$_POST['purchase_bank']}',
									purchase_ac         = '{$_POST['purchase_ac']}',
									purchase_pass       = '{$_POST['purchase_pass']}',
									purchase_money      = '{$_POST['purchase_money']}'
								WHERE book_pas_passport = '{$book_pas_passport}'";
					$res = mysql_query($sqlupdate);
					if($res)
					{
						header('location: pas_ticket.php');	
					}
	}
?>
<div class="content">
    <div class="container-fluid">
		<div class="col-md-12">					
			<div class="well">
			<h4 style="text-align:center;">Enter Here Your Detail Information</h4>
			</div>
		</div>	
        <div class="row">
			<form action="" method="post">
					
						<div class="col-md-12">					
							<div class="well">
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label>Flight No</label>
											<input type="text" name="book_flight_no" class="form-control" placeholder="" value="<?php echo $book_flight_no; ?>">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label>origination</label>
											<input type="text" name="book_depart_from" class="form-control" placeholder="" value="<?php echo $book_depart_from; ?>">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label>Destination</label>
											<input type="text" name="book_depart_to" class="form-control" placeholder="" value="<?php echo $book_depart_to; ?>">
										</div>
									</div>
								</div>
							</div>
						</div>
							<div class="col-md-12">
								<div class="well">
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label>Date</label>
												<input type="date" name="book_flight_date" class="form-control" placeholder="" value="<?php echo $book_flight_date; ?>">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Time</label>
												<input type="time" name="book_flight_time" class="form-control" placeholder="" value="<?php echo $book_flight_time; ?>">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Journey Hour</label>
												<input type="text" name="book_journey_hour" class="form-control" placeholder="" value="<?php echo $book_journey_hour; ?>">
											</div>
										</div>	
									</div>
								</div>
							</div>
					
				
				<div class="col-md-12">
					<div class="well">
					   <div class="well">
							<div class="row">
								<div class="col-md-4">
									<div class="form-group">
										<label>Seat Number</label>
										<input type="text" name="book_seat_number" class="form-control" placeholder="" value="<?php echo $book_seat_number; ?>">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>Seat Class</label>
										<input class="form-control" name="book_fare" value="<?php echo $book_fare; ?>"/>
											
									</div>
								</div>
							</div>
						</div>
						<hr />
						<div class="well">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Passenger Name</label>
									<input type="text" name="book_pas_name" class="form-control" placeholder="" value="<?php echo $book_pas_name; ?>">
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Gender</label>
									<select name="book_pas_gender" class="form-control" value="<?php echo $book_pas_gender; ?>">
										<option value="0">Male</option>
										<option value="1">Female</option>
									</select>
								</div>
							</div>
						</div>
							<div class="row">	
								<div class="col-md-6">
									<div class="form-group">
										<label>Passport Number</label>
										<input type="text" name="book_pas_passport" class="form-control" placeholder="" value="<?php echo $book_pas_passport; ?>">
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>City</label>
										<input type="text" name="book_pas_city" class="form-control"  placeholder="" value="<?php echo $book_pas_city; ?>">
									</div>
								</div>
							</div>
							<div class="row">	
								<div class="col-md-6">
									<div class="form-group">
										<label>Mobile Number</label>
										<input type="text" name="book_pas_mobile" class="form-control" placeholder="" value="<?php echo $book_pas_mobile; ?>">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Passenger Email</label>
										<input type="text" name="book_email" class="form-control" placeholder="" value="<?php echo $book_email; ?>">
									</div>
								</div>
							</div>
							</div>
							<hr />
							    <div class="well">
									<div class="row">
										<div class="form-group">
											<div class="col-md-4">
												<label>Bank Name</label>
													<input name="purchase_bank" class="form-control" value="<?php echo $purchase_bank; ?>"/>
														<!--<option></option>
															<?php 														
																$Qbank = mysql_query("SELECT * FROM `bank`");
																while($row_bank = mysql_fetch_array($Qbank))
																	{
																 ?> 
																<option value="<?php echo $row_bank['bank_name']; ?>"><?php echo $row_bank['bank_name'] ;?></option>
																  
																<?php 
																 }
																?>
													</select>-->
											</div>	
											<div class="col-md-6">
												<div class="form-group">
													<label>Account No</label>
													<input type="text" name="purchase_ac" class="form-control" placeholder="" value="<?php echo $purchase_ac; ?>">
												</div>
											</div>									
										</div>
									</div>
									<div class="row">	
										<div class="col-md-4">
											<div class="form-group">
												<label>Account Password</label>
												<input type="text" name="purchase_pass" class="form-control" placeholder="" value="<?php echo $purchase_pass; ?>">
											</div>
										</div>
										<div class="col-md-4">
										<div class="form-group">
											<label>Ticket Fee</label>
											<input type="text" name="purchase_money" class="form-control" placeholder="" value="<?php echo $purchase_money; ?>">
										</div>
									</div>
									</div>
								</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">							
									<button name="save" type="submit" class="btn btn-info btn-fill pull-right">Update</button>									
								</div>
							</div>
							<div><?php echo $success;?></div>
						</div>
											
					</div>		
				</div>	
			</form>
		</div>				
	</div>
</div>					
<?php include ('footer.php'); ?>