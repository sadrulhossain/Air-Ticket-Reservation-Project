<?php include 'header.php';?>
<?php 




?>

			<div class="choose-content">
				<div class="process-menu">
					<ul>
						<li >Search Flight</li>
						<li ><img src="image/process.png" alt="" /> Choose Flight</li>
						<li >Travellers' Info</li>
						<li >Purchase Ticket</li>
						<li >Confirmation</li>
					</ul>
				</div>
				<div class="choose">
					<div class="empty"></div>
					<form name="choose" id="choose" action="choose_flight.php" method="POST">
						<div class="well">
							<table class="table table-bordered table-responsive">
								<tr class="danger">
									<th></th>
									<th>Flight No.</th>
									<th>Origination</th>
									<th>Destination</th>
									<th>Date</th>
									<th>Time</th>
									<th>Total Cost</th>
								</tr>
								<tr>
									<td><input type="submit" class="btn btn-link" name="select" value="Select" /></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>
							</table>
							<br />
							<div class="row">
							<div class="col-md-4"></div>
							<div class="col-md-3"></div>
							<div class="col-md-4">
								<a href="search_flight.php" class="btn btn-primary">Back</a>
							</div>
						</div>
						</div>
					</form>
				</div>
			</div>
<?php include 'includes/footer.php';?>
			