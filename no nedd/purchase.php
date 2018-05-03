<?php include 'header.php';?>

<?php
if(isset($_POST['save']))
	{
		$sqlpurchase = mysql_query("insert into purchase_tbl(purchase_bank,purchase_ac,purchase_pass,purchase_money)
									values
									('{$_POST['purchase_bank']}',
									 '{$_POST['purchase_ac']}',
									 '{$_POST['purchase_pass']}',
									 '{$_POST['purchase_money']}')");
			
						if($sqlpurchase)
							{
								$success = "Ticket Confirm Successfully";
							}			
	}	
?>
			<div class="purchase-content">
				<div class="process-menu">
					<ul>
						<li >Search Flight</li>
						<li >Choose Flight</li>
						<li >Travellers' Info</li>
						<li ><img src="image/process.png" alt="" /> Purchase Ticket</li>
						<li >Confirmation</li>
					</ul>
				</div>
				<div class="purchase">
					<div class="empty"></div>
					<form action="" method="POST">
						<div class="well">
							<div class="panel panel-primary">
								<div class="panel-heading">Give Your Bank Account Details</div>
								<br />
								<div class="row">
									<div class="form-group">
										<div class="col-md-4" style="padding-left:20px;">Bank Name</div>
										<div class="col-md-4">
											<select name="purchase_bank" class="form-control">
												<option>Select Bank</option>
															<?php 														
															    $Qbank = mysql_query("SELECT * FROM `bank`");
															     while($row_bank = mysql_fetch_array($Qbank))
																 {
															 ?>
																 
															   <option value="<?php echo $row_bank['bank_name']; ?>"><?php echo $row_bank['bank_name'] ;?></option>
															  
															  <?php 
															 }
															 ?>
											</select>
										</div>
										<div class="col-md-4"></div>
									</div>
								</div>
								<br />
								<div class="row">
									<div class="form-group">
										<div class="col-md-4" style="padding-left:20px;">Account No.</div>
										<div class="col-md-4">
											<input type="text" name="purchase_ac" class="form-control" />
										</div>
										<div class="col-md-4"></div>
									</div>
								</div>
								<br />
								<div class="row">
										<div class="form-group">
										<div class="col-md-4" style="padding-left:20px;">Account Password</div>
										<div class="col-md-4">
											<input type="password" name="purchase_pass"  class="form-control"/>
										</div>
										<div class="col-md-4"></div>
									</div>
								</div>
								<br />
								<div class="row">
									<div class="form-group">
										<div class="col-md-4" style="padding-left:20px;">Money</div>
										<div class="col-md-4">
											<input type="text" name="purchase_money"  class="form-control"/>
										</div>
										<div class="col-md-4"></div>
									</div>
								</div>
								<br />
								<br />
								<div class="row">
									<div class="col-md-1"></div>
									<div class="col-md-3">
										
									</div>
									<div class="col-md-4">
										<button name="save" type="submit" class="btn btn-info btn-fill pull-right">Confirm</button>
									</div>
									<div><?php echo $success;?></div>
								</div>
								<br />
							</div>
						</div>
					</form>
				</div>
			</div>
<?php include 'footer.php';?>
			