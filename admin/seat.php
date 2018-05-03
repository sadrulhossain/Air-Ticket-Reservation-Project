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

	if(isset($_POST['save']))
		{
			$sql = mysql_query("INSERT INTO seat_tbl(airbus_no, seat_no)
									   VALUES('{$_POST['airbus_no']}',			  
											  '{$_POST['seat']}')");
				if($sql)
					{
						$success =  "successfully inserted!";
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
									<h4 class="title">Seat Master</h4>
								</div>
								<div class="content">
										<div class="row">
											<div class="col-md-5">
												<div class="form-group">
													<label>Airbus No.</label>
													<select name="airbus_no" class="form-control" required/>
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
													<label>Seat No.</label>
													<input type="text" name="seat" class="form-control" placeholder="" required/>
												</div>
											</div>
										</div>
										
								</div>
							</div>
						</div>
				</div>
						<div class="col-md-7">
							<button name="save" type="submit" class="btn btn-info btn-fill pull-right">Save</button>
							<div class="clearfix"></div>
							<div><?php echo $success; ?></div>
						</div>
					</form>						
            </div>
        </div>
   
<?php include('footer.php'); ?>