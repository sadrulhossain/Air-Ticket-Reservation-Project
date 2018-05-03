<?php include 'header.php';?>
<?php 
	//$flight = $book_seat_id = "";
	$flight_schedule_id = $_GET['ids'];
	if(isset($_GET['ids']))
		{
			$sqlSelect = mysql_query("SELECT * FROM flight_schedule WHERE flight_schedule_id = '{$flight_schedule_id}'");
			$row = mysql_fetch_object($sqlSelect);
				$flight_schedule_id = $row->flight_schedule_id;
				$airbus_noo         = $row->airbus_noo;
			    $flight_no          = $row->flight_no;
			    $depart_from        = $row->depart_from;
			    $depart_to          = $row->depart_to;
			    $flight_date        = $row->flight_date;
			    $flight_time        = $row->flight_time;
			    $journey_hour       = $row->journey_hour;
									
		}
?>
<!--
<br />
<div class="content">
    <div class="container-fluid">
        <div class="row">
			<div class="col-md-12">
				<div class="well">
					<table class="table table-hover table-striped">
						<thead>											
							<th>Flight No</th>
							<th>origination</th>
							<th>Destination</th>
							<th>Date</th>
							<th>Time</th>
							<th>Journey Hour</th>
						</thead>
										
						<tbody>
							<td> <?php /* echo $flight_no; */?></td>								   
						</tbody>
					</table>						
				</div>		
			</div>	
		</div>				
	</div>
