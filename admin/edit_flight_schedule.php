<?php

    ob_start();
	session_start();
	if($_SESSION['name']!='uzzal')
	{
		header('location: admin_login.php');
	}

?>
<?php include('header.php'); ?>
<?php include('DB.php'); ?>
<?php
	
	$flight_schedule_id = $_GET['ide'];
	if(isset($_GET['ide']))
		{
			$sql = mysql_query("SELECT * FROM flight_schedule WHERE flight_schedule_id = '{$flight_schedule_id}'");
			$row = mysql_fetch_object($sql);
		}
	if(isset($_POST['save']))
		{	
			$sqlupdate = "UPDATE flight_schedule
									SET flight_no    = '{$_POST['flight_no']}',
										airbus_noo   = '{$_POST['airbus_noo']}',
										depart_from  = '{$_POST['depart_from']}',
										depart_to    = '{$_POST['depart_to']}',
										flight_date  = '{$_POST['flight_date']}',
										flight_time  = '{$_POST['flight_time']}',
										fare_first   = '{$_POST['fare_first']}',
										fare_economy = '{$_POST['fare_economy']}',
										journey_hour = '{$_POST['journey_hour']}'										
									WHERE flight_schedule_id = '{$flight_schedule_id}'";
						$res = mysql_query($sqlupdate);
						if($res)
						{
							header('location:list_flight_schedule.php');	
							//$success =  "successfully Update!";
						}	
			
		}
?>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
					<form action="" method="post" enctype="multipart/form-data">
						<div class="col-md-7">
							<div class="card">
								<div class="header">
									<h4 class="title">Edit Airbus Master</h4>
								</div>
								<div class="content">
							<div class="row">
											<div class="col-md-5">
												<div class="form-group">
													<label>Enter Flight Number</label>
													<input type="text" name="flight_no" class="form-control" placeholder="" value="<?php echo $row->flight_no; ?>">
												</div>
											</div>	
											<div class="col-md-5">
												<div class="form-group">
													<label>Enter Airbus Number</label>
													<select name="airbus_noo" class="form-control" value="<?php echo $row->airbus_noo;?>" requierd/>
														<option> </option>	
														<?php 														
															    $Qairbus = mysql_query("SELECT * FROM `airbus`");
															     while($row_airbus = mysql_fetch_array($Qairbus))
																 {
															 ?>
																 
															   <option value="<?php echo $row_airbus['airbus_no']; ?>"><?php echo $row_airbus['airbus_no'] ;?></option>
															  
															  <?php 
															 }
															 ?>			
													</select>
												</div>
											</div>	
										</div>
										<div class="row">
											<div class="col-md-5">
												<div class="form-group">
													<label>From Airport</label>
													<input type="text" name="depart_from" class="form-control" placeholder="" value="<?php echo $row->depart_from; ?>">
												</div>
											</div>
											<div class="col-md-5">
												<div class="form-group">
													<label>To Airport</label>
													<input type="text" name="depart_to" class="form-control" placeholder="" value="<?php echo $row->depart_to; ?>">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-5">
												<div class="form-group">
													<label>Depart Date</label>
													<input type="date" name="flight_date" class="form-control" placeholder="" value="<?php echo $row->flight_date; ?>">
												</div>
											</div>	
											<div class="col-md-5">
												<div class="form-group">
													<label>Depart Time</label>
													<input type="time" name="flight_time" class="form-control" placeholder="" value="<?php echo $row->flight_time; ?>">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-5">
												<div class="form-group">
													<label>Fare of Economy</label>
													<input type="text" name="fare_economy" class="form-control" placeholder="" value="<?php echo $row->fare_economy; ?>">
												</div>
											</div>	
											<div class="col-md-5">											
												<div class="form-group">
													<label>Fare of First/Business</label>
													<input type="text" name="fare_first" class="form-control" placeholder="" value="<?php echo $row->fare_first; ?>">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-5">
												<div class="form-group">
													<label>Journey Hour</label>
													<input type="text" name="journey_hour" class="form-control" placeholder="" value="<?php echo $row->journey_hour; ?>"> 
												</div>
											</div>											
										</div>
								</div>
							</div>
						</div>
				</div>
						<div class="col-md-7">
							<button name="save" type="submit" class="btn btn-info btn-fill pull-right">Update</button>
							<div class="clearfix"></div>
							<div><?php echo $success; ?></div>
						</div>
					</form>						
            </div>
        </div>

<?php include('footer.php'); ?>