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
			$sql = mysql_query("INSERT INTO bank(bank_name)
									   VALUES('{$_POST['bank_name']}')");
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
									<h4 class="title">Bank Master</h4>
								</div>
								<div class="content">
										<div class="row">
											<div class="col-md-5">
												<div class="form-group">
													<label>Enter Bank</label>
													<input type="text" name="bank_name" class="form-control" placeholder="">
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