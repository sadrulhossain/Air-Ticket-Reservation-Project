<?php
session_start();
if (!isset($_SESSION['pas_passport'])) {
header('Location: pas_login.php');
}
?>
<?php include('header.php'); ?>


<title>Secured Page</title>
</head>
<body>
<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-5">
		<div class="well">
			<div class="well">
				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-7">
			<?php 
			$pas_passport = $_SESSION['pas_passport'];

							$sql = "SELECT * FROM book_ticket WHERE book_pas_passport='$pas_passport'";
							$result = mysql_query($sql);

							if($row = mysql_fetch_array($result)) {
								
								$book_pas_gender = $row['book_pas_gender'];
										if($book_pas_gender == '0')
											{
												$mr = "Mr.";
												$book_pas_gender = "Male";
											}
										else
											{
												$mr = "Ms.";
												$book_pas_gender = "Female";
											}
								$book_flight_no = $row["book_flight_no"];
								$book_depart_from = $row["book_depart_from"];
								$book_depart_to = $row["book_depart_to"];
								$book_flight_date = $row["book_flight_date"];
								$book_flight_time = $row["book_flight_time"];
								$book_journey_hour = $row["book_journey_hour"];
								$book_seat_number = $row["book_seat_number"];
								$book_journey_hour = $row["book_journey_hour"];
								$book_fare = $row["book_fare"];
								$book_pas_name = $row["book_pas_name"];
								//$book_pas_gender = $row["book_pas_gender"];
								$book_pas_passport = $row["book_pas_passport"];
								$book_pas_city = $row["book_pas_city"];
								$book_pas_mobile = $row["book_pas_mobile"];
								$book_email = $row["book_email"];
								$purchase_bank = $row["purchase_bank"];
								$purchase_ac = $row["purchase_ac"];
								$purchase_pass = $row["purchase_pass"];
								$purchase_money = $row["purchase_money"];

								echo "
													<p>Hello, <b>$mr $book_pas_name</b></p>
												</div>
												<div class='col-md-5'>
													<div class='form-group'>
														<a  class='btn btn-info pull-right' href='pas_logout.php'>Logout</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								<p>Your Information is here.</p></div>
								
								<div class='well'>
									<table>
										<tr><td>Flight Number:</td><td> </td><td>$book_flight_no</td></tr>
										<tr><td>Departed form:</td><td>  </td><td> $book_depart_from</td></tr>
										<tr><td>Departed to:</td><td>  </td><td> $book_depart_to</td></tr>
										<tr><td>Flight Date:</td><td>  </td><td> $book_flight_date</td></tr>
										<tr><td>Flight Time:</td><td>  </td><td> $book_flight_time</td></tr>
										<tr><td>Journey Hour:</td><td>  </td><td> $book_journey_hour</td></tr>
										<tr><td>Seat  Number:</td><td>  </td><td> $book_seat_number</td></tr>
										<tr><td>Fare:</td><td>  </td><td> $book_fare</td></tr>
										<tr><td>Passenger Name:</td><td>  </td><td> $book_pas_name</td></tr>
										<tr><td>Gender:</td><td>  </td><td> $book_pas_gender</td></tr>
										<tr><td>Passport Number:</td><td>  </td><td> $book_pas_passport</td></tr>
										<tr><td>City:</td><td>  </td><td> $book_pas_city</td></tr>
										<tr><td>Mobile No:</td><td>  </td><td> $book_pas_mobile</td></tr>
										<tr><td>Email:</td><td>  </td><td> $book_email</td></tr>
										<tr><td>Purchase Bank:</td><td>  </td><td> $purchase_bank</td></tr>
										<tr><td>Purchase Account:</td><td>  </td><td> $purchase_ac</td></tr>
										<tr><td>purchase Money:</td><td>  </td><td> $purchase_money</td></tr>
									</table>
								</div>
								";
							}
							
			  
			?>
			<br />
			<div class="row">
				
					
				<div class="col-md-8">
					<?php echo "<a data-toggle='tooltip' data-placement='right' title='Delete' class='btn btn-primary pull-right btn-sm' href='edit_ticket.php?ide=$book_pas_passport'><i class='fa fa-trash-o fa-lg'></i>Edit Ticket</a>";?>
				</div>
				<div class="col-md-4">
					<div class="form-group">
						<?php echo "<a data-toggle='tooltip' data-placement='right' title='Delete' class='btn btn-danger btn-sm' onclick='return confirm_delete();' href='delete_ticket.php?idd=$book_pas_passport'><i class='fa fa-trash-o fa-lg'></i>Cancel Ticket</a>";?>
					</div>
				</div>	
				
			</div>
		</div>

	</div>
	<div class="col-md-4"></div>
</div>
<script>
	function confirm_delete(){
			return confirm("Are you sure to delete this data.");
		}
</script>
	
<?php include('footer.php'); ?>

