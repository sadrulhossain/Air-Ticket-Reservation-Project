<?php include('header.php');  ?>
<br />
<div class="content">
    <div class="container-fluid">
        <div class="row">
		<div class="col-md-2"></div>
			<form action="" method="post">
				<div class="col-md-8">
					<div class="card">							
						<div class="content">
							<div class="row">
								<div class="col-md-5">
									<div class="form-group">
										<label>Flight Number</label>
										<select name="flight_no" class="form-control">
										<option value="0">--Select Flight--</option>
												<?php 														
													  $Query = mysql_query("SELECT * FROM `flight_schedule`");
														  while($row_airbus = mysql_fetch_array($Query))
																 {
														 ?>
																 
														 <option value="<?php echo $row_airbus['flight_no']; ?>"><?php echo $row_airbus['flight_no'] ;?></option>
															  
													 <?php 
															 }
													 ?>
											
										</select>
									</div>
								</div>
							
								<div class="col-md-3">
									<div class="form-group">		
										<label>Seat</label>
										<input type="text" name="seat_number" class="form-control" placeholder="">	
									</div>
								</div>
							</div>	
							<div class="row">	
								<div class="col-md-8">
									<div class="form-group">
										<label>Depart From</label>
										<select name="depart_from" class="form-control">
										<option value="0">--Select City--</option>
												<?php 														
													$Qdestin = mysql_query("SELECT * FROM `airport`");
														while($row_destin = mysql_fetch_array($Qdestin))
														 {
												?>
																 
													<option value="<?php echo $row_destin['city']; ?>"><?php echo $row_destin['city'] ;?></option>
															  
													<?php 
														 }
														 ?>
											
										</select>
									</div>
								</div>										
							</div>
							<div class="row">	
								<div class="col-md-8">
									<div class="form-group">
										<label>Depart To</label>
										<select name="depart_to" class="form-control">
										<option>--Select City--</option>
											<?php 														
												$Qorigin = mysql_query("SELECT * FROM `airport`");
														while($row_origin = mysql_fetch_array($Qorigin))
														 {
												 ?>
																 
															<option value="<?php echo $row_origin['city']; ?>"><?php echo $row_origin['city'] ;?></option>
															  
													 <?php 
															}
													?>
											</select>
									</div>
								</div>										
							</div>
							<div class="row">	
								<div class="col-md-8">
									<div class="form-group">
										<label>Flight Date</label>
										<input type="date" name="flight_date" class="form-control" placeholder="">
									</div>
								</div>										
							</div>
							<div class="row">	
								<div class="col-md-8">
									<div class="form-group">
										<label>Flight Time</label>
										<input type="time" name="flight_time" class="form-control" placeholder="">
									</div>
								</div>										
							</div>
							<div class="row">
								<div class="col-md-8">
									<div class="form-group">
										<label>Journey Hour</label>
										<input type="text" name="journey_hour" class="form-control" placeholder="">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-8">
									<div class="form-group">
										<label>Seat Class</label>
										<select name="fare" class="form-control">
											<option>Economy</option>
											<option>Business</option>
										</select>
									</div>
								</div>
							</div>
							<div class="row">
								
								<div class="col-md-4">
									<div class="form-group">
										<button class="btn btn-info btn-fill pull-right"><a href="">Back</a></button>
									</div>
								</div>	
								<div class="col-md-4">
									<div class="form-group">
										<button name="save" type="submit" class="btn btn-info btn-fill pull-right"><a href="pas_info.php">Next</a></button>
									</div>
								</div>										
							</div>
							<br />
						</div>										
					</div>							
				</div>	
			</form>
		</div>	
	</div>		
</div>

<?php include('footer.php'); ?>