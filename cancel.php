<?php include 'header.php';?>
	<div class="login-content">
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<form name="login" id="login" action="cancel.php" method="POST">
					<div class="well">
						<fieldset>
							<legend><div class="well">Please Login First</div></legend>
							<?php 
							
								?>
								
							<div class="row">
								<div class="col-md-3">Passport No.</div>
								<div class="col-md-6"><input type="text" name="pas_id" class="form-control" /></div>
								<div class="col-md-3"></div>
							</div>
							<br />
							<div class="row">
								<div class="col-md-3">Login Id</div>
								<div class="col-md-6"><input type="text" name="login" class="form-control" /></div>
								<div class="col-md-3"></div>
							</div>
							<br />
							<div class="row">
								<div class="col-md-3">Password</div>
								<div class="col-md-6"><input type="password" name="logpass" class="form-control"  /></div>
								<div class="col-md-3"></div>
							</div>
							<br />
							<div class="row">
								<div class="col-md-12"></div>
							</div>
							<div class="row">
								<div class="col-md-4"></div>
								<div class="col-md-1"></div>
								<div class="col-md-5">
									<input type="submit" name="cancel" class="btn btn-success" class="form-control" 
									value="Cancel booking" />
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
			