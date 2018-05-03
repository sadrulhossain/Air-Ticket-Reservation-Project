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
                                <h4 class="title">Airbus List</h4>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
									    <th>#</th>
                                    	<th>Airbus Number</th>
                                    	<th>Economy Capacity</th>
										<th>First/Business Capacity</th>
                                    	<th>Action</th>
                                    </thead>
                                    <tbody>
									<?php 
										include_once('DB.php');
										$serial = 0;
										$sql = mysql_query("SELECT * FROM airbus");
										while($row = mysql_fetch_object($sql))
											{
												$serial++;								
												echo "<tr>
														<td>$serial</td>									
														<td>$row->airbus_no</td>
														<td>$row->economy_capacity</td>
														<td>$row->first_capacity</td>
														<td>
															<a data-toggle='tooltip' data-placement='top' title='Edit' class='btn btn-info btn-sm' href='edit_airbus.php?ide=$row->airbus_id'><i class='fa fa-pencil'></i></a>
															<a data-toggle='tooltip' data-placement='right' title='Delete' class='btn btn-danger btn-sm' onclick='return confirm_delete();' href='delete_airbus.php?idd=$row->airbus_id'><i class='fa fa-trash-o fa-lg'></i></a>
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