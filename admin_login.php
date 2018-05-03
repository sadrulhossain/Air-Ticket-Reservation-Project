<?php include('header.php'); ?>
<br />

<?php 

  if(isset($_POST['save']))
		{
		$num = 0;
		$admin = mysql_query("SELECT * FROM `admin_reg` WHERE admin_id='$_POST[admin_id]' AND admin_pass = '$_POST[admin_pass]' ");
		$num = mysql_num_rows($admin);
		
		 if($num>0)
			{
				session_start();
				$_SESSION['name'] = 'uzzal';
				header('location: admin/dashboard.php');
				exit;
			}
		else
			{
				$failed = "Invalid username or Password"; 
				header('location: admin_login.php');
			}	

		}
?>
<div class="login-content">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<form  action="" method="POST">
					<div class="well">
						<fieldset>
							<legend><div class="well">Admin Login Area</div></legend>
							<div class="well">
							<div class="row">
								<div class="col-md-3"><label>Admin ID</label></div>
								<div class="col-md-6"><input type="text" name="admin_id" class="form-control" required/></div>
								
							</div>
							<br />
							
							<div class="row">
								<div class="col-md-3"><label>Password</label></div>
								<div class="col-md-6"><input type="password" name="admin_pass" class="form-control" required/></div>				
							</div>
							</div>
							
							<div class="row">
								<div class="col-md-3"></div>
								<div class="col-md-4">
									
								</div>
								<div class="col-md-2">
									<button name="save" type="submit" class="btn btn-info btn-fill pull-right">Login</button>
								</div>
								<div><?php echo  $failed; ?></div>
							</div>
							<br />
						</fieldset>
					</div>
				</form>
			</div>
			<div class="col-md-3"></div>
		</div>
	</div>

<?php include('footer.php');?>