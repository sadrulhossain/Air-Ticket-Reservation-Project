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
			$sql = mysql_query("INSERT INTO airport(airport_id,city, airport_name)
									   VALUES('{$_POST['airport_id']}',			  
											  '{$_POST['city']}',
											  '{$_POST['airport_name']}')");
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
									<h4 class="title">Airport Master</h4>
								</div>
								<div class="content">
										<div class="row">
											<div class="col-md-5">
												<div class="form-group">
													<label>Airport ID</label>
													<input type="text" name="airport_id" class="form-control" placeholder="" required/>
												</div>
											</div>																			
										</div>
										<div class="row">
											<div class="col-md-5">
												<div class="form-group">
													<label>City</label>
													<input name="city" class="form-control" placeholder="Select City" required/>
											</select>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-5">
												<div class="form-group">
													<label>Airport Name</label>
													<input type="text" name="airport_name" class="form-control" placeholder="" required/>
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