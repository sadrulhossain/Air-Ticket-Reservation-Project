<?php include 'header.php';?>
	<div class="login-content">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<form name="login" id="login" action="login.php" method="POST">
					<div class="well">
						<fieldset>
							<legend>Please Login First</legend>
							
								
							<div class="row">
								<div class="col-md-3">Login ID</div>
								<div class="col-md-6"><input type="text" name="login" class="form-control"  /></div>
								<div class="col-md-3"></div>
							</div>
							<br />
							<div class="row">
								<div class="col-md-3">Password</div>
								<div class="col-md-6"><input type="password" name="logpass"  class="form-control" /></div>
								<div class="col-md-3"></div>
							</div>
							<br />
							<div class="row">
								<div class="col-md-12"></div>
							</div>
							<br />
							<?php 
							/* if(isset($_POST['pas_login'])){
								$db = new Database();
								$login = $_POST['login'];
								$logpass = $_POST['logpass'];
								$query = "SELECT * FROM passenger 
								WHERE login LIKE '$login' AND logpass LIKE '$logpass'";
								$login = $db->select($query);
							
								if($login){
									header("Location: edit.php?login='$_POST['login']'&logpass='$_POST['logpass']'");
									exit;
								}
								else{
									?>
									<div class="well">
										<h4>Login ID Or Password Incorrect!</h4>
									</div>
									<?php
								}
							} */
							?>
							<br />
							<div class="row">
								<div class="col-md-4"></div>
								<div class="col-md-2"></div>
								<div class="col-md-3">
									<input type="submit" name="pas_login" class="btn btn-success" value="Login" class="form-control" />
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
<?php include 'footer.php';?>