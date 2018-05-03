<?php include 'header.php';?>
		<div class="edit-content">
		<div class="row">
			<div class="col-md-1"></div>
			<div class="col-md-10">
				<form name="login" id="login" action="login.php" method="POST">
					<div class="well">
						
							<div class="well">
								<div class="well well-lg">Edit Your Details</div>
								<?php 
								$db = new Database();
								$login = $_GET['login'];
								$logpass = $_GET['logpass'];
								
								$query = "SELECT * FROM passenger 
								WHERE login LIKE '$login' AND logpass LIKE '$logpass'";
								$edit = $db->select($query);
								if($edit){
									while($row = $edit->fetch_assoc()){
										?>
										<div class="row">
											<div class="col-md-3">Passport No.</div>
											<div class="col-md-3"><?php echo $row['pas_id'];?></div>
											<div class="col-md-6">
											<?php 
											if(isset($_POST['edit_id'])){
												$db = new Database();
												$pas_id = $_POST['edit_pas_id'];
												
												$query = "";
											}
											?>
												<input type="text" name="edit_pas_id" />
												<input type="submit" name="edit_id" class="btn btn-success" value="Edit" />
											</div>
										</div>
										<br />
										<div class="row">
											<div class="col-md-3">Passenger Name</div>
											<div class="col-md-3"><?php echo $row['pas_name'];?></div>
											<div class="col-md-6">
												<input type="text" name="edit_pas_name" />
												<input type="submit" name="edit_name" class="btn btn-success" value="Edit" />
											</div>
										</div>
										<br />
										<div class="row">
											<div class="col-md-3">From Airport</div>
											<div class="col-md-3"><?php echo $row['origin'];?></div>
											<div class="col-md-6">
												<select name="edit_origin" id="">
													<option value=""> </option>
												</select>
												<input type="submit" name="edit_origin" class="btn btn-success" value="Edit" />
											</div>
										</div>
										<br />
										<div class="row">
											<div class="col-md-3">To Airport</div>
											<div class="col-md-3"><?php echo $row['destin'];?></div>
											<div class="col-md-6">
												<select name="edit_destin" id="">
													<option value=""> </option>
												</select>
												<input type="submit" name="edit_destin" class="btn btn-success" value="Edit" />
											</div>
										</div>
										<br />
										<div class="row">
											<div class="col-md-3">Date</div>
											<div class="col-md-3"><?php echo $row['date'];?></div>
											<div class="col-md-6">
												<input type="edit_date" name="date" />
												<input type="submit" name="edit_date" class="btn btn-success" value="Edit" />
											</div>
										</div>
										<br />
										
										<div class="row">
											<div class="col-md-3">Class</div>
											<div class="col-md-3"><?php echo $row['class'];?></div>
											<div class="col-md-6">
												<select name="edit_class" id="">
													<option value="1">Business</option>
													<option value="2">Economy</option>
												</select>
												<input type="submit" name="edit_class" class="btn btn-success" value="Edit" />
											</div>
										</div>
										<?php
									}
								}
								?>
										
								
							</div>
							<br />
							<br />
							
						
					</div>
				</form>
			</div>
			<div class="col-md-1"></div>
		</div>
	</div>
<?php include 'includes/footer.php';?>
			