</div>
-->
<?php
   	if(isset($_POST['save']))
		{	
				$money = 0;
				$sqlmoney = mysql_query("SELECT * FROM flight_schedule WHERE flight_no = '{$_POST['book_flight_no']}'");
				$row_money = mysql_fetch_object($sqlmoney);
				
				if($_POST['book_fare'] == "Economy"){
					$money = $row_money->fare_economy;
					
				}
				if($_POST['book_fare'] == "Business"){
					$money = $row_money->fare_first;
				}
				
				$sqlinsert = mysql_query("INSERT INTO book_ticket(book_flight_no,book_depart_from,book_depart_to,book_flight_date,book_flight_time,book_journey_hour,book_seat_number, book_fare,book_pas_name,book_pas_gender,
																book_pas_passport,book_pas_city,book_pas_mobile,book_email,
																purchase_bank,purchase_ac,purchase_pass,purchase_money)
										   VALUES('{$_POST['book_flight_no']}',
												  '{$_POST['book_depart_from']}',
												  '{$_POST['book_depart_to']}',
												  '{$_POST['book_flight_date']}',
												  '{$_POST['book_flight_time']}',
												  '{$_POST['book_journey_hour']}',
												  '{$_POST['book_seat_number']}',																						  
												  '{$_POST['book_fare']}',
												  '{$_POST['book_pas_name']}',
												  '{$_POST['book_pas_gender']}',
												  '{$_POST['book_pas_passport']}',
												  '{$_POST['book_pas_city']}',
												  '{$_POST['book_pas_mobile']}',
												  '{$_POST['book_email']}',
												  '{$_POST['purchase_bank']}',
												  '{$_POST['purchase_ac']}',
												  '{$_POST['purchase_pass']}',
												  '{$money}')");
					if($sqlinsert)
						{
							header("location:ticket_Detail.php?idd={$_POST['book_pas_passport']}");
						}
					$sqlupdate = "UPDATE `seat_tbl`
										SET `seat_status` = '1'										
										WHERE `airbus_no` = '$airbus_noo' AND `seat_no` = '{$_POST['book_seat_number']}'";
							$res = mysql_query($sqlupdate);
							if($res){
								echo "seat booked.";
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
			<form action="" method="post" ">
					
						<div class="col-md-12">					
							<div class="well">
								<div class="row">
									<div class="col-md-4">
										<div class="form-group">
											<label>Flight No</label>
											<input type="text" name="book_flight_no" class="form-control" placeholder="" value="<?php echo $flight_no; ?>">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label>origination</label>
											<input type="text" name="book_depart_from" class="form-control" placeholder="" value="<?php echo $depart_from; ?>">
										</div>
									</div>
									<div class="col-md-4">
										<div class="form-group">
											<label>Destination</label>
											<input type="text" name="book_depart_to" class="form-control" placeholder="" value="<?php echo $depart_to; ?>">
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
												<input type="date" name="book_flight_date" class="form-control" placeholder="" value="<?php echo $flight_date; ?>">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Time</label>
												<input type="time" name="book_flight_time" class="form-control" placeholder="" value="<?php echo $flight_time; ?>">
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Journey Hour</label>
												<input type="text" name="book_journey_hour" class="form-control" placeholder="" value="<?php echo $journey_hour; ?>">
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
										<select name="book_seat_number" class="form-control" required/>
														<option> </option>
															<?php 														
															    $Qseat = mysql_query("SELECT * FROM seat_tbl INNER JOIN flight_schedule ON seat_tbl.airbus_no = flight_schedule.airbus_noo WHERE flight_schedule.flight_no = '$flight_no' AND seat_tbl.seat_status = '0'");
															     while($row_seat = mysql_fetch_array($Qseat))
																 {
																	//$book_seat_id = $row_seat->seat_id;
															 ?>
																 
															   <option value="<?php echo $row_seat['seat_no']; ?>"><?php echo $row_seat['seat_no'] ;?></option>
															  
															  <?php 
															 }
															 ?>
													</select>
									</div>
								</div>
								
								<div class="col-md-8">
									<div class="form-group">
										<label>Seat Class</label>
										<div class="row">
											<div class="col-md-6">
												<select class="form-control" name="book_fare" required/>
													<option> </option>
													<option>Economy</option>
													<option>Business</option>
												</select>
											</div>
											
										</div>
										
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
									<input type="text" name="book_pas_name" class="form-control" placeholder="Enter Your Name"required/>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Gender</label>
									<select name="book_pas_gender" class="form-control">
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
										<input type="text" name="book_pas_passport" class="form-control" placeholder=""required/>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<label>City</label>
										<select name="book_pas_city" class="form-control" placeholder="Select City" required/>
												<option> </option>
															<?php 														
															    $Qcity = mysql_query("SELECT * FROM `airport`");
															     while($row_city = mysql_fetch_array($Qcity))
																 {
															 ?>
																 
															   <option value="<?php echo $row_city['city']; ?>"><?php echo $row_city['city'] ;?></option>
															  
															  <?php 
															 }
															 ?>
											</select>
									</div>
								</div>
							</div>
							<div class="row">	
								<div class="col-md-6">
									<div class="form-group">
										<label>Mobile Number</label>
										<input type="text" name="book_pas_mobile" class="form-control" placeholder=""required/>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Passenger Email</label>
										<input type="text" name="book_email" class="form-control" placeholder=""required/>
									</div>
								</div>
							</div>
							</div>
							<hr />
							    <div class="well">
									<div class="row">
										<div class="col-md-4">
											<div class="form-group">
												<label>Bank Name</label>
													<select name="purchase_bank" class="form-control" required/>
														<option> </option>
															<?php 														
																$Qbank = mysql_query("SELECT * FROM `bank`");
																while($row_bank = mysql_fetch_array($Qbank))
																	{
																 ?> 
																<option value="<?php echo $row_bank['bank_name']; ?>"><?php echo $row_bank['bank_name'] ;?></option>
																  
																<?php 
																 }
																?>
													</select>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group">
												<label>Account No</label>
												<input type="text" name="purchase_ac" class="form-control" placeholder=""required/>
											</div>
										</div>									
										
										<div class="col-md-3">
											<div class="form-group">
												<label>Account PIN</label>
												<input type="password" name="purchase_pass" class="form-control" placeholder=""required/>
											</div>
										</div>
									</div>
									
								</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">							
									<button name="save" type="submit" class="btn btn-info btn-fill pull-right">Confirm</button>									
								</div>
							</div>
							<div><?php echo $success;?></div>
						</div>
					<br />						
					</div>		
				</div>	
			</form>
		</div>				
	</div>
</div>					
<?php include 'footer.php';?>