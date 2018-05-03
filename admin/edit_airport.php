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
	
	$airport_id = $_GET['ide'];
	if(isset($_GET['ide']))
		{
			$sql = mysql_query("SELECT * FROM airport WHERE airport_id = '{$airport_id}'");
			$row = mysql_fetch_object($sql);
		}
	if(isset($_POST['save']))
		{	
			$sqlupdate = "UPDATE airport
									SET airport_id   = '{$_POST['airport_id']}',
										city         = '{$_POST['city']}',
										airport_name = '{$_POST['airport_name']}'										
									WHERE airport_id = '{$airport_id}'";
						$res = mysql_query($sqlupdate);
						if($res)
						{
							header('location: list_airport.php');	
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
									<h4 class="title">Edit Airport Master</h4>
								</div>
								<div class="content">
										<div class="row">
											<div class="col-md-5">
												<div class="form-group">
													<label>Airport ID</label>
													<input type="text" name="airport_id" class="form-control" placeholder="" value="<?php echo $row->airport_id; ?>">
												</div>
											</div>																			
										</div>
										<div class="row">
											<div class="col-md-5">
												<div class="form-group">
													<label>City</label>
													<input type="text" name="city" class="form-control" placeholder="" value="<?php echo $row->city; ?>">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-5">
												<div class="form-group">
													<label>Airport Name</label>
													<input type="text" name="airport_name" class="form-control" placeholder="" value="<?php echo $row->airport_name; ?>">
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