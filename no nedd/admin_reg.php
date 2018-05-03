<?php include('header.php'); ?>
<?php include('DB.php'); ?>
<?php 
  	if(isset($_POST['save']))
		{
					
					$sql = mysql_query("INSERT INTO `admin_reg`(`admin_name`, `admin_id`, `admin_pass`) 
					                   VALUES('{$_POST['admin_name']}',
											  '{$_POST['admin_id']}',  
											  '{$_POST['admin_pass']}')");
					if($sql)
					{
						$success =  "successfully insert this record";
					}
		}
?>


<br />

<div class="content">
		<div class="container-fluid">
            <div class="row">
				<div class="col-md-4"></div>											
					<form action="" method="post">
						<div class="col-md-8">
							<div class="card">
									<h3 class="title">Admin Signup Here</h4>
								<hr />
								<div class="content">							
										<div class="row">
											<div class="col-md-3">
												<div class="form-group">
													<label>Admin Name :</label>
												</div>	
											</div>
											<div class="col-md-6">
												<div class="form-group">						
													<input type="text" name="admin_name" class="form-control" placeholder="">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-3">
												<div class="form-group">
													<label>Admin ID :</label>
												</div>	
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<input type="text" name="admin_id" class="form-control" placeholder="">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-3">
												<div class="form-group">
													<label>Password :</label>
												</div>	
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<input type="password" name="admin_pass" class="form-control" placeholder="">
												</div>
											</div>											
										</div>
										
								</div>
							</div>
						    <div class="row">
								<div class="col-md-2"></div>
								<div class="col-md-1">
									
								</div>
								<div class="col-md-6">
									<a class="btn btn-info btn-fill"  href="admin_login.php">Login Here</a>
									<button name="save" type="submit" class="btn btn-info btn-fill pull-right">Registation</button>
									<div class="clearfix"></div>
									<div><?php echo $success; ?></div>
								</div>
							</div><br />
						</div>
			</form>									
		</div>			
    </div>
</div>
	

<?php include('footer.php');?>