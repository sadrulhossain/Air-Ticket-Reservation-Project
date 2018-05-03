<?php include ('header.php');?>
			<div class="home-content">
				<form id="check_schedule" action="home.php" name="check_schedule" method="POST">
					<div class="row">
						<div class="col-md-4">
							<div class="well">
								
									<div class="well"><h5><strong>Here, You Can Check Flight Schedule</strong></h5></div>
									
								<div class="well">
									<div class="row">
										<div class="col-md-3" style="padding-left:20px;">Origination:</div>
										<div class="col-md-8">
											<select name="origin" class="form-control" required/>
												<option> </option>
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
									<br />
									<div class="row">
										<div class="col-md-3" style="padding-left:20px;">Destination:</div>
										<div class="col-md-8">
											<select name="destin" class="form-control" required/>
												<option> </option>
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
									<br />
									<div class="row">
										<div class="col-md-3" style="padding-left:20px;">Date:</div>
										<div class="col-md-8">
											<input type="date" name="date" class="form-control" required//>
										</div>
									
									</div>
									
							</div>
									<div class="row">
										<div class="col-md-4"></div>
										<div class="col-md-5">
											<input type="submit" name="search" class="btn btn-success" value="Check Schedule" />
										</div>
									</div>
									<br />
								</div>
							
						</div>
						<div class="col-md-8">
							<div class="well">
							<table class="table table-bordered table-responsive">
								<tr class="danger">
								    <th>select</th>
									<th>Flight No.</th>
									<th>Origination</th>
									<th>Destination</th>
									<th>Date</th>
									<th>Time</th>
									<th>Economy Class Fare</th>
									<th>Business Class Fare</th>
									<th>Journey Hour</th>
								</tr>
								
								
								<?php if(isset($_POST['search'])){
									$origin = $_POST['origin'];
									$destin = $_POST['destin'];
									$date = $_POST['date'];
									$check = mysql_query("SELECT * FROM flight_schedule 
									WHERE depart_from LIKE '%$origin%' AND depart_to LIKE '%$destin%' AND flight_date = '$date'");
									while($row = mysql_fetch_object($check)){
										?>
										<tr> 
											<?php echo "<td><a href='book_ticket.php?ids=$row->flight_schedule_id'>Select</a></td>"; ?>
											<td><?php echo $row->flight_no;?></td>
											<td><?php echo $row->depart_from;?></td>
											<td><?php echo $row->depart_to;?></td>
											<td><?php echo $row->flight_date;?></td>
											<td><?php echo $row->flight_time;?></td>
											<td><?php echo $row->fare_economy;?></td>
											<td><?php echo $row->fare_first;?></td>
											<td><?php echo $row->journey_hour;?></td>
										</tr>
										<?php 
									}
								}
								?>
								
													
								
							</table>
							<br />
						</div>
						</div>
					</div>
				</form>
				
			</div>
<?php include 'footer.php';?>
			
