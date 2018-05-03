<?php

    ob_start();
	session_start();
	if($_SESSION['name']!='uzzal')
	{
		header('location: admin_login.php');
	}

?>
<?php include('header.php'); ?>
<?php include('DB.php'); ?>
        <div class="content">
            <div class="container-fluid">
				<div class="row">
					<div class="col-md-6">
						<div class="card ">
							<div class="content">
								<div class="row">
									<div class="col-md-4">
										
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
																		
									</div>
								</div>
								<div class="row">
									<div class="col-md-4">
										
									</div>
								</div>
							
							</div>
							<div class="row">
									<div>
									</div>
							</div>	
					</div>
				</div>
			</div>
		</div>
	</div>
         
   
		
		
		
		
       
<?php include('footer.php'); ?>