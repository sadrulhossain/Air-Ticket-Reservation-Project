<?php  include('header.php'); ?>
<?php 

  if(isset($_POST['save']))
		{
			$pas_passport = $_POST['pas_passport'];
			$pas_password = $_POST['pas_password'];
			
		$num = 0;
		$admin = mysql_query("SELECT * FROM `pas_registation` WHERE pas_passport='$pas_passport' AND pas_password = '$pas_password' ");
		$num = mysql_num_rows($admin);
		
		 if($num>0)
			{   
				session_start();
				$_SESSION['pas_passport'] = $pas_passport;
				$_SESSION['pas_password'] = $pas_password;
				

				
				header('location: pas_ticket.php');
				exit;
			}
		else
			{
				$failed = "Invalid username or Password"; 
				header('location: pas_login.php');
			}	

		}
?>
<div class="login-content">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<form method="POST">
					<div class="well">
						<fieldset>
							<legend><div class="well">Please Login First</div></legend>
							<div class="well">
							<div class="row">
								<div class="col-md-3">Passport No.</div>
								<div class="col-md-6"><input type="text" name="pas_passport" class="form-control" required/></div>
								<div class="col-md-3"></div>
							</div>
							<br />
							<div class="row">
								<div class="col-md-3">Password</div>
								<div class="col-md-6"><input type="password" name="pas_password" class="form-control"  required/></div>
								<div class="col-md-3"></div>
							</div>
							<br />
							<div class="row">
								<div class="col-md-12"></div>
							</div>
							</div>
							<div class="row">
								<div class="col-md-4"></div>
								<div class="col-md-3"></div>
								<div class="col-md-5">
									<input type="submit" name="save" class="btn btn-success" class="form-control" 
									value="Login" />
								</div>
							</div>
							<br />
						</fieldset>
					</div>
				</form>
			</div>
			<div class="col-md-3"></div>
		</div>
	</div>





<?php  include('footer.php'); ?>