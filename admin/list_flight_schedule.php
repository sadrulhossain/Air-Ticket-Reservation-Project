<?php

    ob_start();
	session_start();
	if($_SESSION['name']!='uzzal')
	{
		header('location: admin_login.php');
	}

?>
<?php include_once('DB.php'); ?>
<?php include('header.php'); ?>

<style type="text/css">

.table > thead > tr > th, 
.table > tbody > tr > th, 
.table > tfoot > tr > th, 
.table > thead > tr > td, 
.table > tbody > tr > td, 
.table > tfoot > tr > td {
        padding: 0px 0px;
        padding-top: 8px;
        padding-right: 0px;
        padding-bottom: 0px;
        padding-left: 0px;
        vertical-align: middle;
}
</style>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Salary List</h4>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                    	<th>Enter Flight Number</th>
                                    	<th>Enter Airbus Number</th>
										<th>From Airport</th>
										<th>To Airport</th>
                                    	<th>Depart Date</th>
										<th>Depart Time</th>
										<th>Fare of Economy</th>
                                    	<th>Fare of First/Business</th>
										<th>Journey Hour</th>
                                    	<th>Action</th>
                                    </thead>
                                    <tbody>
									<?php 
										include_once('DB.php');
										$sql = mysql_query("SELECT * FROM flight_schedule");
										while($row = mysql_fetch_object($sql))
											{								
												echo "<tr>									
														<td>$row->flight_no</td>
														<td>$row->airbus_noo</td>
														<td>$row->depart_from</td>
														<td>$row->depart_to</td>
														<td>$row->flight_date</td>
														<td>$row->flight_time</td>
														<td>$row->fare_economy</td>
														<td>$row->fare_first</td>
														<td>$row->journey_hour</td>
														<td>
															<a data-toggle='tooltip' data-placement='top' title='Edit' class='btn btn-info btn-sm' href='edit_flight_schedule.php?ide=$row->flight_schedule_id'><i class='fa fa-pencil'></i></a>
															<a data-toggle='tooltip' data-placement='right' title='Delete' class='btn btn-danger btn-sm' onclick='return confirm_delete();' href='delete_flight.php?idd=$row->flight_schedule_id'><i class='fa fa-trash-o fa-lg'></i></a>
														</td>
														
													  </tr>";	
											}
					
									?>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       

<script>
	function confirm_delete(){
			return confirm("Are you sure to delete this data.");
		}
</script>

<?php include('footer.php'); ?>