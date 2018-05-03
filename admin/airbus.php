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
			$sql = mysql_query("INSERT INTO airbus(airbus_no,economy_capacity, first_capacity)
									   VALUES('{$_POST['airbus_no']}',			  
											  '{$_POST['economy_capacity']}',
											  '{$_POST['first_capacity']}')");
				if($sql)
					{
						$success =  "successfully insert this record";
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
									<h4 class="title">Airbus Master</h4>
								</div>
								<div class="content">
										<div class="row">
											<div class="col-md-5">
												<div class="form-group">
													<label>Enter Airbus Number</label>
													<input type="text" name="airbus_no" class="form-control" placeholder="" required/>
												</div>
											</div>																			
										</div>
										<div class="row">
											<div class="col-md-5">
												<div class="form-group">
													<label>Enter Economy Capacity</label>
													<input type="text" name="economy_capacity" class="form-control" placeholder="" required/>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-5">
												<div class="form-group">
													<label>Enter First/Business Capacity</label>
													<input type="text" name="first_capacity" class="form-control" placeholder="" required/>
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