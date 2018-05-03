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
	
	$airbus_id = $_GET['ide'];
	if(isset($_GET['ide']))
		{
			$sql = mysql_query("SELECT * FROM airbus WHERE airbus_id = '{$airbus_id}'");
			$row = mysql_fetch_object($sql);
		}
	if(isset($_POST['save']))
		{	
			$sqlupdate = "UPDATE airbus
									SET airbus_no        = '{$_POST['airbus_no']}',
										economy_capacity = '{$_POST['economy_capacity']}',
										first_capacity   = '{$_POST['first_capacity']}'										
									WHERE airbus_id = '{$airbus_id}'";
						$res = mysql_query($sqlupdate);
						if($res)
						{
							header('location:list_airbus.php');	
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
													<label>Enter Airbus Number</label>
													<select name="airbus_no" class="form-control"  value="<?php echo $row->airbus_no; ?>" required/>
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
													<label>Enter Economy Capacity</label>
													<input type="text" name="economy_capacity" class="form-control" placeholder="" value="<?php echo $row->economy_capacity; ?>">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-5">
												<div class="form-group">
													<label>Enter First/Business Capacity</label>
													<input type="text" name="first_capacity" class="form-control" placeholder="" value="<?php echo $row->first_capacity; ?>">
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