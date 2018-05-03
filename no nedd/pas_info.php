<?php include('header.php');  ?>
<br />
<div class="content">
    <div class="container-fluid">
        <div class="row">
		<div class="col-md-2"></div>
			<form action="" method="post">
				<div class="col-md-8">
					<div class="card">							
						<div class="content">
							<div class="row">
								<div class="col-md-5">
									<div class="form-group">
										<label>Passenger Name</label>
										<input type="text" name="pas_name" class="form-control" placeholder="">
									</div>
								</div>
							
								<div class="col-md-3">
									<div class="form-group">
										<label>Gender</label>
											<select name="pas_gender" class="form-control">
												
												<option value="0">Male</option>
												<option value="1">Female</option>
											</select>
									</div>
								</div>
							</div>	
							<div class="row">	
								<div class="col-md-8">
									<div class="form-group">
										<label>Passport Number</label>
										<input type="text" name="pas_passport" class="form-control" placeholder="">
									</div>
								</div>										
							</div>
							<div class="row">	
								<div class="col-md-8">
									<div class="form-group">
										<label>Passenger City</label>
										<input type="text" name="pas_city" class="form-control" placeholder="">
									</div>
								</div>										
							</div>
							<div class="row">	
								<div class="col-md-8">
									<div class="form-group">
										<label>Passenger Mobile Number</label>
										<input type="text" name="pas_mobile" class="form-control" placeholder="">
									</div>
								</div>										
							</div>
							<div class="row">	
								<div class="col-md-8">
									<div class="form-group">
										<label>Passenger Email</label>
										<input type="text" name="email" class="form-control" placeholder="">
									</div>
								</div>										
							</div>
							<div class="row">	
								<div class="col-md-4">
									<div class="form-group">
										<button name="save" type="submit" class="btn btn-info btn-fill pull-right"><a href="book_ticket2.php">Back</a></button>
									</div>
								</div>
								<div class="col-md-4">
									<div class="form-group">
										<button name="save" type="submit" class="btn btn-info btn-fill pull-right"><a href="purchase.php">Next</a></button>
									</div>
								</div>										
							</div>
							<br />
						</div>										
					</div>							
				</div>	
			</form>
		</div>	
	</div>		
</div>

<?php include('footer.php'); ?>