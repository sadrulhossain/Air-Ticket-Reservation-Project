<?php include 'header.php';?>
<?php 
	 
  	if(isset($_POST['save']))
		{
			$sql = mysql_query("INSERT INTO pas_registation(pas_fname,pas_lname, pas_username,pas_birth,
																pas_nationality, pas_passport, pas_mobile,pas_email,pas_password)
									   VALUES('{$_POST['pas_fname']}',			  
											  '{$_POST['pas_lname']}',
											  '{$_POST['pas_username']}',
											  '{$_POST['pas_birth']}',
											  '{$_POST['pas_nationality']}',
											  '{$_POST['pas_passport']}',
											  '{$_POST['pas_mobile']}',
											  '{$_POST['pas_email']}',
											  '{$_POST['pas_password']}')");
				if($sql)
					{
						$success =  "successfully insert!";
					}
		}

?>

 <link href="assets/css/jasny-bootstrap.min.css" rel="stylesheet" />
		<div class="pas-content">
			<div class="traveller"><br />	
				<div class="row"><div class="col-md-2"></div>
					<div class="col-md-8">
						<form action="" method="POST">
							<div class="well">
								
									<div class="well"><h5><strong>Give Your Information</strong></h5></div>
									<div class="row">
										<div class="col-md-1"></div>
										<div class="col-md-5">
											<div class="form-group">
												<label>First Name</label>
												<input type="text" name="pas_fname" class="form-control" placeholder="" required/>
											</div>
										</div>
										<div class="col-md-5">
											<div class="form-group">
												<label>Last Name</label>
												<input type="text" name="pas_lname" class="form-control" placeholder="" required/>
											</div>
										</div>											
									</div>
								
									<div class="row">
										<div class="col-md-1"></div>									
										<div class="col-md-5">
											<div class="form-group">
												<label>UserName</label>
												<input type="text" name="pas_username" class="form-control" placeholder="" required/>
											</div>
										</div>											
									</div>
					
									<div class="row">
										<div class="col-md-1"></div>
										<div class="col-md-5">
											<div class="form-group">
												<label>Birth Date</label>
												<input type="date" name="pas_birth" class="form-control" placeholder="" required/>
											</div>
										</div>	
										<div class="col-md-5" style="padding-left:20px;">
											<div class="form-group">
												<label>Nationality</label>
												<input type="text" name="pas_nationality" class="form-control" placeholder="" required/>
											</div>
										</div>
									</div>								
									<div class="row">	
										<div class="col-md-1"></div>
										<div class="col-md-5">
											<div class="form-group">
												<label>Passport Number</label>
												<input type="text" name="pas_passport" class="form-control" placeholder="" required/>
											</div>
										</div>
											<div class="col-md-5" style="padding-left:20px;">
											<div class="form-group">
												<label>Mobile</label>
												<input type="text" name="pas_mobile" class="form-control" placeholder="" required/>
											</div>									
										</div>
									</div>																							
									<div class="row">
										<div class="col-md-1"></div>
										<div class="col-md-5">
											<div class="form-group">
												<label>Email</label>
												<input type="email" name="pas_email" class="form-control" placeholder="" required/>
											</div>
										</div>	
										<div class="col-md-5" style="padding-left:20px;">
											<div class="form-group">
												<label>Password</label>
												<input type="password" name="pas_password" class="form-control" placeholder="" required/>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-3"></div>
										<div class="col-md-8">
											<button name="save" type="submit" class="btn btn-info btn-fill pull-right">Register</button>
											<div><?php echo $success; ?></div>
										</div>
									</div><br />
								
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	<script src="assets/js/jquery.min.js" type="text/javascript"></script>
    <script src="assets/js/jasny-bootstrap.min.js" type="text/javascript"></script>
<?php include 'footer.php';?>
			