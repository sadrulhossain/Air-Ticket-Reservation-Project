<?php include 'header.php';?>
			<div class="confirm-content">
				<div class="process-menu">
					<ul>
						<li >Search Flight</li>
						<li >Choose Flight</li>
						<li >Travellers' Info</li>
						<li >Purchase Ticket</li>
						<li ><img src="image/process.png" alt="" /> Confirmation</li>
					</ul>
				</div>
				<div class="confirm">
					<div class="empty"></div>
					<form name="ticket" id="ticket" action="ticket_details.php" method="POST">
						<div class="well">
							<table class="table table-bordered table-responsive">
								<tr class="info">
									<th>Passenger Name</th>
									<th>Passport No.</th>
									<th>Origination</th>
									<th>Destination</th>
									<th>Date</th>
									<th>Time</th>
									<th>Class</th>
									
								</tr>
								<tr>
									<td></td>
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
								<div class="col-md-5"></div>
								<div class="col-md-3">
									<a href="purchase.php" class="btn btn-primary">Back</a>
								</div>
								<div class="col-md-4">
									<input type="submit" name="confirm" class="btn btn-success" value="Confirm Reservation" />
								</div>
							</div>
							<br />
						</div>
					</form>
				</div>
			</div>
<?php include 'footer.php';?>
			