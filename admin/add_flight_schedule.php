<?php

    ob_start();
	session_start();
	if($_SESSION['name']!='uzzal')
	{
		header('location: admin_login.php');
	}

?>
<?php include('header.php'); ?>
<?php 
 include_once("DB.php"); 


?>
<?php 
  	if(isset($_POST['save']))
		{
			$sql = mysql_query("INSERT INTO flight_schedule(flight_no,airbus_noo, depart_from,depart_to,flight_date,
																flight_time, fare_first, fare_economy,journey_hour)
									   VALUES('{$_POST['flight_no']}',			  
											  '{$_POST['airbus_noo']}',
											  '{$_POST['depart_from']}',
											  '{$_POST['depart_to']}',
											  '{$_POST['flight_date']}',
											  '{$_POST['flight_time']}',
											  '{$_POST['fare_first']}',
											  '{$_POST['fare_economy']}',
											  '{$_POST['journey_hour']}')");
				if($sql)
					{
						$success =  "successfully insert!";
					}
		}

?>


    <link href="assets/css/jasny-bootstrap.min.css" rel="stylesheet" />
    
        <div class="content">
            <div class="container-fluid">
                <div class="row">
					<form action="" method="post" enctype="multipart/form-data">
						<div class="col-md-8">
							<div class="card">
								<div class="header">
									<h4 class="title">Flight Schedule Master</h4>
								</div>
								<div class="content">
										<div class="row">
											<div class="col-md-5">
												<div class="form-group">
													<label>Enter Flight Number</label>
													<input type="text" name="flight_no" class="form-control" placeholder="" required/>
												</div>
											</div>	
											<div class="col-md-5">
												<div class="form-group">
													<label>Enter Airbus Number</label>													
														<select name="airbus_noo" class="form-control" required/>
														    <option></option>
															<?php 														
															    $Query = mysql_query("SELECT * FROM `airbus`");
															     while($row_airbus = mysql_fetch_array($Query))
																 {
															 ?>
																 
															   <option value="<?php echo $row_airbus['airbus_no']; ?>"><?php echo $row_airbus['airbus_no'] ;?></option>
															  
															  <?php 
															 }
															 ?>
														</select>
			
													</select>
												</div>
											</div>	
										</div>
										<div class="row">
											<div class="col-md-5">
												<div class="form-group">
													<label>From Airport</label>
													
													<select name="depart_from" class="form-control" required/>
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
											<div class="col-md-5">
												<div class="form-group">
													<label>To Airport</label>
													<select name="depart_to" class="form-control" required/>
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
										</div>
										<div class="row">
											<div class="col-md-5">
												<div class="form-group">
													<label>Depart Date</label>
													<input type="date" name="flight_date" class="form-control" placeholder="" required/>
												</div>
											</div>	
											<div class="col-md-5">
												<div class="form-group">
													<label>Depart Time</label>
													<input type="time" name="flight_time" class="form-control" placeholder=""required/>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-5">
												<div class="form-group">
													<label>Fare of Economy</label>
													<input type="text" name="fare_economy" class="form-control" placeholder="" required/>
												</div>
											</div>	
											<div class="col-md-5">											
												<div class="form-group">
													<label>Fare of First/Business</label>
													<input type="text" name="fare_first" class="form-control" placeholder=""required/>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-5">
												<div class="form-group">
													<label>Journey Hour</label>
													<input type="text" name="journey_hour" class="form-control" placeholder=""required/>
												</div>
											</div>											
										</div>
									</div>
								</div>
							</div>
						</div>
				</div>
						<div class="col-md-8">
							<button name="save" type="submit" class="btn btn-info btn-fill pull-right">Save</button>
							<div class="clearfix"></div>
							<div><?php echo $success; ?></div>
						</div>
					</form>						
            </div>
        
    
    
<?php include('footer.php'); ?>
