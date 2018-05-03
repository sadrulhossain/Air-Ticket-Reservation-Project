<?php include('header.php');?>

<?php 
	$book_pas_passport = $_GET['idd'];
	if(isset($_GET['idd']))
	{
		$sql = mysql_query("SELECT * FROM book_ticket WHERE book_pas_passport = '{$book_pas_passport}'");
					while($row = mysql_fetch_object($sql))
						{
							$book_pas_gender = $row->book_pas_gender;
							if($book_pas_gender == '0')
								{
									$book_pas_gender = "Male";
								}
							else
								{
									$book_pas_gender = "Female";
						        }
							
							$book_flight_no    = $row->book_flight_no;
							$book_depart_from  = $row->book_depart_from;
							$book_depart_to    = $row->book_depart_to;
							$book_flight_date  = $row->book_flight_date;
							$book_flight_time  = $row->book_flight_time;							
							$book_seat_number  = $row->book_seat_number;
							$book_fare         = $row->book_fare;
							$book_pas_name     = $row->book_pas_name;
							//$book_pas_gender   = $row->book_pas_gender;							
							$book_pas_passport = $row->book_pas_passport;
							$book_pas_city     = $row->book_pas_city;
							$book_pas_mobile   = $row->book_pas_mobile;
							$book_email        = $row->book_email;
							$purchase_bank     = $row->purchase_bank;
							$purchase_ac       = $row->purchase_ac;
							$purchase_pass     = $row->purchase_pass;
							$purchase_money    = $row->purchase_money;
						}
						
						
						 
	}

?>
	
        <div class="content">
            <div class="container-fluid">
				<div class="row">
					<div class="col-md-8">
						<div class="well">
							<div class="card">
								<div class="well"><h4 class="title"><strong>Ticket Deatil</strong></h4></div>
								<hr />
								<div class="content">
									<div class="well">
										<form>
											<div class="row">
												<div class="col-md-4 col-sm-4"><label>Flight Number :</label></div><div class="col-md-8 col-sm-8"><span><?php echo $book_flight_no; ?></span></div>
											</div>
											<div class="row">
												<div class="col-md-4 col-sm-4"><label>Origination :</label></div><div class="col-md-8 col-sm-8"><span><?php echo $book_depart_from; ?></span></div>
											</div>
											<div class="row">
												<div class="col-md-4 col-sm-4"><label>Destination :</label></div><div class="col-md-8 col-sm-8"><span><?php echo $book_depart_to; ?></span></div>
											</div>
											<div class="row">
												<div class="col-md-4 col-sm-4"><label>Date :</label></div><div class="col-md-8 col-sm-8"><span><?php echo $book_flight_date; ?></span></div>
											</div>
												<div class="row">
												<div class="col-md-4 col-sm-4"><label>Time :</label></div><div class="col-md-8 col-sm-8"><span><?php echo $book_flight_time; ?></span></div>
											</div>
											<div class="row">
												<div class="col-md-4 col-sm-4"><label>Seat Number :</label></div><div class="col-md-8 col-sm-8"><span><?php echo $book_seat_number; ?></span></div>
											</div>
											<div class="row">
												<div class="col-md-4 col-sm-4"><label>Seat Class :</label></div><div class="col-md-8 col-sm-8"><span><?php echo $book_fare; ?></span></div>
											</div>
											<div class="row">
												<div class="col-md-4 col-sm-4"><label>Ticket Fee :</label></div><div class="col-md-8 col-sm-8"><span><?php echo $purchase_money; ?></span></div>
											</div>
											<div class="row">
												<div class="col-md-4 col-sm-4"><label>Passenger Name:</label></div><div class="col-md-8 col-sm-8"><span><?php echo $book_pas_name; ?></span></div>
											</div>

											<div class="row">
												<div class="col-md-4 col-sm-4"><label>Gender:</label></div><div class="col-md-8 col-sm-8"><span><?php echo $book_pas_gender; ?></span></div>
											</div>
											<div class="row">
												<div class="col-md-4 col-sm-4"><label>Passport Number :</label></div><div class="col-md-8 col-sm-8"><span><?php echo $book_pas_passport; ?></span></div>
											</div>
											<div class="row">
												<div class="col-md-4 col-sm-4"><label>City:</label></div><div class="col-md-8 col-sm-8"><span><?php echo $book_pas_city; ?></span></div>
											</div>
											<div class="row">
												<div class="col-md-4 col-sm-4"><label>Mobile Number :</label></div><div class="col-md-8 col-sm-8"><span><?php echo $book_pas_mobile; ?></span></div>
											</div>
											<div class="row">
												<div class="col-md-4 col-sm-4"><label>Passenger Email :</label></div><div class="col-md-8 col-sm-8"><span><?php echo $book_email; ?></span></div>
											</div>
										</div>
										
										<div class="row">
											<div class="col-md-10 col-sm-10"><a href="pas_registation.php" class="btn btn-primary btn-fill pull-right">Register Now</a></div>
										</div>
									</form>
								</div>
							</div>						
						</div>
					</div>
				</div>
            </div>
        </div>
        <br />

<?php include('footer.php');?>